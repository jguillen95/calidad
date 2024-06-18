<?php

namespace App\Http\Controllers;

use App\Models\Limpieza;
use App\Models\Mezcla;
use App\Models\MezclaItem;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class MezclaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mezcla=Mezcla::all();
        return view('mezcla.index', compact('mezcla'));
    }
    public function buscar(Request $request)
    {
        $input = $request->all();

        if($request->get('buscar')){
            $noticias = Mezcla::where("id", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("producto", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("reviso", "LIKE", "%{$request->get('buscar')}%")
                ->paginate(10);
        return view('mezcla.index')->with('buscar', $noticias);
        }else{
        $noticias = Mezcla::paginate(5);
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
        return view('mezcla.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mezcla=new Mezcla;
        $mezcla->producto=$request->input('producto');
        $mezcla->lote=$request->input('lote');
        $mezcla->q1=$request->input('q1');
        $mezcla->q3=$request->input('q3');
        $mezcla->q4=$request->input('q4');
        $mezcla->reviso=$request->input('reviso');
        $mezcla->autorizo=$request->input('autorizo');
        $mezcla->observaciones=$request->input('observaciones');
        $mezcla->save();
       return redirect('mezclaItem/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mezcla  $mezcla
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $iden= $id;
                $mezcla=Mezcla::where('id', $iden)->get();
                $mezclaItem=MezclaItem::where('mezcla_id',$iden)->get();
                $pdf= Pdf::loadView('mezcla.pdf', compact('mezcla','mezclaItem'))->setPaper('a4', 'portrait');
                return $pdf->stream('mezcla.pdf');
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mezcla  $mezcla
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $consulta = Mezcla::find($id);
        $consulta2=MezclaItem::where('mezcla_id',$id)->get();
        return view('mezcla.edit', compact('consulta','consulta2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mezcla  $mezcla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $record=Mezcla::where('id',$id)
            ->update([
                'producto' => $request->producto,
                'q1' => $request->q1,
                'q3' => $request->q3,
                'q4'=>$request->q4,
                'q5'=>$request->q5,
                'reviso'=>$request->reviso,
                'autorizo'=>$request->autorizo,
                'observaciones'=>$request->observaciones,
                
            ]);


        
        $consulta2= count((array)$request->id_mezcla);
// No tocar esta puta parte plis
        for ($i=0; $i<$consulta2; $i++) {

            
   
        
                $data=MezclaItem::where('id',$request->id_mezcla[$i])
                    ->update([
                    'i_mezcla' => $request->i_mezcla[$i],
                    'f_mezcla' => $request->f_mezcla[$i],
                    'tiempo' => $request->tiempo[$i],
                    'apariencia' => $request->apariencia[$i],
                    'color' => $request->color[$i],
                    'olor' => $request->olor[$i],
                    'sabor' => $request->sabor[$i],
                    'granulometria' => $request->granulometria[$i],
                    'consistencia' => $request->consistencia[$i],
                    'solubilidad' => $request->solubilidad[$i],
                    'ph' => $request->ph[$i],
                    'peso_teorico' => $request->peso_teorico[$i],
                    'peso_real' => $request->peso_real[$i],
                    'cumple' => $request->cumple[$i],
                    'firma_realizo' => $request->firma_realizo[$i],
                    'firma_verifico' => $request->firma_verifico[$i],
     
            ]);
       
    
        } 
        return redirect('mezcla/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mezcla  $mezcla
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mezcla $mezcla)
    {
        //
    }
}
