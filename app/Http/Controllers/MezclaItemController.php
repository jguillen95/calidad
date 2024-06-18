<?php

namespace App\Http\Controllers;

use App\Models\MezclaItem;
use App\Models\Mezcla;
use Illuminate\Http\Request;

class MezclaItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mezclaItem=MezclaItem::all();
        return view('mezclaItem.index', compact('mezclaItem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mezclaItem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
    //     $ultimoId = Mezcla::latest('id')->first()->id;
    //     $mezcla=new MezclaItem;
    //     $mezcla->fecha=$request->input('fecha');
    //     $mezcla->i_mezcla=$request->input('i_mezcla');
    //     $mezcla->f_mezcla=$request->input('f_mezcla');
    //     $mezcla->tiempo=$request->input('tiempo');
    //     $mezcla->apariencia=$request->input('apariencia');
    //     $mezcla->color=$request->input('color');
    //     $mezcla->olor=$request->input('olor');
    //     $mezcla->cumple=$request->input('cumple');
    //     $mezcla->firma_realizo=$request->input('firma_realizo');
    //     $mezcla->firma_verifico=$request->input('firma_verifico');
    //     $mezcla->mezcla_id=$ultimoId;
    //     $mezcla->save();
    //    return redirect('mezclaItem/create');
        $ids_mezcla=Mezcla::latest('id')->first()->id;
        $countIds= count($request->i_mezcla);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new MezclaItem();
            $array->i_mezcla = $request->i_mezcla[$i];
            $array->f_mezcla = $request->f_mezcla[$i];
            $array->tiempo = $request->tiempo[$i];
            $array->apariencia = $request->apariencia[$i];
            $array->color = $request->color[$i];
            $array->olor = $request->olor[$i];
            $array->sabor = $request->sabor[$i];
            $array->granulometria = $request->granulometria[$i];
            $array->consistencia = $request->consistencia[$i];
            $array->solubilidad = $request->solubilidad[$i];
            $array->ph = $request->ph[$i];
            $array->peso_teorico = $request->peso_teorico[$i];
            $array->peso_real = $request->peso_real[$i];
            $array->cumple = $request->cumple[$i];
            $array->firma_realizo = $request->firma_realizo[$i];
            $array->firma_verifico = $request->firma_verifico[$i];
            $array->mezcla_id = $ids_mezcla;
            $array->save();
        }
        
        return view('mezcla.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MezclaItem  $mezclaItem
     * @return \Illuminate\Http\Response
     */
    public function show(MezclaItem $mezclaItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MezclaItem  $mezclaItem
     * @return \Illuminate\Http\Response
     */
    public function edit(MezclaItem $mezclaItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MezclaItem  $mezclaItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MezclaItem $mezclaItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MezclaItem  $mezclaItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(MezclaItem $mezclaItem)
    {
        //
    }
}
