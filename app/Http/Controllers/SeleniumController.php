<?php

namespace App\Http\Controllers;

use App\Models\Codificado;
use App\Models\Criterio;
use App\Models\Empaque;
use App\Models\Polvoadicional;
use App\Models\Selenium;
use App\Models\Sellado;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SeleniumController extends Controller
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
        return view('criterio.selenium');
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

        $imagen8 = $request->file("img_si_display");                        
        $nombreimagen8 = $imagen8->getClientOriginalName();
        $nombre8 = strtolower(str_replace(" ", "_", $nombreimagen8));
        $ruta8 = public_path("img/criterio/");            
        copy($imagen8->getRealPath(),$ruta8.$nombre8);
        $si_display=$nombre8;

        $empaque1 = Empaque::create([
            'id_sap_display' => $request->id_sap_display,
            'img_si_display' => $si_display,
            'criterio_id' => $ids_criterio,
        ]);

        $imagen26 = $request->file("img_si_termo");                        
        $nombreimagen26 = $imagen26->getClientOriginalName();
        $nombre26 = strtolower(str_replace(" ", "_", $nombreimagen26));
        $ruta26 = public_path("img/criterio/");            
        copy($imagen26->getRealPath(),$ruta26.$nombre26);
        $si_termo=$nombre26;

        $empaque = Polvoadicional::create([
            'img_si_termo' => $si_termo,
            'desc_si_termo' => $request->desc_si_termo,
            'desc_no_termo' => $request->desc_no_termo,
            'criterio_id' => $ids_criterio,
        ]);

        $codificado = Codificado::create([
            'lote_envase_c' => $request->lote_envase_c,
            'cad_envase_c' => $request->cad_envase_c,
            'criterio_id' => $ids_criterio,
        ]);

        $sellado = Sellado::create([
            'desc_si_sellado' => $request->desc_si_sellado,
            'criterio_id' => $ids_criterio,
        ]);

        return view('criterio.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Selenium  $selenium
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iden= $id;
        $empaque=Empaque::where('criterio_id',$iden )->get();
        $criterio=Criterio::where('id',$iden )->get();
        $sellado=Sellado::where('criterio_id',$iden )->get();
        $codificado=Codificado::where('criterio_id',$iden )->get();
        $polvos=Polvoadicional::where('criterio_id',$iden )->get();
        $pdf= Pdf::loadView('criterio.pdfselenium', compact('polvos','empaque','criterio','sellado','codificado'))
        ->setPaper('a4', 'portrait');
        return $pdf->stream('criterio.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Selenium  $selenium
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Criterio::find($id);
        $consulta2=Empaque::where('criterio_id',$id)->get();
        $consulta3=Polvoadicional::where('criterio_id',$id)->get();
        $consulta4=Codificado::where('criterio_id',$id)->get();
        $consulta5=Sellado::where('criterio_id',$id)->get();
        return view('criterio.editSelenium', compact('consulta','consulta2','consulta3','consulta4','consulta5'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Selenium  $selenium
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

            $record=Empaque::where('criterio_id',$id)
            ->update([
                'id_sap_display' => $request->id_sap_display,
            ]);
            $record=Polvoadicional::where('criterio_id',$id)
            ->update([
                'desc_si_termo' => $request->desc_si_termo,
                'desc_no_termo' => $request->desc_no_termo,
            ]);
            $record=Codificado::where('criterio_id',$id)
            ->update([
                'lote_envase_c' => $request->lote_envase_c,
                'cad_envase_c' => $request->cad_envase_c,
            ]);
            $record=Sellado::where('criterio_id',$id)
            ->update([
                'desc_si_sellado' => $request->desc_si_sellado,
            ]);
            

            return view('criterio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Selenium  $selenium
     * @return \Illuminate\Http\Response
     */
    public function destroy(Selenium $selenium)
    {
        //
    }
}
