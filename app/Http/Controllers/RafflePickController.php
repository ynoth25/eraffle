<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Prize;
use App\Models\Promo;
use App\Models\RafflePick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RafflePickController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $search = $request->input('search', '');

        $promos = Promo::whereNull('deleted_at')->orderBy('created_at', 'desc')->get();
        $perPage = $request->input('per_page', 10); // Get pagination input
        $search = $request->input('search', ''); // Get search input
        $promo = Promo::whereNull('end_date')->latest()->first();

        $rafflePicks = RafflePick::when($promo, function ($query, $promo) {
            // Filter raffle picks by promo ID through the prize relationship
            return $query->whereHas('entry.promo', function ($query) use ($promo) {
                $query->where('id', $promo->id);
            });
        })
            ->where(function ($query) use ($search) {
                // Add search functionality for prize and entry details
                //                $query->whereHas('prize', function ($query) use ($search) {
                //                    $query->where('code', 'like', "%{$search}%")
                //                        ->orWhere('description', 'like', "%{$search}%");
                //                })
                $query->orWhereHas('entry', function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
                });
            })
            ->paginate($perPage); // Paginate the result

        return view('raffle_picks.index', compact('rafflePicks',  'promos', 'search', 'perPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $promo = Promo::whereNull('end_date')->latest()->first();

        //        $prize = $promo?->prizes()->where('status', '!=', 'picked')
        //            ->inRandomOrder()->first();
        $entries = $promo?->entries()->where('status', '!=', 'picked');

        //        if (!$prize) {
        //            session()->flash('error', 'This promo does not have any available prizes.');
        //        }

        if (!$entries) {
            session()->flash('error', 'This promo does not have any available entries.');
        }

        if (!$promo) {
            session()->flash('error', 'There is no open promo at the moment.');
        }

        return view('raffle_picks.create', compact('promo', 'entries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Promo $promo)
    {
        DB::beginTransaction(); // Start the transaction

        try {
            // Find a random entry that has not been picked yet
            $entry = Entry::where('status', '!=', 'picked')->inRandomOrder()->first();
            if (!$entry) {
                throw new \Exception('No available entry for this raffle.');
            }

            //            // Find a random prize that has not been picked yet
            //            $prize = Prize::where('status', '!=', 'picked')->inRandomOrder()->first();
            //            if (!$prize) {
            //                throw new \Exception('No available prize for this raffle.');
            //            }

            // Update the entry and prize status to 'picked'
            $entry->status = 'picked';
            $entry->save();

            //            $prize->status = 'picked';
            //            $prize->save();

            // Create a record for the raffle pick
            RafflePick::create([
                'entry_id' => $entry->id,
                'pick_date' => now(),
            ]);

            DB::commit(); // Commit the transaction

            // Redirect back to the raffle creation page with the picked entry and prize details
            return redirect()->route('raffle_picks.create')->with([
                'success' => 'Entry and prize have been picked successfully!',
                'pickedEntry' => $entry,
            ]);
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback the transaction on error
            Log::error('Raffle Pick failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was a problem with the raffle pick: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RafflePick $rafflePick)
    {
        return view('raffle_picks.show', compact('rafflePick'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, RafflePick $rafflePick)
    {
        $promo = Promo::find($request->input('promo'));

        return view('raffle_picks.edit', compact('rafflePick', 'promo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RafflePick $rafflePick)
    {
        $request->validate([
            'is_winner' => 'nullable|boolean',
        ]);

        $promo = Promo::findOrFail($request->query('promo'));

        // Update the raffle record
        $rafflePick->is_winner = $request->has('is_winner') ? true : false;
        $rafflePick->save();

        return redirect()->route('raffle_picks.edit', ['raffle_pick' => $rafflePick->id, 'promo' => $promo->id])->with('success', 'Raffle updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RafflePick $rafflePick)
    {
        return redirect()->route('raffle_picks.index')->with('success', 'Raffle Pick deleted successfully.');
    }
}
