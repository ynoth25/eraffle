<?php

namespace App\Http\Controllers;

use App\Imports\SerialNumberImport;
use App\Models\Promo;
use App\Models\Validation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $search = $request->input('search', '');
        $promos = Promo::whereNull('deleted_at')->orderBy('created_at', 'desc')->get();
        $promo = Promo::whereNull('end_date')->latest()->first();

        $validations = Validation::where(function ($query) use ($search) {
            $query->where('serial_number', 'like', "%{$search}%")
                ->orWhere('status', 'like', "%{$search}%");
        })
            ->where('promo_id', $request->query('promo_id'))
            ->paginate($perPage);

        return view('validations.index', compact('validations', 'promos', 'search', 'perPage', 'promo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('validations.create', ['promo' => $request->query('promo')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $promo = Promo::findOrFail($request->query('promo'));

        $validator = Validator::make($request->all(), [
            'serial_number' => 'required_without:file|unique:valid_sachets,serial_number|max:255',
            'file' => 'nullable|file|mimes:xlsx,csv',
        ]);

        if ($validator->fails()) {
            return redirect()->route('validations.create', compact('promo'))->withErrors($validator)->withInput();
        }

        // Check if a file is uploaded
        if ($request->hasFile('file')) {
            try {
                // Import the file using the PrizeImport class
                Excel::import(new SerialNumberImport($promo), $request->file('file'));

                return redirect()->back()->with('success', 'Data imported successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'There was a problem with the import: ' . $e->getMessage());
            }
        }


        Validation::create([
            'promo_id' => $promo->id,
            'serial_number' => $request->input('serial_number'),
            'status' => 'active'
        ]);

        return redirect()->route('validations.create', compact('promo'))->with('success', 'Serial Number created successfully.');
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
    public function edit(Request $request, Validation $validation)
    {
        $promo = Promo::find($request->query('promo'));
        return view('validations.edit', compact('validation', 'promo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Validation $validation)
    {
        $promo = Promo::find($request->query('promo'));
        $validator = Validator::make($request->all(), [
            'serial_number' => 'required|unique:valid_sachets,serial_number|string|max:255',
            'file' => 'nullable|file|mimes:xlsx,csv',
        ]);

        if ($validator->fails()) {
            return redirect()->route('validations.edit', compact('validation', 'promo'))->withErrors($validator)->withInput();
        }

        $validation->update([
            'serial_number' => $request->input('serial_number'),
            'status' => $request->input('status')
        ]);

        return redirect()->route('validations.edit', compact('validation', 'promo'))->with('success', 'Validation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Validation $validation)
    {
        return redirect()->route('validations.index')->with('success', 'Validation deleted successfully.');
    }
}
