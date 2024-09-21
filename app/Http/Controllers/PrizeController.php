<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use App\Models\Promo;
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
        $promo = Promo::find($request->input('promo'));

        $prizes = $promo->prizes()
            ->where(function ($query) use ($search) {
                $query->where('code', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            })
            ->paginate($perPage);

        return view('prizes.index', compact('prizes', 'promo', 'search', 'perPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('prizes.create', ['promo' => $request->query('promo')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $promo = Promo::findOrFail($request->query('promo'));

        // Validate the request, making the file optional
        $validator = Validator::make($request->all(), [
            'code' => 'required_without:file|unique:prizes,code|max:255',
            'description' => 'required_without:file|max:255',
            'quantity' => 'nullable|numeric',
            'file' => 'nullable|file|mimes:xlsx,csv',
        ]);

        if ($validator->fails()) {
            return redirect()->route('prizes.create', compact('promo'))->withErrors($validator)->withInput();
        }

        // Check if a file is uploaded
        if ($request->hasFile('file')) {
            try {
                // Import the file using the PrizeImport class
                Excel::import(new PrizeImport($promo), $request->file('file'));

                return redirect()->back()->with('success', 'Data imported successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'There was a problem with the import: ' . $e->getMessage());
            }
        }

        $promo->prizes()->create([
            'code' => $request->input('code'),
            'description' => $request->input('description'),
            'status' => 'active',
        ]);

        return redirect()->route('prizes.create', compact('promo'))->with('success', 'Prize created successfully.');
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
    public function edit(Request $request, Prize $prize)
    {
        $promo = Promo::find($request->query('promo'));
        return view('prizes.edit', compact('prize', 'promo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prize $prize)
    {
        $promo = Promo::findOrFail($request->query('promo'));

        $validatedData = $request->validate([
            'code' => 'required|max:255',
            'description' => 'required|max:255',
            'quantity' => 'nullable|numeric|max:255',
            'status' => 'required|max:255',
        ]);

        $prize->update($validatedData);

            return redirect()->route('prizes.edit', compact('prize', 'promo'))->with('success', 'Prize updated successfully.');
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