<?php

namespace App\Http\Controllers;

use App\Models\Codificado;
use App\Models\Corrugado;
use App\Models\Criterio;
use App\Models\Empaque;
use App\Models\Granel;
use App\Models\Liquido;
use App\Models\Polvoadicional;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LiquidoController extends Controller
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
        return view('criterio.liquido');
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

        $imagen = $request->file("img_si_envase");                        
        $nombreimagen = $imagen->getClientOriginalName();
        $nombre = strtolower(str_replace(" ", "_", $nombreimagen));
        $ruta = public_path("img/criterio/");            
        copy($imagen->getRealPath(),$ruta.$nombre);

        $imagen1 = $request->file("img_no_envase");                        
        $nombreimagen1 = $imagen1->getClientOriginalName();
        $nombre1 = strtolower(str_replace(" ", "_", $nombreimagen1));
        $ruta1 = public_path("img/criterio/");            
        copy($imagen1->getRealPath(),$ruta1.$nombre1);
        $no_envase=$nombre1;

        $imagen6 = $request->file("img_si_pegotin");                        
            $nombreimagen6 = $imagen6->getClientOriginalName();
            $nombre6 = strtolower(str_replace(" ", "_", $nombreimagen6));
            $ruta6 = public_path("img/criterio/");            
            copy($imagen6->getRealPath(),$ruta6.$nombre6);
            $si_pegotin=$nombre6;

            $imagen7 = $request->file("img_no_pegotin");                        
            $nombreimagen7 = $imagen7->getClientOriginalName();
            $nombre7 = strtolower(str_replace(" ", "_", $nombreimagen7));
            $ruta7 = public_path("img/criterio/");            
            copy($imagen7->getRealPath(),$ruta7.$nombre7);
            $no_pegotin=$nombre7;

            $imagen8 = $request->file("img_si_display");                        
            $nombreimagen8 = $imagen8->getClientOriginalName();
            $nombre8 = strtolower(str_replace(" ", "_", $nombreimagen8));
            $ruta8 = public_path("img/criterio/");            
            copy($imagen8->getRealPath(),$ruta8.$nombre8);
            $si_display=$nombre8;

            $imagen9 = $request->file("img_no_display");                        
            $nombreimagen9 = $imagen9->getClientOriginalName();
            $nombre9 = strtolower(str_replace(" ", "_", $nombreimagen9));
            $ruta9 = public_path("img/criterio/");            
            copy($imagen9->getRealPath(),$ruta9.$nombre9);
            $no_display=$nombre9;

            $empaque = Empaque::create([
                'id_sap_envase' => $request->id_sap_envase,
                'img_si_envase' => $nombre,
                'desc_si_envase' => $request->desc_si_envase,
                'img_no_envase' => $no_envase,
                'desc_no_envase' => $request->desc_no_envase,
                'id_sap_pegotin' => $request->id_sap_pegotin,
                'img_si_pegotin' => $si_pegotin,
                'desc_si_pegotin' => $request->desc_si_pegotin,
                'img_no_pegotin' => $no_pegotin,
                'desc_no_pegotin' => $request->desc_no_pegotin,
                'id_sap_display' => $request->id_sap_display,
                'img_si_display' => $si_display,
                'desc_si_display' => $request->desc_si_display,
                'img_no_display' => $no_display,
                'desc_no_display' => $request->desc_no_display,
                'criterio_id' => $ids_criterio,
            ]);

            $imagen34 = $request->file("img_si_etiqueta");                        
            $nombreimagen34 = $imagen34->getClientOriginalName();
            $nombre34 = strtolower(str_replace(" ", "_", $nombreimagen34));
            $ruta34 = public_path("img/criterio/");            
            copy($imagen34->getRealPath(),$ruta34.$nombre34);
            $si_etique=$nombre34;

            $imagen35 = $request->file("img_no_etiqueta");                        
            $nombreimagen35 = $imagen35->getClientOriginalName();
            $nombre35 = strtolower(str_replace(" ", "_", $nombreimagen35));
            $ruta35 = public_path("img/criterio/");            
            copy($imagen35->getRealPath(),$ruta35.$nombre35);
            $no_etique=$nombre35;

            $imagen36 = $request->file("img_si_etiqueta_1");                        
            $nombreimagen36 = $imagen36->getClientOriginalName();
            $nombre36 = strtolower(str_replace(" ", "_", $nombreimagen36));
            $ruta36 = public_path("img/criterio/");            
            copy($imagen36->getRealPath(),$ruta36.$nombre36);
            $si_eti_1=$nombre36;

            $imagen37 = $request->file("img_no_etiqueta_1");                        
            $nombreimagen37 = $imagen37->getClientOriginalName();
            $nombre37 = strtolower(str_replace(" ", "_", $nombreimagen37));
            $ruta37 = public_path("img/criterio/");            
            copy($imagen37->getRealPath(),$ruta37.$nombre37);
            $no_eti_1=$nombre37;

            $imagen38 = $request->file("img_si_gotero");                        
            $nombreimagen38 = $imagen38->getClientOriginalName();
            $nombre38 = strtolower(str_replace(" ", "_", $nombreimagen38));
            $ruta38 = public_path("img/criterio/");            
            copy($imagen38->getRealPath(),$ruta38.$nombre38);
            $si_gotero=$nombre38;

            $imagen39 = $request->file("img_no_gotero");                        
            $nombreimagen39 = $imagen39->getClientOriginalName();
            $nombre39 = strtolower(str_replace(" ", "_", $nombreimagen39));
            $ruta39 = public_path("img/criterio/");            
            copy($imagen39->getRealPath(),$ruta39.$nombre39);
            $no_gotero=$nombre39;

            $imagen40 = $request->file("img_si_dedal");                        
            $nombreimagen40 = $imagen40->getClientOriginalName();
            $nombre40 = strtolower(str_replace(" ", "_", $nombreimagen40));
            $ruta40 = public_path("img/criterio/");            
            copy($imagen40->getRealPath(),$ruta40.$nombre40);
            $si_dedal=$nombre40;

            $imagen41 = $request->file("img_no_dedal");                        
            $nombreimagen41 = $imagen41->getClientOriginalName();
            $nombre41 = strtolower(str_replace(" ", "_", $nombreimagen41));
            $ruta41 = public_path("img/criterio/");            
            copy($imagen41->getRealPath(),$ruta41.$nombre41);
            $no_dedal=$nombre41;

            $liquidos = Liquido::create([
                'sap_id_etiqueta' => $request->sap_id_etiqueta,
               'img_si_etiqueta' => $si_etique,
                'desc_si_etiqueta' => $request->desc_si_etiqueta,
                'img_no_etiqueta' => $no_etique,
                'desc_no_etiqueta' => $request->desc_no_etiqueta,
                'img_si_etiqueta_1' => $si_eti_1,
                'desc_si_etiqueta_1' => $request->desc_si_etiqueta_1,
                'img_no_etiqueta_1' => $no_eti_1,
                'desc_no_etiqueta_1' => $request->desc_no_etiqueta_1,
                'sap_id_gotero' => $request->sap_id_gotero,
                'img_si_gotero' => $si_gotero,
                'desc_si_gotero' => $request->desc_si_gotero,
                'img_no_gotero' => $no_gotero,
                'desc_no_gotero' => $request->desc_no_gotero,
                'img_si_dedal' =>$si_dedal,
                'desc_si_dedal' => $request->desc_si_dedal,
                'img_no_dedal' => $no_dedal,
                'desc_no_dedal' => $request->desc_no_dedal,
                'criterio_id' => $ids_criterio,
            ]);

            $imagen26 = $request->file("img_si_termo");                        
            $nombreimagen26 = $imagen26->getClientOriginalName();
            $nombre26 = strtolower(str_replace(" ", "_", $nombreimagen26));
            $ruta26 = public_path("img/criterio/");            
            copy($imagen26->getRealPath(),$ruta26.$nombre26);
            $si_termo=$nombre26;

            $imagen27 = $request->file("img_no_termo");                        
            $nombreimagen27 = $imagen27->getClientOriginalName();
            $nombre27 = strtolower(str_replace(" ", "_", $nombreimagen27));
            $ruta27 = public_path("img/criterio/");            
            copy($imagen27->getRealPath(),$ruta27.$nombre27);
            $no_termo=$nombre27;

            $empaque = Polvoadicional::create([
                'sap_id_termo' => $request->sap_id_termo,
                'img_si_termo' => $si_termo,
                'desc_si_termo' => $request->desc_si_termo,
                'img_no_termo' => $no_termo,
                'desc_no_termo' => $request->desc_no_termo,
                'criterio_id' => $ids_criterio,
            ]);

            $imagen10 = $request->file("img_si_mezcla");                        
            $nombreimagen10 = $imagen10->getClientOriginalName();
            $nombre10 = strtolower(str_replace(" ", "_", $nombreimagen10));
            $ruta10 = public_path("img/criterio/");            
            copy($imagen10->getRealPath(),$ruta10.$nombre10);
            $si_mezcla=$nombre10;

            $imagen11 = $request->file("img_no_mezcla");                        
            $nombreimagen11 = $imagen11->getClientOriginalName();
            $nombre11 = strtolower(str_replace(" ", "_", $nombreimagen11));
            $ruta11 = public_path("img/criterio/");            
            copy($imagen11->getRealPath(),$ruta11.$nombre11);
            $no_mezcla=$nombre11;

            
        $mezcla = Granel::create([
            'img_si_mezcla' => $si_mezcla,
            'desc_si_mezcla' => $request->desc_si_mezcla,
            'img_no_mezcla' => $no_mezcla,
            'desc_no_mezcla' => $request->desc_no_mezcla,
            'criterio_id' => $ids_criterio,
        ]);

        $imagen16 = $request->file("img_si_codi");                        
        $nombreimagen16 = $imagen16->getClientOriginalName();
        $nombre16 = strtolower(str_replace(" ", "_", $nombreimagen16));
        $ruta16 = public_path("img/criterio/");            
        copy($imagen16->getRealPath(),$ruta16.$nombre16);
        $si_codi=$nombre16;

        $imagen17 = $request->file("img_no_codi");                        
        $nombreimagen17 = $imagen17->getClientOriginalName();
        $nombre17 = strtolower(str_replace(" ", "_", $nombreimagen17));
        $ruta17 = public_path("img/criterio/");            
        copy($imagen17->getRealPath(),$ruta17.$nombre17);
        $no_codi=$nombre17;

        $imagen18 = $request->file("img_si_display_c");                        
        $nombreimagen18 = $imagen18->getClientOriginalName();
        $nombre18 = strtolower(str_replace(" ", "_", $nombreimagen18));
        $ruta18 = public_path("img/criterio/");            
        copy($imagen18->getRealPath(),$ruta18.$nombre18);
        $si_display_c=$nombre18;

        $imagen19 = $request->file("img_no_display_c");                        
        $nombreimagen19 = $imagen19->getClientOriginalName();
        $nombre19 = strtolower(str_replace(" ", "_", $nombreimagen19));
        $ruta19 = public_path("img/criterio/");            
        copy($imagen19->getRealPath(),$ruta19.$nombre19);
        $no_display_c=$nombre19; 

        $codificado = Codificado::create([
            'img_si_codi' => $si_codi,
            'desc_si_codi' => $request->desc_si_codi,
            'img_no_codi' => $no_codi,
            'desc_no_codi' => $request->desc_no_codi,
            'img_si_display_c' => $si_display_c,
            'desc_si_display_c' => $request->desc_si_display_c,
            'img_no_display_c' => $no_display_c,
            'desc_no_display_c' => $request->desc_no_display_c,
            'lote_envase_c' => $request->lote_envase_c,
            'cad_envase_c' => $request->cad_envase_c,
            'lote_display_c'=> $request->lote_display_c,
            'cad_display_c'=> $request->cad_display_c,
            'criterio_id' => $ids_criterio,
        ]);

        $imagen20 = $request->file("img_si_corrugado");                        
        $nombreimagen20 = $imagen20->getClientOriginalName();
        $nombre20 = strtolower(str_replace(" ", "_", $nombreimagen20));
        $ruta20 = public_path("img/criterio/");            
        copy($imagen20->getRealPath(),$ruta20.$nombre20);
        $si_corrugado=$nombre20;

        $imagen21 = $request->file("img_no_corrugado");                        
        $nombreimagen21 = $imagen21->getClientOriginalName();
        $nombre21 = strtolower(str_replace(" ", "_", $nombreimagen21));
        $ruta21 = public_path("img/criterio/");            
        copy($imagen21->getRealPath(),$ruta21.$nombre21);
        $no_corrugado=$nombre21;

    
        $corrugado = Corrugado::create([
            'sap_id_corrugado' => $request->sap_id_corrugado,
            'img_si_corrugado' => $si_corrugado,
            'desc_si_corrugado' => $request->desc_si_corrugado,
            'img_no_corrugado' => $no_corrugado,
            'desc_no_corrugado' => $request->desc_no_corrugado,
            'sap_id_separador' => $request->sap_id_separador,
            'criterio_id' => $ids_criterio,
        ]);
          
        return view('criterio.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Liquido  $liquido
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iden= $id;
        $empaque=Empaque::where('criterio_id',$iden )->get();
        $criterio=Criterio::where('id',$iden )->get();
        $mezcla=Granel::where('criterio_id',$iden )->get();
        $codificado=Codificado::where('criterio_id',$iden )->get();
        $corrugado=Corrugado::where('criterio_id',$iden )->get();
        $liquidos=Liquido::where('criterio_id',$iden )->get();
        $polvos=Polvoadicional::where('criterio_id',$iden )->get();
        $pdf= Pdf::loadView('criterio.liquidopdf', compact('liquidos','polvos','empaque','criterio','mezcla','codificado','corrugado'))
        ->setPaper('a4', 'portrait');
        return $pdf->stream('liquidopdf.PDF');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Liquido  $liquido
     * @return \Illuminate\Http\Response
     */
    public function edit(Liquido $liquido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Liquido  $liquido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Liquido $liquido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Liquido  $liquido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liquido $liquido)
    {
        //
    }
}
