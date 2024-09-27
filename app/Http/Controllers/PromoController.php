<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

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
        $hasOpenPromo = Promo::whereNull('end_date')->exists();

        if ($hasOpenPromo) {
            return redirect()->route('promos.index')->with('error', 'Cannot create a new Promo while another is open.');
        }

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
            'poster' => 'nullable|file|mimes:jpeg,png,jpg,gif,pdf',
        ]);

        $hasOpenPromo = Promo::whereNull('end_date')->exists();

        if ($hasOpenPromo) {
            return redirect()->route('promos.create')->with('error', 'Cannot create a new Promo while another is open.');
        } else {
            if ($request->hasFile('poster')) {
                $posterPath = $request->file('poster')->store('posters');
                $validatedData['poster'] = $posterPath;
            }

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
            'poster' => 'sometimes|file|mimes:jpeg,png,jpg,gif,pdf',
        ]);

        $hasOpenPromo = Promo::whereNull('end_date')
            ->where('id', '!=', $promo->id)
            ->exists();

        if ($hasOpenPromo) {
            return redirect()->route('promos.edit', $promo->id)
                ->with('error', 'Cannot update this Promo while another is open.');
        }

        if ($request->hasFile('poster')) {
            if ($promo->poster) {
                Storage::disk('public')->delete($promo->poster);
            }

            // Store new poster
            $posterPath = $request->file('poster')->store('posters');
            $validatedData['poster'] = $posterPath;
        }

        $promo->update($validatedData);

        return redirect()->route('promos.edit', $promo->id)
            ->with('success', 'Promo updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        if ($promo->poster) {
            Storage::disk('public')->delete($promo->poster);
        }

        $promo->delete();

        return redirect()->route('promos.index')->with('success', 'Promo deleted successfully.');
    }
}
