<?php

namespace App\Http\Controllers;

use App\Models\Criterio;
use App\Models\Polvotemp;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PolvotempController extends Controller
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
        return view('criterio.polvotemplate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ids_criterio=Criterio::latest('id')->first()->id;

        $polvos = Polvotemp::create([
            'sap_id_etiqueta' => $request->sap_id_etiqueta,
           'desc_si_etiqueta' => $request->desc_si_etiqueta,
           'desc_si_mezcla' => $request->desc_si_mezcla,
           'desc_lotificado_si' => $request->desc_lotificado_si,
           'lote_envase' => $request->lote_envase,
           'cad_envase' => $request->cad_envase,
           'criterio_id' => $ids_criterio,
        ]);
        return view('criterio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Polvotemp  $polvotemp
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iden= $id;
        $polvos=Polvotemp::Where('criterio_id', $iden)->get();
        $criterio=Criterio::where('id',$iden )->get();
        $pdf= Pdf::loadView('criterio.pdfpolvotemp', compact('polvos','criterio'))
        ->setPaper('a4', 'portrait');
        return $pdf->stream('criterio.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Polvotemp  $polvotemp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Criterio::find($id);
        $consulta2=Polvotemp::where('criterio_id',$id)->get();
        return view('criterio.editPolvost', compact('consulta','consulta2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Polvotemp  $polvotemp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record=Criterio::where('id',$id)
            ->update([
                'id_sap_pt' => $request->id_sap_pt,
                'producto' => $request->producto,
                'pesos' => $request->pesos,
                'notas'=>$request->notas,
            ]);

            $record=Polvotemp::where('criterio_id',$id)
            ->update([
                'sap_id_etiqueta' => $request->sap_id_etiqueta,
                'desc_si_etiqueta' => $request->desc_si_etiqueta,
                'desc_si_mezcla' => $request->desc_si_mezcla,
                'desc_lotificado_si' => $request->desc_lotificado_si,
                'lote_envase' => $request->lote_envase,
                'cad_envase' => $request->cad_envase,
            ]);

            return view('criterio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Polvotemp  $polvotemp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Polvotemp $polvotemp)
    {
        //
    }
}
