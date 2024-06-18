<?php

namespace App\Http\Controllers;

use App\Models\Bpm;
use App\Models\Parametro;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\ViewErrorBag;

class BpmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('bpm.index');
    }

    public function buscar(Request $request)
    {
        $input = $request->all();

        if($request->get('buscar')){
            $noticias = Bpm::where("turno", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("ubicacion", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("fecha", "LIKE", "%{$request->get('buscar')}%")
                ->paginate(10);
        return view('bpm.index')->with('buscar', $noticias);
        }else{
        $noticias = Bpm::paginate(5);
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
        return view('bpm.create');
    }

    public function autoriza($id){
        $consulta = Bpm::find($id);
        return view('bpm.autoriza', compact('consulta'));
    }

    public function autorizaStore(Request $request, $id){
       
        $record=Bpm::where('id',$id)
            ->update([
                'vobo' => $request->vobo,                
            ]);

            return redirect('bpm/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bpms = Bpm::create([
            'fecha' => $request->fecha,
            'turno' => $request->turno,
            'hora' => $request->hora,
            'ubicacion' => $request->ubicacion,
            'realizo' => $request->realizo,
            'vobo' => $request->vobo,
        ]);

        return view('bpm.parametro');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bpm  $bpm
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iden= $id;
             $bpms=Bpm::where('id', $iden)
            ->get();
            $parametros=Parametro::where('bpm_id',$iden)->get();
                $pdf= Pdf::loadView('bpm.pdf', compact('bpms','parametros'))->setPaper('a4', 'landscape');
                // ->setPaper('a4', 'landscape')
                return $pdf->stream('bpm.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bpm  $bpm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Bpm::find($id);
        $consulta2=Parametro::where('bpm_id',$id)->get();
        return view('bpm.edit', compact('consulta','consulta2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bpm  $bpm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record=Bpm::where('id',$id)
            ->update([
                'fecha' => $request->fecha,
                'turno' => $request->turno,
                'hora' => $request->hora,
                'ubicacion'=>$request->ubicacion,
                'realizo'=>$request->realizo,
                'vobo'=>$request->vobo,
            ]);


        
        $consulta2= count((array)$request->id_parametros);
// No tocar esta puta parte plis
        for ($i=0; $i<$consulta2; $i++) {

            
   
        
        $data=Parametro::where('id',$request->id_parametros[$i])
                    ->update([
                    'nombre' => $request->nombre[$i],
                    'cofia' => $request->cofia[$i],
                    'cubre' => $request->cubre[$i],
                    'uniforme' => $request->uniforme[$i],
                    'manos' => $request->manos[$i],
                    'unas' => $request->unas[$i],
                    'heridas' => $request->heridas[$i],
                    'maquillaje' => $request->maquillaje[$i],
                    'botas' => $request->botas[$i],
                    'perfume' => $request->perfume[$i],
                    'enfermedad' => $request->enfermedad[$i],
                    'articulos' => $request->articulos[$i],
                    'observaciones' => $request->observaciones[$i],
     
                    ]);

             }
        return view('bpm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bpm  $bpm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bpm $bpm)
    {
        //
    }
}
