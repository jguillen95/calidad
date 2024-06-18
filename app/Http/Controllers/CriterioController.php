<?php

namespace App\Http\Controllers;

use App\Models\Codificado;
use App\Models\Corrugado;
use App\Models\Criterio;
use App\Models\Empaque;
use App\Models\Granel;
use App\Models\Polvoadicional;
use App\Models\Sellado;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CriterioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('criterio.index');
    }

    public function buscar(Request $request)
    {
        $input = $request->all();

        if($request->get('buscar')){
            $noticias = Criterio::where("producto", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("id", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("id_sap_pt", "LIKE", "%{$request->get('buscar')}%")
                ->paginate(10);
        return view('criterio.index')->with('buscar', $noticias);
        }else{
        $noticias = Criterio::paginate(5);
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
        return view('criterio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $criterio=new Criterio();
       $criterio->tipo=$request->input('tipo');
       $criterio->id_sap_pt=$request->input('id_sap_pt');
       $criterio->producto=$request->input('producto');
       $criterio->pesos=$request->input('pesos');
       $criterio->notas=$request->input('notas');
       $criterio->save();
       if($request->input('tipo')=='VISCOSO-1'){
            return view('criterio.viscoso');
       }elseif($request->input('tipo')=='TABLETAS'){
            return view('criterio.tableta');
        }elseif($request->input('tipo')=='SACHET'){
            return view('criterio.sachet');
         }elseif($request->input('tipo')=='LIQUIDO'){
            return view('criterio.liquido');
        }elseif($request->input('tipo')=='POLVOS'){
            return view('criterio.polvo');
        }elseif($request->input('tipo')==2){
                return view('criterio.selenium');
        }elseif($request->input('tipo')==3){
                return view('criterio.biovita');
                        }
        elseif($request->input('tipo')==4){
                return view('criterio.polvotemplate');
                        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Criterio  $criterio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iden= $id;
        $empaque=Empaque::where('criterio_id',$iden )->get();
        $criterio=Criterio::where('id',$iden )->get();
        $mezcla=Granel::where('criterio_id',$iden )->get();
        $sellado=Sellado::where('criterio_id',$iden )->get();
        $codificado=Codificado::where('criterio_id',$iden )->get();
        $corrugado=Corrugado::where('criterio_id',$iden )->get();
        $polvos=Polvoadicional::where('criterio_id',$iden )->get();
        $pdf= Pdf::loadView('criterio.pdf', compact('polvos','empaque','criterio','mezcla','sellado','codificado','corrugado'))
        ->setPaper('a4', 'portrait');
        return $pdf->stream('criterio.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Criterio  $criterio
     * @return \Illuminate\Http\Response
     */
    public function edit(Criterio $criterio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Criterio  $criterio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Criterio $criterio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Criterio  $criterio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Criterio $criterio)
    {
        //
    }
}
