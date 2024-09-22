<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10); // Default to 10 if not provided

        // Search query with pagination
        $promos = Promo::where('name', 'like', "%{$search}%")
            ->orWhere('description', 'like', "%{$search}%")
            ->paginate($perPage);

        // Pass the search term and perPage to the view
        return view('promos.index', compact('promos', 'search', 'perPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Check if there is an open promo without an end date
        $hasOpenPromo = Promo::whereNull('end_date')->exists();

        if ($hasOpenPromo) {
            // Redirect back to the promo listing page with a flash error message
            return redirect()->route('promos.index')->with('error', 'Cannot create a new Promo while another is open.');
        }

        // No open promo, proceed to show the creation form
        return view('promos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'terms_and_conditions' => 'required|string',
        ]);

        $hasOpenPromo = Promo::whereNull('end_date')->exists();

        if ($hasOpenPromo) {
            return redirect()->route('promos.create')->with('error', 'Cannot create a new Promo while another is open.');
        } else {
          Promo::create($validatedData);
        }

        return redirect()->route('promos.create')->with('success', 'Promo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        return view('promos.show', compact('promo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        return view('promos.edit', compact('promo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'terms_and_conditions' => 'required|string',
        ]);

        // Check if there is another promo that is open (excluding the current one being updated)
        $hasOpenPromo = Promo::whereNull('end_date')
            ->where('id', '!=', $promo->id)  // Exclude the current promo
            ->exists();

        if ($hasOpenPromo) {
            // Redirect back with an error message if another open promo exists
            return redirect()->route('promos.edit', $promo->id)
                ->with('error', 'Cannot update this Promo while another is open.');
        }

        // Proceed with the update if no other open promo exists
        $promo->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('promos.edit', $promo->id)
            ->with('success', 'Promo updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        $promo->delete();

        return redirect()->route('promos.index')->with('success', 'Promo deleted successfully.');
    }
}
