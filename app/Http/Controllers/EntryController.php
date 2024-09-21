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
    public function create(Request $request)
    {
        $promo = Promo::where('end_date', NULL)->latest()->first();

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
            ]);

            return redirect()->route('submit-entry')->with('success', 'Entry submitted successfully!');
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
