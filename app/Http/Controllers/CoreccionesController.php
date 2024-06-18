<?php

namespace App\Http\Controllers;

use App\Models\Corecciones;
use App\Models\Desviaciones;
use App\Http\Controllers\DesviacionesController;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class CoreccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $correcciones=Corecciones::all();
        return view('correccion.index', compact('correcciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_desviaciones=Desviaciones::all();
        return view('correccion.create', compact('list_desviaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ids_desviacion=Desviaciones::latest('id')->first()->id;
        $aplica=$request->na;
        $correccion='No aplica';
        if($aplica==1){
            $correcciones = Corecciones::create([
                'actividad' => $correccion,
                'responsable' => $correccion,
                'firma_corre' => $correccion,
                'tipo' => $correccion,
                'desviacionCorrecion_id' => $ids_desviacion,
            ]);
        }else{
         $countIds= count($request->actividad);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new Corecciones();
            $array->actividad = $request->actividad[$i];
            $array->responsable = $request->responsable[$i];
            $array->fecha_corre = $request->fecha_corre[$i];
            $array->firma_corre = $request->firma_corre[$i];
            $array->tipo = $request->tipo[$i];
            $array->desviacionCorrecion_id = $ids_desviacion;
            $array->save();
        }
    }
        return view('desviacion.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Corecciones  $corecciones
     * @return \Illuminate\Http\Response
     */
    public function show(Corecciones $corecciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Corecciones  $corecciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $correcciones=Corecciones::find($id);
        return view('correccion.update',compact('correcciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Corecciones  $corecciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $correcciones=Corecciones::find($id);
        $correcciones->actividad=$request->input('actividad');
        $correcciones->responsable=$request->input('responsable');
        $correcciones->fecha_corre=$request->input('fecha');
        $correcciones->firma_corre=$request->input('firma');
        $correcciones->tipo=$request->input('tipo');
        $correcciones->update();
        return redirect('correccion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Corecciones  $corecciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corecciones $corecciones)
    {
        //
    }
}
