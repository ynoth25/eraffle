<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use Illuminate\Http\Request;
use App\Imports\PrizeImport;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;


class PrizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10); // Default to 10 items per page

        $prizes = Prize::where('code', 'like', "%{$search}%")
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
        // Validate the request, making the file optional
        $validator = Validator::make($request->all(), [
            'code' => 'required_without:file|unique:prizes,code|max:255',
            'description' => 'required_without:file|max:255',
            'file' => 'nullable|file|mimes:xlsx,csv',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if a file is uploaded
        if ($request->hasFile('file')) {
            try {
                // Import the file using the PrizeImport class
                Excel::import(new PrizeImport, $request->file('file'));

                return redirect()->back()->with('success', 'Data imported successfully');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'There was a problem with the import: ' . $e->getMessage());
            }
        }

        // Create the prize record with the validated data
        Prize::create([
            'code' => $request->input('code'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('prizes.index')->with('success', 'Prize created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prize $prize)
    {
        return view('prizes.show', compact('prize'));
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
            'code' => 'required|max:255',
            'description' => 'required|max:255',
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
