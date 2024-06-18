<?php

namespace App\Http\Controllers;

use App\Models\Suplemento;
use Illuminate\Http\Request;
Use App\Models\ficha;

class SuplementoController extends Controller
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
        return view('fichas.suplemento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ids_ficha=ficha::latest('id')->first()->id;
        $countIds= count($request->ingrediente);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new Suplemento();
            $array->ingrediente = $request->ingrediente[$i];
            $array->ficha_id = $ids_ficha;
            $array->save();
        }
        
        return view('fichas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suplemento  $suplemento
     * @return \Illuminate\Http\Response
     */
    public function show(Suplemento $suplemento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suplemento  $suplemento
     * @return \Illuminate\Http\Response
     */
    public function edit(Suplemento $suplemento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suplemento  $suplemento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suplemento $suplemento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suplemento  $suplemento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suplemento $suplemento)
    {
        //
    }
}
