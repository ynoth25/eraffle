<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use Illuminate\Http\Request;

class PrizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10); // Default to 10 items per page

        $prizes = Prize::where('name', 'like', "%{$search}%")
            ->orWhere('description', 'like', "%{$search}%")
            ->paginate($perPage);

        return view('prizes.index', compact('prizes', 'search', 'perPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'value' => 'required|numeric',
            'promo_id' => 'required|exists:promos,id',
        ]);

        Prize::create($validatedData);

        return redirect()->route('prizes.index')->with('success', 'Prize created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prize $prize)
    {
        // Load the associated promo
        $promo = $prize->promo; // Assuming a `promo` relationship in the Prize model

        return view('prizes.show', compact('prize', 'promo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prize $prize)
    {
        return view('prizes.edit', compact('prize'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prize $prize)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'value' => 'required|numeric',
            'promo_id' => 'required|exists:promos,id',
        ]);

        $prize->update($validatedData);

        return redirect()->route('prizes.index')->with('success', 'Prize updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prize $prize)
    {
        $prize->delete();

        return redirect()->route('prizes.index')->with('success', 'Prize deleted successfully.');
    }
}
