<?php

namespace App\Http\Controllers;

use App\Models\Articoli;
use Illuminate\Http\Request;

class ArticoliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articoli = Articoli::all();
        return view('articoli.index', compact('articoli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articoli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titolo' => 'required|string|max:255',
            'data' => 'required|date',
            'testo' => 'required|string',
            'autore' => 'required|string|max:255',
        ]);

        Articoli::create($request->all());
        return redirect()->route('articoli.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Articoli $articoli)
    {
        return view('articoli.show', compact('articoli'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articoli $articoli)
    {
        return view('articoli.edit', compact('articoli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articoli $articoli)
    {
        $request->validate([
            'titolo' => 'required|string|max:255',
            'data' => 'required|date',
            'testo' => 'required|string',
            'autore' => 'required|string|max:255',
        ]);

        $articoli->update($request->all());
        return redirect()->route('articoli.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articoli $articoli)
    {
        $articoli->delete();
        return redirect()->route('articoli.index');
    }
}
