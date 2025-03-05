<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oficinas = Oficina::all();
        return view('oficinas.index', compact('oficinas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('oficinas.crearoficina');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        Oficina::create($request->all());
        return redirect()->route('listaoficinas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $oficina = Oficina::findOrFail($id);
        return view('oficinas.mostraroficinas', compact('oficina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oficina $oficina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oficina $oficina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oficina $oficina)
    {
        //
    }
}
