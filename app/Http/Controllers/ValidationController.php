<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Entry;
use App\Models\Validation;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $search = $request->input('search', '');

        $validations = Validation::whereHas('entry', function($query) use ($search) {
            $query->where('id', 'like', "%{$search}%");
        })
            ->orWhereHas('admin', function($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate($perPage);

        return view('validations.index', compact('validations', 'search', 'perPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entries = Entry::all();
        $admins = Admin::all(); // Changed to Admin model
        return view('validations.create', compact('entries', 'admins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'entry_id' => 'required|exists:entries,id',
            'validated_by' => 'required|exists:admins,id', // Changed to Admin model
            'validation_code' => 'required|string',
            'validation_status' => 'required|string',
            'comments' => 'nullable|string',
            'validation_date' => 'required|date',
        ]);

        Validation::create($request->all());

        return redirect()->route('validations.index')->with('success', 'Validation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Validation $validation)
    {
        $admin = $validation->admin();
        $entry = $validation->entry();

        return view('validations.show', compact('validation', 'admin', 'entry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Validation $validation)
    {
        $entries = Entry::all();
        $admins = Admin::all(); // Changed to Admin model
        return view('validations.edit', compact('validation', 'entries', 'admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Validation $validation)
    {
        $request->validate([
            'entry_id' => 'required|exists:entries,id',
            'validated_by' => 'required|exists:admins,id', // Changed to Admin model
            'validation_code' => 'required|string',
            'validation_status' => 'required|string',
            'comments' => 'nullable|string',
            'validation_date' => 'required|date',
        ]);

        $validation->update($request->all());

        return redirect()->route('validations.index')->with('success', 'Validation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Validation $validation)
    {
        return redirect()->route('validations.index')->with('success', 'Validation deleted successfully.');
    }
}
