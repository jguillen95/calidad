<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use App\Models\pterminado;
use Illuminate\Http\Request;

class ContenidoController extends Controller
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
        return view('pterminado.contenido');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idrec=pterminado::latest('id')->first()->id;
        $pterminado=new Contenido();
        $pterminado->cajas_cama=$request->input('cajas_cama');
        $pterminado->camas_palet=$request->input('camas_palet');
        $pterminado->unidad_caja=$request->input('unidad_caja');
        $pterminado->unidad_palet=$request->input('unidad_palet');
        $pterminado->caja_palet=$request->input('caja_palet');
        $pterminado->pterminado_id=$idrec;
        $pterminado->save();
       return view('pterminado.embalaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contenido  $contenido
     * @return \Illuminate\Http\Response
     */
    public function show(Contenido $contenido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contenido  $contenido
     * @return \Illuminate\Http\Response
     */
    public function edit(Contenido $contenido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contenido  $contenido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contenido $contenido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contenido  $contenido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contenido $contenido)
    {
        //
    }
}
