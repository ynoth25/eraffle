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
        $perPage = $request->input('per_page', 10);
        $promos = Promo::whereNull('deleted_at')->orderBy('created_at', 'desc')->get();

        $prizes = Prize::where(function ($query) use ($search) {
            $query->where('code', 'like', "%{$search}%")
                ->whereNull('deleted_at')
                ->orWhere('description', 'like', "%{$search}%");
        })
            ->where('promo_id', $request->query('promo_id'))
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);

        return view('prizes.index', compact('promos', 'prizes', 'search', 'perPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $promos = Promo::whereNull('deleted_at')->whereNull('end_date')->orderBy('created_at', 'desc')->get();
        return view('prizes.create', compact('promos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request, making the file optional
        $validator = Validator::make($request->all(), [
            'promo_id' => 'required|exists:promos,id',
            'code' => 'required_without:file|unique:prizes,code|max:255',
            'description' => 'required_without:file|max:255',
            'quantity' => 'nullable|numeric',
            'file' => 'nullable|file|mimes:xlsx,csv',
        ]);

        if ($validator->fails()) {
            return redirect()->route('prizes.create')->withErrors($validator)->withInput();
        }

        // Check if a file is uploaded
        if ($request->hasFile('file')) {
            try {
                // Import the file using the PrizeImport class
                Excel::import(new PrizeImport($request->input('promo_id')), $request->file('file'));

                return redirect()->back()->with('success', 'Data imported successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'There was a problem with the import: ' . $e->getMessage());
            }
        }

        Prize::create([
            'promo_id' => $request->input('promo_id'),
            'code' => $request->input('code'),
            'description' => $request->input('description'),
            'status' => 'active',
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->route('prizes.create')->with('success', 'Prize created successfully.');
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
        $promos = Promo::whereNull('deleted_at')->whereNull('end_date')->orderBy('created_at', 'desc')->get();

        return view('prizes.edit', compact('prize', 'promos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prize $prize)
    {
        $validatedData = $request->validate([
            'code' => 'required|max:255',
            'description' => 'required|max:255',
            'quantity' => 'sometimes|numeric|max:255',
            'status' => 'required|max:255',
        ]);

        $prize->update($validatedData);

        return redirect()->route('prizes.edit', compact('prize'))->with('success', 'Prize updated successfully.');
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
