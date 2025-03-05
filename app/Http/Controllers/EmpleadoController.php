<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Oficina;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Oficina $oficina)
    {
        $empleados = $oficina->empleados;
        return view('oficinas.mostraroficinas', compact('empleados', 'oficina'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Oficina $oficina)
    {
        return view('empleados.crearempleado', compact('oficina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'dni' => 'required|size:9|unique:empleados,dni',
            'email' => 'required|email|unique:empleados,email,',
            'oficina_id' => 'required|exists:oficinas,id'
        ]);

        Empleado::create($request->all());

        return redirect()->route('listaempleados', ['oficina' => $request->oficina_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleados.mostrarempleados', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        $oficinas = Oficina::all();

        return view('empleados.editarempleado', compact('empleado', 'oficinas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'dni' => 'required|size:9|unique:empleados,dni,'.$id,
            'email' => 'required|email|unique:empleados,email,'.$id,
        ]);
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return redirect()->route('listaempleados', ['oficina' => $request->oficina_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
