<?php

namespace App\Http\Controllers;

use App\Models\ModDocumentos;
use Illuminate\Http\Request;
use App\Models\Desviaciones;

class ModDocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moddocumentos=ModDocumentos::all();
        return view('moddocumentos.index', compact('moddocumentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_desviaciones=Desviaciones::all();
        return view('moddocumentos.create', compact('list_desviaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $ultimoId = Desviaciones::latest('id')->first()->id;
        // $moddocumentos=new ModDocumentos();
        // $moddocumentos->codigo=$request->input('codigo');
        // $moddocumentos->titulo=$request->input('titulo');
        // $moddocumentos->responsable=$request->input('responsable');
        // $moddocumentos->fecha=$request->input('fecha');
        // $moddocumentos->firma_mod=$request->input('firma_mod');
        // $moddocumentos->desviacionDoc_id=$ultimoId;
        // $moddocumentos->save();
        // return redirect('moddocumentos/create');
        $ids_desviacion=Desviaciones::latest('id')->first()->id;
        $countIds= count($request->codigo);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new ModDocumentos();
            $array->codigo = $request->codigo[$i];
            $array->titulo = $request->titulo[$i];
            $array->responsable = $request->responsable[$i];
            $array->fecha = $request->fecha[$i];
            $array->firma_mod = $request->firma_mod[$i];
            $array->desviacionDoc_id = $ids_desviacion;
            $array->save();
        }
        
        return view('seguimiento.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModDocumentos  $modDocumentos
     * @return \Illuminate\Http\Response
     */
    public function show(ModDocumentos $modDocumentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModDocumentos  $modDocumentos
     * @return \Illuminate\Http\Response
     */
    public function edit(ModDocumentos $modDocumentos)
    {
        return view('moddocumentos.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModDocumentos  $modDocumentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModDocumentos $modDocumentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModDocumentos  $modDocumentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModDocumentos $modDocumentos)
    {
        //
    }
}
