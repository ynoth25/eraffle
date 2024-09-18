<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Promo;
use App\Models\RafflePick;
use Illuminate\Http\Request;

class RafflePickController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $search = $request->input('search', '');

        $rafflePicks = RafflePick::whereHas('promo', function($query) use ($search) {
            $query->where('name', 'like', "%{$search}%");
        })
            ->orWhereHas('entry', function($query) use ($search) {
                $query->where('id', 'like', "%{$search}%");
            })
            ->paginate($perPage);

        return view('raffle_picks.index', compact('rafflePicks', 'search', 'perPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $promos = Promo::all();
        $entries = Entry::all();
        return view('raffle_picks.create', compact('promos', 'entries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'promo_id' => 'required|exists:promos,id',
            'entry_id' => 'required|exists:entries,id',
            'pick_date' => 'required|date',
            'is_winner' => 'required|boolean',
        ]);

        RafflePick::create($request->all());

        return redirect()->route('raffle_picks.index')->with('success', 'Raffle Pick created successfully.');
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
    public function edit(RafflePick $rafflePick)
    {
        $promos = Promo::all();
        $entries = Entry::all();

        return view('raffle_picks.edit', compact('rafflePick', 'promos', 'entries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RafflePick $rafflePick)
    {
        $request->validate([
            'promo_id' => 'required|exists:promos,id',
            'entry_id' => 'required|exists:entries,id',
            'pick_date' => 'required|date',
            'is_winner' => 'required|boolean',
        ]);

        $rafflePick->update($request->all());

        return redirect()->route('raffle_picks.index')->with('success', 'Raffle Pick updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RafflePick $rafflePick)
    {
        return redirect()->route('raffle_picks.index')->with('success', 'Raffle Pick deleted successfully.');
    }
}
