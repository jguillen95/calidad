<?php

namespace App\Http\Controllers;

use App\Models\Embalaje;
use App\Models\pterminado;
use Illuminate\Http\Request;

class EmbalajeController extends Controller
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
        return view('pterminado.embalaje');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $ids_pterminado=pterminado::latest('id')->first()->id;
        $countIds= count($request->codigo_emb);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new Embalaje();
            $array->material = $request->material[$i];
            $array->codigo_emb = $request->codigo_emb[$i];
            $array->descripcion = $request->descripcion[$i];
            $array->pterminado_id=$ids_pterminado;
            $array->save();
        }
       return view('pterminado.index');
    
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Embalaje  $embalaje
     * @return \Illuminate\Http\Response
     */
    public function show(Embalaje $embalaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Embalaje  $embalaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Embalaje $embalaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Embalaje  $embalaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Embalaje $embalaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Embalaje  $embalaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Embalaje $embalaje)
    {
        //
    }
}
