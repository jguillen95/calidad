<?php

namespace App\Http\Controllers;

use App\Models\Cambio;
use Illuminate\Http\Request;

class CambioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_solibd=auth()->user()->id;
        $user_soli=auth()->user()->usertype_id;
        if ($user_soli==1) {
            $data=Cambio::select('cambios.id','cambios.formato','cambios.id_cambio','cambios.valor_cambio',
            'cambios.valor_nuevo','cambios.fecha_soli','cambios.fecha_mod','cambios.user_soli','users.name','cambios.user_mod',
            'cambios.motivo','cambios.estatus')
            ->join('users', 'users.id', '=', 'cambios.user_soli')
            ->get();
        } else {
            $data=Cambio::select('cambios.id','cambios.formato','cambios.id_cambio','cambios.valor_cambio',
            'cambios.valor_nuevo','cambios.fecha_soli','cambios.fecha_mod','cambios.user_soli','users.name as name','cambios.user_mod',
            'cambios.motivo','cambios.estatus')
            ->join('users', 'users.id', '=', 'cambios.user_soli')
            ->Where('user_soli',$user_solibd)
            ->get();
        }
        
        return view('cambio.index',compact('data','user_soli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cambio.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fecha_soli=date("d-m-Y");
        $user_soli=auth()->user()->id;

        $cambio=new Cambio();
        $cambio->formato=$request->input('formato');
        $cambio->valor_cambio=$request->input('valor_cambio');
        $cambio->valor_nuevo=$request->input('valor_nuevo');
        $cambio->fecha_soli=$fecha_soli;
        $cambio->user_soli=$user_soli;
        $cambio->motivo=$request->input('motivo');
        $cambio->estatus='SOLICITADO';
        $cambio->id_cambio=$request->input('id_cambio');
       $cambio->save();
       return redirect('cambio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cambio  $cambio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cambio  $cambio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Cambio::find($id);
        return view('cambio.edit',compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cambio  $cambio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fecha_mod=date("d-m-Y");
        $user_mod=auth()->user()->name;
        $record=Cambio::where('id',$id)
            ->update([
                'estatus' => $request->estatus,
                'user_mod' => $user_mod,
                'fecha_mod' => $fecha_mod,
            ]);
        return redirect('cambio');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cambio  $cambio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cambio $cambio)
    {
        //
    }
}
