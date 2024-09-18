<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Promo;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $search = $request->input('search', '');

        $faqs = FAQ::where('question', 'like', "%{$search}%")
            ->orWhere('answer', 'like', "%{$search}%")
            ->paginate($perPage);

        return view('faqs.index', compact('faqs', 'search', 'perPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $promos = Promo::all();

        return view('faqs.create', compact('promos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'promo_id' => 'required|exists:promos,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        FAQ::create($request->all());

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        $promo = $faq->promo();
        return view('faqs.show', compact('faq', 'promo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'promo_id' => 'required|exists:promos,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq->update($request->all());

        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
