<?php

namespace App\Http\Controllers;

use App\Models\Codificado;
use App\Models\Criterio;
use App\Models\Empaque;
use App\Models\Granel;
use App\Models\Polvo;
use App\Models\Sellado;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PolvoController extends Controller
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
        return view('criterio.polvo');
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

        $empaque = Empaque::create([
            'id_sap_envase' => $request->id_sap_envase,
            'img_si_envase' => $nombre,
            'desc_si_envase' => $request->desc_si_envase,
            'img_no_envase' => $no_envase,
            'desc_no_envase' => $request->desc_no_envase,
            'id_sap_tapa' => $request->id_sap_tapa,
            'img_si_tapa' => $si_tapa,
            'desc_si_tapa' => $request->desc_si_tapa,
            'img_no_tapa' => $no_tapa,
            'desc_no_tapa' => $request->desc_no_tapa,
            'id_sap_sello' => $request->id_sap_sello,
            'img_si_sello' => $si_sello,
            'desc_si_sello' => $request->desc_si_sello,
            'img_no_sello' => $no_sello,
            'desc_no_sello' => $request->desc_no_sello,
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

            $codificado = Codificado::create([
                'img_si_codi' => $si_codi,
                'desc_si_codi' => $request->desc_si_codi,
                'img_no_codi' => $no_codi,
                'desc_no_codi' => $request->desc_no_codi,
                'lote_envase_c' => $request->lote_envase_c,
                'cad_envase_c' => $request->cad_envase_c,
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

            $imagen35 = $request->file("img_si_acondicion");                        
            $nombreimagen35 = $imagen35->getClientOriginalName();
            $nombre35 = strtolower(str_replace(" ", "_", $nombreimagen35));
            $ruta35= public_path("img/criterio/");            
            copy($imagen35->getRealPath(),$ruta35.$nombre35);
            $si_acondicion=$nombre35;

            $imagen36 = $request->file("img_no_acondicion");                        
            $nombreimagen36 = $imagen36->getClientOriginalName();
            $nombre36 = strtolower(str_replace(" ", "_", $nombreimagen36));
            $ruta36= public_path("img/criterio/");            
            copy($imagen36->getRealPath(),$ruta36.$nombre36);
            $no_acondicion=$nombre36;

            $sellado = Sellado::create([
                'img_si_sellado' => $si_sellado,
                'desc_si_sellado' => $request->desc_si_sellado,
                'img_no_sellado' => $no_sellado,
                'desc_no_sellado' => $request->desc_no_sellado,
                'sap_id_acondicion' => $request->sap_id_acondicion,
                'img_si_acondicion' => $si_acondicion,
                'img_no_acondicion' => $no_acondicion,
                'desc_si_acondicion' => $request->desc_si_acondicion,
                'desc_no_acondicion' => $request->desc_no_acondicion,
                'criterio_id' => $ids_criterio,
            ]);

            return view('criterio.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Polvo  $polvo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iden= $id;
        $empaque=Empaque::where('criterio_id',$iden )->get();
        $criterio=Criterio::where('id',$iden )->get();
        $sellado=Sellado::where('criterio_id',$iden )->get();
        $mezcla=Granel::where('criterio_id',$iden )->get();
        $codificado=Codificado::where('criterio_id',$iden )->get();
        $pdf= Pdf::loadView('criterio.polvopdf', compact('sellado','empaque','criterio','mezcla','codificado'))
        ->setPaper('a4', 'portrait');
        return $pdf->stream('polvos.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Polvo  $polvo
     * @return \Illuminate\Http\Response
     */
    public function edit(Polvo $polvo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Polvo  $polvo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Polvo $polvo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Polvo  $polvo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Polvo $polvo)
    {
        //
    }
}
