<?php

namespace App\Http\Controllers;

use App\Models\Desinfeccion;
use App\Models\Sanitizacion;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\ViewErrorBag;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class SanitizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sanitizacion.index');
    }

    public function buscar(Request $request)
    {
        $input = $request->all();

        if($request->get('buscar')){
            $noticias = Sanitizacion::where("p_anterior", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("p_entrada", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("fecha", "LIKE", "%{$request->get('buscar')}%")
                ->paginate(10);
        return view('sanitizacion.index')->with('buscar', $noticias);
        }else{
        $noticias = Sanitizacion::paginate(5);
            }

        return response($noticias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('sanitizacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sanitizacion = Sanitizacion::create([
            'fecha' => $request->fecha,
            'h_inicio' => $request->h_inicio,
            'h_final' => $request->h_final,
            'p_anterior' => $request->p_anterior,
            'p_entrada' => $request->p_entrada,
            'equipo' => $request->equipo,
            'observaciones' => $request->observaciones,
            'nombre_supervisor' => $request->nombre_supervisor,
            'firma_supervisor' => $request->firma_supervisor,
            'nombre_calidad' => $request->nombre_calidad,
            'firma_calidad' => $request->firma_calidad,
        ]);

        return view('sanitizacion.desinfeccion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sanitizacion  $sanitizacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iden= $id;
        $sani=Sanitizacion::where('id', $iden)->get();
        $desi=Desinfeccion::where('sanitizacion_id',$iden)->get();
        $pdf= Pdf::loadView('sanitizacion.pdf', compact('sani','desi'))->setPaper('a4', 'landscape');
        return $pdf->stream('sanitizacion.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sanitizacion  $sanitizacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Sanitizacion::find($id);
        $consulta2=Desinfeccion::where('sanitizacion_id',$id)->get();
        return view('sanitizacion.edit', compact('consulta','consulta2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sanitizacion  $sanitizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record=Sanitizacion::where('id',$id)
            ->update([
                'fecha' => $request->fecha,
                'h_inicio' => $request->h_inicio,
                'h_final' => $request->h_final,
                'p_anterior'=>$request->p_anterior,
                'p_entrada'=>$request->p_entrada,
                'equipo'=>$request->equipo,
                'observaciones'=>$request->observaciones,
                'nombre_supervisor'=>$request->nombre_supervisor,
                'firma_supervisor'=>$request->firma_supervisor,
                'nombre_calidad'=>$request->nombre_calidad,
                'firma_calidad'=>$request->firma_calidad,
                
            ]);


        
        $consulta2= count((array)$request->id_desinfeccion);
// No tocar esta puta parte plis
        for ($i=0; $i<$consulta2; $i++) {

            
   
        
        $data=Desinfeccion::where('id',$request->id_desinfeccion[$i])
                    ->update([
                    'actividad' => $request->actividad[$i],
                    'sustancia' => $request->sustancia[$i],
                    'concentracion' => $request->concentracion[$i],
                    'realizo' => $request->realizo[$i],
                    'cumple' => $request->cumple[$i],
                    'verifico' => $request->verifico[$i],
                    ]);

             }
        return redirect('sanitizacion/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sanitizacion  $sanitizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sanitizacion $sanitizacion)
    {
        //
    }
}
