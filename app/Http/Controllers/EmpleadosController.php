<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleados;
class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Listaempleados = empleados::all();
        return response()->json($Listaempleados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'correo'=>'required',
        ]);

        $Listaempleados = empleados::create($request->all());
        return response()->json($Listaempleados);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Listaempleados = empleados::findOrFail($id);
        return response()->json($Listaempleados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required',
            'correo'=>'required',
        ]);
        $Listaempleados = empleados::findOrFail($id)->update($request->all());
        return response()->json($Listaempleados);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Listaempleados = empleados::destroy($id);
        return response()->json($Listaempleados);
    }
}
