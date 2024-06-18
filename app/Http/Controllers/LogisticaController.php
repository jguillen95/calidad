<?php

namespace App\Http\Controllers;

use App\Models\Logistica;
use App\Models\pterminado;
use Illuminate\Http\Request;

class LogisticaController extends Controller
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
        return view('pterminado.logistica');
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
        $countIds= count($request->producto);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new Logistica();
            $array->tipo = $request->tipo[$i];
            $array->producto = $request->producto[$i];
            $array->caja = $request->caja[$i];
            $array->palet = $request->palet[$i];
            $array->pterminado_id = $ids_pterminado;
            $array->save();
        }
        
        return view('pterminado.contenido');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logistica  $logistica
     * @return \Illuminate\Http\Response
     */
    public function show(Logistica $logistica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logistica  $logistica
     * @return \Illuminate\Http\Response
     */
    public function edit(Logistica $logistica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logistica  $logistica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logistica $logistica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logistica  $logistica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logistica $logistica)
    {
        //
    }
}
