<?php

namespace App\Http\Controllers;

use App\Models\Parametro;
use App\Models\Bpm;
use Illuminate\Http\Request;

class ParametroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bpm.parametro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ids_bpm=Bpm::latest('id')->first()->id;
        $countIds= count($request->nombre);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new Parametro();
            $array->nombre = $request->nombre[$i];
            $array->cofia = $request->cofia[$i];
            $array->cubre = $request->cubre[$i];
            $array->uniforme = $request->uniforme[$i];
            $array->manos = $request->manos[$i];
            $array->unas = $request->unas[$i];
            $array->heridas = $request->heridas[$i];
            $array->maquillaje = $request->maquillaje[$i];
            $array->botas = $request->botas[$i];
            $array->perfume = $request->perfume[$i];
            $array->enfermedad = $request->enfermedad[$i];
            $array->articulos = $request->articulos[$i];
            $array->observaciones = $request->observaciones[$i];
            $array->bpm_id = $ids_bpm;
            $array->save();
        }
        
        return view('bpm.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parametro  $parametro
     * @return \Illuminate\Http\Response
     */
    public function show(Parametro $parametro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parametro  $parametro
     * @return \Illuminate\Http\Response
     */
    public function edit(Parametro $parametro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parametro  $parametro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parametro $parametro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parametro  $parametro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parametro $parametro)
    {
        //
    }
}
