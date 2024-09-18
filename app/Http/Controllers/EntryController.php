<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Promo;
use App\Models\User;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $search = $request->input('search', '');

        $entries = Entry::whereHas('promo', function($query) use ($search) {
            $query->where('name', 'like', "%{$search}%");
        })
            ->orWhereHas('user', function($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate($perPage);

        return view('entries.index', compact('entries', 'search', 'perPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $promos = Promo::all();
        $users = User::all();
        return view('entries.create', compact('promos', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'promo_id' => 'required|exists:promos,id',
            'submission_date' => 'required|date',
            'status' => 'required|string|max:255',
        ]);

        Entry::create($request->all());

        return redirect()->route('entries.index')->with('success', 'Entry created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entry $entry)
    {
        $promo = $entry->promo();
        $user = $entry->user();

        return view('entries.show', compact('entry', 'user', 'promo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entry $entry)
    {
        $promos = Promo::all();
        $users = User::all();
        return view('entries.edit', compact('entry', 'promos', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entry $entry)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'promo_id' => 'required|exists:promos,id',
            'submission_date' => 'required|date',
            'status' => 'required|string|max:255',
        ]);

        $entry->update($request->all());

        return redirect()->route('entries.index')->with('success', 'Entry updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entry $entry)
    {
        $entry->delete();
        return redirect()->route('entries.index')->with('success', 'Entry deleted successfully.');
    }
}
