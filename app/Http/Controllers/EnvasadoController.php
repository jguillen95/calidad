<?php

namespace App\Http\Controllers;

use App\Models\Envasado;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class EnvasadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $envasado=Envasado::all();
        return view('envasado.index', compact('envasado'));
    }

    public function buscar(Request $request)
    {
        $input = $request->all();

        if($request->get('buscar')){
            $noticias = Envasado::where("id", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("producto", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("lote", "LIKE", "%{$request->get('buscar')}%")
                ->paginate(10);
        return view('envasado.index')->with('buscar', $noticias);
        }else{
        $noticias = Envasado::paginate(5);
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
        return view('envasado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $envasado=new Envasado;
        $envasado->fecha=$request->input('fecha');
        $envasado->linea=$request->input('linea');
        $envasado->lote=$request->input('lote');
        $envasado->orden=$request->input('orden');
        $envasado->producto=$request->input('producto');
        $envasado->presentacion=$request->input('presentacion');
        $envasado->verifico=$request->input('verifico');
        $envasado->q1=$request->input('q1');
        $envasado->q2=$request->input('q2');
        $envasado->q3=$request->input('q3');
        $envasado->q4=$request->input('q4');
        $envasado->q5=$request->input('q5');
        $envasado->q6=$request->input('q6');
        $envasado->q7=$request->input('q7');
        $envasado->q8=$request->input('q8');
        $envasado->q9=$request->input('q9');
        $envasado->q10=$request->input('q10');
        $envasado->nota=$request->input('nota');
       $envasado->save();
       return redirect('envasado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Envasado  $envasado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iden= $id;
             $envasado=Envasado::where('id', $iden)
            ->get();
                $pdf= Pdf::loadView('envasado.pdf', compact('envasado'));
                // ->setPaper('a4', 'landscape')
                return $pdf->stream('envasado.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Envasado  $envasado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Envasado::find($id);
        return view('envasado.edit', compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Envasado  $envasado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record=Envasado::where('id',$id)
            ->update([
                'fecha' => $request->fecha,
                'linea' => $request->linea,
                'lote' => $request->lote,
                'orden'=>$request->orden,
                'producto'=>$request->producto,
                'presentacion'=>$request->presentacion,
                'verifico'=>$request->verifico,
                'q1'=>$request->q1,
                'q2'=>$request->q2,
                'q3'=>$request->q3,
                'q4'=>$request->q4,
                'q5'=>$request->q5,
                'q6'=>$request->q6,
                'q7'=>$request->q7,
                'q8'=>$request->q8,
                'q9'=>$request->q9,
                'q10'=>$request->q10,
                'nota'=>$request->nota,
                
            ]);

            return view('envasado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Envasado  $envasado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Envasado $envasado)
    {
        //
    }
}
