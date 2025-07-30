<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listado['Empleados'] =  empleado::paginate(5);
        return view('empleados.index', $listado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosEmpleado = request()->except('_token');
        if($request->hasFile('Foto')){
            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }
        empleado::insert($datosEmpleado);
        return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        empleado::destroy($id);
        return redirect('empleados');
    }
}
