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

class PolvoadicionalController extends Controller
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
        return view('criterio.tableta');
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

            $imagen2 = $request->file("img_si_tapa");                        
            $nombreimagen2 = $imagen2->getClientOriginalName();
            $nombre2 = strtolower(str_replace(" ", "_", $nombreimagen2));
            $ruta2 = public_path("img/criterio/");            
            copy($imagen2->getRealPath(),$ruta2.$nombre2);
            $si_tapa=$nombre2;

            $imagen3 = $request->file("img_no_tapa");                        
            $nombreimagen3 = $imagen3->getClientOriginalName();
            $nombre3 = strtolower(str_replace(" ", "_", $nombreimagen3));
            $ruta3 = public_path("img/criterio/");            
            copy($imagen3->getRealPath(),$ruta3.$nombre3);
            $no_tapa=$nombre3;

            $imagen4 = $request->file("img_si_sello");                        
            $nombreimagen4 = $imagen4->getClientOriginalName();
            $nombre4 = strtolower(str_replace(" ", "_", $nombreimagen4));
            $ruta4 = public_path("img/criterio/");            
            copy($imagen4->getRealPath(),$ruta4.$nombre4);
            $si_sello=$nombre4;

            $imagen5 = $request->file("img_no_sello");                        
            $nombreimagen5 = $imagen5->getClientOriginalName();
            $nombre5 = strtolower(str_replace(" ", "_", $nombreimagen5));
            $ruta5 = public_path("img/criterio/");            
            copy($imagen5->getRealPath(),$ruta5.$nombre5);
            $no_sello=$nombre5;

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
            'img_si_tapa' => $si_tapa,
            'desc_si_tapa' => $request->desc_si_tapa,
            'img_no_tapa' => $no_tapa,
            'desc_no_tapa' => $request->desc_no_tapa,
            'id_sap_sello' => $request->id_sap_sello,
            'img_si_sello' => $si_sello,
            'desc_si_sello' => $request->desc_si_sello,
            'img_no_sello' => $no_sello,
            'desc_no_sello' => $request->desc_no_sello,
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

            //PolvosAdicionals
            $imagen24 = $request->file("img_si_desecante");                        
            $nombreimagen24 = $imagen24->getClientOriginalName();
            $nombre24 = strtolower(str_replace(" ", "_", $nombreimagen24));
            $ruta24 = public_path("img/criterio/");            
            copy($imagen24->getRealPath(),$ruta24.$nombre24);
            $si_desecante=$nombre24;

            $imagen25 = $request->file("img_no_desecante");                        
            $nombreimagen25 = $imagen25->getClientOriginalName();
            $nombre25 = strtolower(str_replace(" ", "_", $nombreimagen25));
            $ruta25 = public_path("img/criterio/");            
            copy($imagen25->getRealPath(),$ruta25.$nombre25);
            $no_desecante=$nombre25;

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
                'sap_id_desecante' => $request->sap_id_desecante,
               'img_si_desecante' => $si_desecante,
                'desc_si_desecante' => $request->desc_si_desecante,
                'img_no_desecante' => $no_desecante,
                'desc_no_desecante' => $request->desc_no_desecante,
                'sap_id_termo' => $request->sap_id_termo,
                'img_si_termo' => $si_termo,
                'desc_si_termo' => $request->desc_si_termo,
                'img_no_termo' => $no_termo,
                'desc_no_termo' => $request->desc_no_termo,
                'criterio_id' => $ids_criterio,
            ]);

            // Me quede aquí
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
            'densidad' => $request->densidad,
            'ph' => $request->ph,
            'viscosidad' => $request->viscosidad,
            'criterio_id' => $ids_criterio,
        ]);

            $imagen12 = $request->file("img_si_sellado");                        
            $nombreimagen12 = $imagen12->getClientOriginalName();
            $nombre12 = strtolower(str_replace(" ", "_", $nombreimagen12));
            $ruta12 = public_path("img/criterio/");            
            copy($imagen12->getRealPath(),$ruta12.$nombre12);
            $si_sellado=$nombre12;

            $imagen13 = $request->file("img_no_sellado");                        
            $nombreimagen13 = $imagen13->getClientOriginalName();
            $nombre13 = strtolower(str_replace(" ", "_", $nombreimagen13));
            $ruta13 = public_path("img/criterio/");            
            copy($imagen13->getRealPath(),$ruta13.$nombre13);
            $no_sellado=$nombre13;
        
        $sellado = Sellado::create([
            'img_si_sellado' => $si_sellado,
            'desc_si_sellado' => $request->desc_si_sellado,
            'img_no_sellado' => $no_sellado,
            'desc_no_sellado' => $request->desc_no_sellado,
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
            'criterio_id' => $ids_criterio,
        ]);
        
        return view('criterio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Polvoadicional  $polvoadicional
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
        $pdf= Pdf::loadView('polvo.pdf', compact('polvos','empaque','criterio','mezcla','sellado','codificado','corrugado'))
        ->setPaper('a4', 'portrait');
        return $pdf->stream('polvo.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Polvoadicional  $polvoadicional
     * @return \Illuminate\Http\Response
     */
    public function edit(Polvoadicional $polvoadicional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Polvoadicional  $polvoadicional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Polvoadicional $polvoadicional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Polvoadicional  $polvoadicional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Polvoadicional $polvoadicional)
    {
        //
    }
}
