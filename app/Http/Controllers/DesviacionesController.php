<?php

namespace App\Http\Controllers;

use App\Models\Desviaciones;
use App\Models\Corecciones;
use Illuminate\Http\Request;
use App\Models\ModDocumentos;
use App\Models\Responsable;
use App\Models\Seguimiento;
use App\Models\Responsables;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Str;

class DesviacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $desviaciones=Desviaciones::all();
        return view('desviacion.index', compact('desviaciones'));
    }
    public function buscar(Request $request)
    {
        $input = $request->all();

        if($request->get('buscar')){
            $noticias = Desviaciones::where("idComp", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("prodcuto_des", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("lote_des", "LIKE", "%{$request->get('buscar')}%")
                ->paginate(10);
        return view('desviacion.index')->with('buscar', $noticias);
        }else{
        $noticias = Desviaciones::paginate(5);
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
        $encargado=auth()->user()->puesto;
        $responsablesC=Responsable::All()
                    ->where('dpto_resp','CAC');
        $responsablesP=Responsable::All()->where('dpto_resp','Producción');
        return view('desviacion.create', compact('encargado','responsablesC','responsablesP'));
    }

    public function correcciones($id)
    { 
        $ids=$id;
        return view('desviacion.correccion',compact('ids'));
    }

    public function storeCorrecciones(Request $request)
    {
        $ids_desviacion=$request->des_id;
        $aplica=$request->na;
        $correccion='No aplica';
        if($aplica==1){
            $correcciones = Corecciones::create([
                'actividad' => $correccion,
                'responsable' => $correccion,
                'firma_corre' => $correccion,
                'tipo' => $correccion,
                'desviacionCorrecion_id' => $ids_desviacion,
            ]);
        }else{
         $countIds= count($request->actividad);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new Corecciones();
            $array->actividad = $request->actividad[$i];
            $array->responsable = $request->responsable[$i];
            $array->fecha_corre = $request->fecha_corre[$i];
            $array->firma_corre = $request->firma_corre[$i];
            $array->tipo = $request->tipo[$i];
            $array->desviacionCorrecion_id = $ids_desviacion;
            $array->save();
        }
    }

    $status=Desviaciones::where('id',$ids_desviacion)
    ->increment('sem') ;

        return view('desviacion.index');
    
    }

    public function documentos($id)
    {
        $ids=$id;
        return view('desviacion.documentos',compact('ids'));
    }

    public function documentosStore(Request $request)
    {
        $ids_desviacion=$request->des_id;
        $countIds= count($request->codigo);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new ModDocumentos();
            $array->codigo = $request->codigo[$i];
            $array->titulo = $request->titulo[$i];
            $array->responsable = $request->responsable[$i];
            $array->fecha = $request->fecha[$i];
            $array->firma_mod = $request->firma_mod[$i];
            $array->desviacionDoc_id = $ids_desviacion;
            $array->save();
        }

    $status=Desviaciones::where('id',$ids_desviacion)
    ->increment('sem') ;

        return view('desviacion.index');
    
    }

    public function seg($id)
    {
        $ids=$id;
        return view('desviacion.seguimientos',compact('ids'));
    }

    public function segStore(Request $request)
    {
        $ids_desviacion=$request->des_id;
        $countIds= count($request->descripcion_seg);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new Seguimiento();
            $array->descripcion_seg = $request->descripcion_seg[$i];
            $array->realizo_seg = $request->realizo_seg[$i];
            $array->fecha_seg = $request->fecha_seg[$i];
            $array->desviacion_id = $ids_desviacion;
            $array->save();
        }

            $status=Desviaciones::where('id',$ids_desviacion)
            ->increment('sem') ;

        return view('desviacion.index');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $firma=auth()->user()->firma;
       $puesto=auth()->user()->puesto;
       $sem=1;
       $nombre=auth()->user()->name;
       $ejercicio=date("Y");
       $consulta=Desviaciones::latest('idComp')->first()->idComp;
       $ultimos=Str::substr($consulta,5);
       $auto=$ultimos + 1;
       $dato=Str::substr($consulta, 0,4);
       
       if($dato==$ejercicio){
            $idComp=$ejercicio."-".$auto;
       }else{
            $idComp=$ejercicio."-"."1";
            }
       $compuesto=$nombre.', '.$puesto;
       $desviaciones=new Desviaciones;
       $desviaciones->area_des=$request->input('area');
       $desviaciones->prodcuto_des=$request->input('producto');
       $desviaciones->presentacion_des=$request->input('presentacion');
       $desviaciones->lote_des=$request->input('lote');
       $desviaciones->cantidad_des=$request->input('cantidad');
       $desviaciones->descripcion_des=$request->input('descripcion');
       $desviaciones->desviacion_des=$request->input('desviacion');
       $desviaciones->investigacion_des=$request->input('investigacion');
    //    $desviaciones->anexos_des=$request->input('anexos');
       $desviaciones->vobo_des=$compuesto;
    //    $desviaciones->dptoCierre_des=$request->input('departamento');
    //    $desviaciones->firma=$firma;
    //    $desviaciones->responsableC=$request->input('responsableC');
    //    $desviaciones->responsableP=$request->input('responsableP');
    //    $desviaciones->fechaCierre_des=$request->input('fecha_cierre');
    //    $desviaciones->Estatus=$request->input('estatus');
    //    $desviaciones->firma_cierre=$request->input('firma_cierre');
       $desviaciones->idComp=$idComp;
       if($request->hasFile("anexos")){

        $imagen = $request->file("anexos");                        
        $nombreimagen = $imagen->getClientOriginalName();
        $ruta = public_path("img/post/");            
        copy($imagen->getRealPath(),$ruta.$nombreimagen);
        $desviaciones->anexos_des = $nombreimagen;
        
                                    }
       $desviaciones->sem=$sem;
       $desviaciones->save();
       return redirect('desviacion/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desviaciones  $desviaciones
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
            $iden= $id;
            $almacena = Desviaciones::select('desviaciones.id','desviaciones.area_des',
                        'desviaciones.prodcuto_des','desviaciones.presentacion_des',
                        'desviaciones.lote_des','desviaciones.cantidad_des',
                        'desviaciones.descripcion_des','desviaciones.desviacion_des',
                        'desviaciones.investigacion_des','desviaciones.anexos_des',
                        'desviaciones.vobo_des', 'desviaciones.dptoCierre_des',
                        'desviaciones.firma','desviaciones.fechaCierre_des','desviaciones.Estatus',
                        'desviaciones.responsableC', 'desviaciones.responsableP','desviaciones.firma_cierre', 'desviaciones.idComp')
                 ->where('desviaciones.id', $iden)
                 ->get();
                 
            $almacenados=Corecciones::select('corecciones.id','corecciones.actividad','corecciones.responsable','corecciones.fecha_corre','corecciones.firma_corre')
            ->where('desviacionCorrecion_id',$iden)
            ->where('tipo','Corrección')
            ->get();
            $almacenadosC=Corecciones::select('corecciones.id','corecciones.actividad','corecciones.responsable','corecciones.fecha_corre','corecciones.firma_corre')
            ->where('desviacionCorrecion_id',$iden)
            ->where('tipo','Acción')
            ->get();

            $almacenDocs=ModDocumentos::select('mod_documentos.id','mod_documentos.codigo','mod_documentos.titulo','mod_documentos.responsable', 'mod_documentos.fecha', 'mod_documentos.firma_mod')
            ->where('desviacionDoc_id', $iden)
            ->get();
            $almacenSeguimientos=Seguimiento::select('seguimientos.id','seguimientos.descripcion_seg', 'seguimientos.realizo_seg', 'seguimientos.fecha_seg')
            ->where('desviacion_id', $iden)
            ->get();
                $pdf= Pdf::loadView('desviacion.pdf', compact('almacena', 'almacenados','almacenDocs', 'almacenSeguimientos', 'iden', 'almacenadosC'));
                return $pdf->stream('Desviacion.pdf');
          
                // return view('desviacion.pdf', compact('almacena'));
    }

    public function vobo($id)
    {
        $consulta = Desviaciones::find($id);
        $encargado=auth()->user()->puesto;
        $responsablesC=Responsable::All()
                    ->where('dpto_resp','CAC');
        $responsablesP=Responsable::All()->where('dpto_resp','Producción');
        return view('desviacion.vobo', compact('consulta','encargado','responsablesC','responsablesP'));
    }

    public function voboUpdate(Request $request, $id)
    {
        $record=Desviaciones::where('id',$id)
            ->update([
                'responsableC' => $request->responsableC,
                'responsableP' => $request->responsableP,
                'sem'=>4,
            ]);

            return view('desviacion.index');
    }

    public function cierre($id)
    {
        $consulta = Desviaciones::find($id);
        return view('desviacion.cierre', compact('consulta'));
    }

    public function cierreUpdate(Request $request, $id)
    {
        $record=Desviaciones::where('id',$id)
            ->update([
                'dptoCierre_des' => $request->departamento,
                'firma_cierre' => $request->firma_cierre,
                'estatus' => $request->estatus,
                'fechaCierre_des' => $request->fecha_cierre,
                'sem'=>6,
            ]);

            return view('desviacion.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desviaciones  $desviaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desviaciones=Desviaciones::find($id);
        $correcciones=Corecciones::where('desviacionCorrecion_id',$id)
        ->get();
        $documentos=ModDocumentos::where('desviacionDoc_id',$id)
        ->get();
        $seguimientos=Seguimiento::where('desviacion_id',$id)
        ->get();
        return view('desviacion.update',compact('desviaciones','correcciones','documentos','seguimientos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Desviaciones  $desviaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record=Desviaciones::where('id',$id)
        ->update([
            'area_des' => $request->area,
            'prodcuto_des' => $request->producto,
            'presentacion_des' => $request->presentacion,
            'lote_des'=>$request->lote,
            'cantidad_des'=>$request->cantidad,
            'descripcion_des'=>$request->descripcion,
            'desviacion_des'=>$request->desviacion,
            'investigacion_des'=>$request->investigacion,
            'vobo_des'=>$request->vobo,
            'dptoCierre_des'=>$request->dptoCierre_des,
            'firma'=>$request->firma_des,
            'fechaCierre_des'=>$request->fecha_cierre,
            'Estatus'=>$request->estatus,
            'responsableC'=>$request->responsableC,
            'responsableP'=>$request->responsableP,
            'firma_cierre'=>$request->firma_cierre,
        ]);

    $consulta2= count((array)$request->id_correcciones);
    // No tocar esta puta parte plis
    for ($i=0; $i<$consulta2; $i++) {

    $data=Corecciones::where('id',$request->id_correcciones[$i])
                ->update([
                'actividad' => $request->actividad[$i],
                'responsable' => $request->responsable[$i],
                'fecha_corre' => $request->fecha_corre[$i],
                'firma_corre' => $request->firma_corre[$i],
                ]);

         }

        $consulta3= count((array)$request->id_documentos);
    // No tocar esta puta parte plis
            for ($i=0; $i<$consulta3; $i++) {
    
                
        
            
            $data=ModDocumentos::where('id',$request->id_documentos[$i])
                        ->update([
                        'codigo' => $request->codigo_mod[$i],
                        'titulo' => $request->titulo_mod[$i],
                        'responsable' => $request->responsable_mod[$i],
                        'fecha' => $request->fecha_mod[$i],
                        'firma_mod' => $request->firma_mod[$i],
                        
                    ]);
            } 

            $consulta4= count((array)$request->id_seguimientos);
    // No tocar esta puta parte plis
            for ($i=0; $i<$consulta4; $i++) {
            
            $data=Seguimiento::where('id',$request->id_seguimientos[$i])
                        ->update([
                        'descripcion_seg' => $request->descripcion_seg[$i],
                        'realizo_seg' => $request->realizo_seg[$i],
                        'fecha_seg' => $request->fecha_seg[$i],
                        
                    ]);
            }


    return view('desviacion.index');
    }

    public function guardar(Request $request){
        $post = new Desviaciones();

        // Tratamiento de la imagen
        if($request->hasFile("imagen")){

            $imagen = $request->file("anexos");                        
            $nombreimagen = $imagen->getClientOriginalName();
            $ruta = public_path("img/post/");            
            copy($imagen->getRealPath(),$ruta.$nombreimagen);
            $post->imagen = $nombreimagen;
            
        }

        $post->save();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desviaciones  $desviaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desviaciones $desviaciones)
    {
        //
    }
  
}
