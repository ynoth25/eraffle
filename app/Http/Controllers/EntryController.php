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
        $perPage = $request->input('per_page', 10);
        $search = $request->input('search', '');

        $entries = Entry::query()
            ->where(function($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('address', 'like', "%{$search}%");
            })
            ->paginate($perPage);

        return view('entries.index', compact('entries', 'search', 'perPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entries.create');
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
                'address' => 'required|string|max:255',
                'sachet_front_image' => 'required|image',
                'sachet_back_image' => 'required|image',
                'id_front_image' => 'required|image',
                'id_back_image' => 'required|image',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }


            // File upload handling
            $sachetFrontImagePath = $request->file('sachet_front_image')->store('sachets');
            $sachetBackImagePath = $request->file('sachet_back_image')->store('sachets');
            $idFrontImagePath = $request->file('id_front_image')->store('ids');
            $idBackImagePath = $request->file('id_back_image')->store('ids');

            // Create entry
            Entry::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'sachet_front_image' => $sachetFrontImagePath,
                'sachet_back_image' => $sachetBackImagePath,
                'id_front_image' => $idFrontImagePath,
                'id_back_image' => $idBackImagePath,
                'status' => 'pending',
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
