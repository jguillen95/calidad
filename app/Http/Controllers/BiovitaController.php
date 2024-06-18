<?php

namespace App\Http\Controllers;

use App\Models\Biovita;
use App\Models\Criterio;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class BiovitaController extends Controller
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
       return view('criterio.biovita');
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

        $imagen = $request->file("img_si_etiqueta");                        
        $nombreimagen = $imagen->getClientOriginalName();
        $nombre = strtolower(str_replace(" ", "_", $nombreimagen));
        $ruta = public_path("img/criterio/");            
        copy($imagen->getRealPath(),$ruta.$nombre);
        $si_etiqueta=$nombre;

        $imagen2 = $request->file("img_no_etiqueta");                        
        $nombreimagen2 = $imagen2->getClientOriginalName();
        $nombre2 = strtolower(str_replace(" ", "_", $nombreimagen2));
        $ruta2 = public_path("img/criterio/");            
        copy($imagen2->getRealPath(),$ruta2.$nombre2);
        $no_etiqueta=$nombre2;

        $empaque1 = Biovita::create([
            'desc_si_envase' => $request->desc_si_envase,
            'desc_si_tapa' => $request->desc_si_tapa,
            'desc_si_liner' => $request->desc_si_liner,
            'sap_id_etiqueta' => $request->sap_id_etiqueta,
            'img_si_etiqueta' => $si_etiqueta,
            'img_no_etiqueta' => $no_etiqueta,
            'desc_si_etiqueta' => $request->desc_si_etiqueta,
            'desc_no_etiqueta' => $request->desc_no_etiqueta,
            'desc_si_capsula' => $request->desc_si_capsula,
            'desc_si_desecante' => $request->desc_si_desecante,
            'desc_si_mezcla' => $request->desc_si_mezcla,
            'densidad_mezcla' => $request->densidad_mezcla,
            'ph_mezcla' => $request->ph_mezcla,
            'desc_envase_si' => $request->desc_envase_si,
            'lote_envase' => $request->lote_envase,
            'cad_envase' => $request->cad_envase,
            'criterio_id' => $ids_criterio,
        ]);

        return view('criterio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biovita  $biovita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iden= $id;
        $biovita=Biovita::Where('criterio_id', $iden)->get();
        $criterio=Criterio::where('id',$iden )->get();
        $pdf= Pdf::loadView('criterio.pdfbiovita', compact('biovita','criterio'))
        ->setPaper('a4', 'portrait');
        return $pdf->stream('criterio.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biovita  $biovita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Criterio::find($id);
        $consulta2=Biovita::where('criterio_id',$id)->get();
        return view('criterio.editBiovita', compact('consulta','consulta2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biovita  $biovita
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

        $record=Biovita::where('criterio_id',$id)
        ->update([
            'desc_si_envase' => $request->desc_si_envase,
            'desc_si_tapa' => $request->desc_si_tapa,
            'desc_si_liner' => $request->desc_si_liner,
            'img_si_etiqueta' => $request->img_si_etiqueta,
            'img_no_etiqueta' => $request->img_no_etiqueta,
            'desc_si_etiqueta' => $request->desc_si_etiqueta,
            'desc_no_etiqueta' => $request->desc_no_etiqueta,
            'desc_si_capsula' => $request->desc_si_capsula,
            'desc_si_desecante' => $request->desc_si_desecante,
            'desc_si_mezcla' => $request->desc_si_mezcla,
            'densidad_mezcla' => $request->densidad_mezcla,
            'ph_mezcla' => $request->ph_mezcla,
            'desc_envase_si' => $request->desc_envase_si,
            'lote_envase' => $request->lote_envase,
            'cad_envase' => $request->cad_envase,
            'sap_id_etiqueta' => $request->sap_id_etiqueta,
        ]);

        return view('criterio.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biovita  $biovita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biovita $biovita)
    {
        //
    }
}
