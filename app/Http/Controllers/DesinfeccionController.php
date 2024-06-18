<?php

namespace App\Http\Controllers;

use App\Models\Desinfeccion;
use App\Models\Sanitizacion;
use Illuminate\Http\Request;

class DesinfeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sanitizacion.desinfeccion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ids_sanitizacion=Sanitizacion::latest('id')->first()->id;
        $countIds= count($request->sustancia);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new Desinfeccion();
            $array->actividad = $request->actividad[$i];
            $array->sustancia = $request->sustancia[$i];
            $array->concentracion = $request->concentracion[$i];
            $array->realizo = $request->realizo[$i];
            $array->cumple = $request->cumple[$i];
            $array->verifico = $request->verifico[$i];
            $array->sanitizacion_id = $ids_sanitizacion;
            $array->save();
        }
        
        return view('sanitizacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desinfeccion  $desinfeccion
     * @return \Illuminate\Http\Response
     */
    public function show(Desinfeccion $desinfeccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desinfeccion  $desinfeccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Desinfeccion $desinfeccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Desinfeccion  $desinfeccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desinfeccion $desinfeccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desinfeccion  $desinfeccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desinfeccion $desinfeccion)
    {
        //
    }
}
