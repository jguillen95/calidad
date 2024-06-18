<?php

namespace App\Http\Controllers;

use App\Models\Seguimiento;
use Illuminate\Http\Request;
use App\Models\Desviaciones;

class SeguimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seguimientos=Seguimiento::select('seguimientos.id', 'seguimientos.descripcion_seg',
        'seguimientos.realizo_seg', 'seguimientos.fecha_seg','seguimientos.desviacion_id',
        'desviaciones.descripcion_des')
        ->join('desviaciones', 'desviaciones.id', '=', 'seguimientos.desviacion_id')
        ->get();
       
        
        
        return view('seguimiento.index', compact('seguimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_desviaciones=Desviaciones::all();
        return view('seguimiento.create', compact('list_desviaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    $seguimientos=new Seguimiento();
    //    $seguimientos->descripcion_seg=$request->input('descripcion_seg');
    //    $seguimientos->realizo_seg=$request->input('realizo');
    //    $seguimientos->fecha_seg=$request->input('fecha');
    //    $seguimientos->desviacion_id=$request->input('desviacion_id');
    //    $seguimientos->save();
    //    return redirect('seguimiento/create');
        $ids_desviacion=Desviaciones::latest('id')->first()->id;
        $countIds= count($request->descripcion_seg);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new Seguimiento();
            $array->descripcion_seg = $request->descripcion_seg[$i];
            $array->realizo_seg = $request->realizo_seg[$i];
            $array->fecha_seg = $request->fecha_seg[$i];
            $array->desviacion_id = $ids_desviacion;
            $array->save();
        }
        
        return view('desviacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Seguimiento $seguimiento)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list_desviaciones=Desviaciones::all();
        $seguimientos=Seguimiento::find($id);
        return view('seguimiento.update',compact('seguimientos','list_desviaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $seguimientos= Seguimiento::find($id);
        $seguimientos->descripcion_seg=$request->input('descripcion_seg');
        $seguimientos->realizo_seg=$request->input('realizo');
        $seguimientos->fecha_seg=$request->input('fecha');
        $seguimientos->desviacion_id=$request->input('desviacion_id');
        $seguimientos->update();
        return redirect('seguimiento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seguimiento $seguimiento)
    {
        //
    }
}
