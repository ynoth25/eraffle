<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Promo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10000);
        $search = $request->input('search', '');

        // Find the promo based on input or default to the first one with a null end_date
        $promo = Promo::find($request->input('promo')) ?? Promo::whereNull('end_date')->first();
        $promos = Promo::whereNull('deleted_at')->orderBy('created_at', 'desc')->get();

        // Check if promo exists
        if (!$promo) {
            return redirect()->back()->with('error', 'No active promo found.');
        }

        // Build the query on the entries relationship
        $entries = $promo->entries()
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('address', 'like', "%{$search}%");
            })
            ->where('promo_id', $request->query('promo_id'))
            ->paginate($perPage);

        return view('entries.index', compact('entries', 'promos', 'search', 'perPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $promo = Promo::where('end_date', NULL)->latest()->first();

        if (!$promo) {
            session()->flash('error', 'There is no open promo.');
        }

        return view('entries.create', compact('promo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'nullable|email',
                'phone' => 'nullable|required_without:email|string|max:255',
                'address' => 'nullable|string|max:255',
                'promo_id' => 'nullable|integer|exists:promos,id',
                'serial_number' => 'required|unique:entries,serial_number|exists:valid_sachets,serial_number|string|max:255',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Create entry
            Entry::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'status' => 'pending',
                'serial_number' => $request->serial_number,
                'promo_id' => $request->promo_id,
            ]);

            return redirect()->route('entries.create')->with('success', 'Entry submitted successfully!');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Entry submission failed: ' . $e->getMessage());

            // Redirect with error message
            return redirect()->back()->with('error', 'An error occurred while submitting the entry.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Entry $entry)
    {
        return view('entries.show', compact('entry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entry $entry)
    {
        abort(403, 'We are currently not allowed to edit this entry.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entry $entry)
    {
        abort(403, 'We are currently not allowed to update this entry.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entry $entry)
    {
        abort(403, 'We are currently not allowed to delete this entry.');
    }
}
