<?php

namespace App\Http\Controllers;

use App\Models\seguridad;
use App\Models\Peligro;
use App\Models\Etiqueta;
use App\Models\Indicacion;
use App\Models\Efecto;
use App\Models\Ingrediente;
use App\Models\Auxilio;
use App\Models\Medida;
use App\Models\Derrame;
use App\Models\Almacen;
use App\Models\Proteccion;
use App\Models\Propiedad;
use App\Models\Reactividad;
use App\Models\Toxicologia;
use App\Models\Transporte;
use App\Models\Transito;
use App\Models\Adicional;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class SeguridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('seguridad.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seguridad.create');
    }

    public function buscar(Request $request)
    {
        $input = $request->all();

        if($request->get('buscar')){
            $noticias = seguridad::where("nombre", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("marca", "LIKE", "%{$request->get('buscar')}%")
                ->OrWhere("id_sap", "LIKE", "%{$request->get('buscar')}%")
                ->paginate(10);
        return view('seguridad.create')->with('buscar', $noticias);
        }else{
        $noticias = seguridad::paginate(5);
            }

        return response($noticias);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ult_id=Seguridad::latest('id')->first()->id;
        if($ult_id==null){
            $key_seguridad=1;
        }else{
            $key_seguridad=$ult_id+1;
        }
        

        $seguridad = seguridad::create([
            'nombre' => $request->nombre,
            'marca' => $request->marca,
            'id_sap' => $request->id_sap,
            'codigo_p' => $request->codigo_p,
            'proposito_p' => $request->proposito_p,
            'usos_p' => $request->usos_p,
            'nombre_distribuidor' => $request->nombre_distribuidor,
            'direccion_p' => $request->direccion_p,
        ]);
       $peligro = Peligro::create([
            'peligro' => $request->peligro,
            'salud' => $request->salud,
            'inflamabilidad' => $request->inflamabilidad,
            'reactividad' => $request->reactividad,
            'id_etiqueta' => $request->id_etiqueta,
            'seguridad_id' => $key_seguridad,
        ]);

            $imagen = $request->file("img_etiqueta");                        
            $nombreimagen = $imagen->getClientOriginalName();
            $ruta = public_path("img/seguridad/");            
            copy($imagen->getRealPath(),$ruta.$nombreimagen);

        
        $etiqueta = Etiqueta::create([
            'img_etiqueta' => $nombreimagen,
            'palabra' => $request->palabra,
            'indicacion' => $request->indicacion,
            'categoria_p' => $request->categoria_p,
            'seguridad_id' => $key_seguridad,
        ]);
   
        // $indicacion = Indicacion::create([
        //     'codigo_indicacion' => $request->codigo_indicacion,
        //     'indicacion_peligro' => $request->indicacion_peligro,
        //     'clase_p' => $request->clase_p,
        //     'categoria_ghs' => $request->categoria_ghs,
        //     'seguridad_id' => $key_seguridad,
        // ]);
        $efecto = Efecto::create([
            'inhalacion' => $request->pruebas,
            'ojos_p' => $request->ojos_p,
            'piel_p' => $request->piel_p,
            'incendio_p' => $request->incendio_p,
            'ingestion_p' => $request->ingestion_p,
            'seguridad_id' => $key_seguridad,
        ]);
        // $ingrediente = Ingrediente::create([
        //     'componente' => $request->componente,
        //     'sinonimo' => $request->sinonimo,
        //     'cas' => $request->cas,
        //     'formula' => $request->formula,
        //     'seguridad_id' => $key_seguridad,
        // ]);
        // $auxilio = Auxilio::create([
        //     'tipo' => $request->tipo,
        //     'sintoma' => $request->sintoma,
        //     'auxilio' => $request->auxilio,
        //     'seguridad_id' => $key_seguridad,
        // ]);
        $medida = Medida::create([
            'niebla' => $request->niebla,
            'espuma' => $request->espuma,
            'co2' => $request->co2,
            'polvo_quimico' => $request->polvo_quimico,
            'otros' => $request->otros,
            'quimicas_peligrosas' => $request->quimicas_peligrosas,
            'seguridad_id' => $key_seguridad,
        ]);
        $derrame = Derrame::create([
            'derrame_material' => $request->derrame_material,
            'equipo_proteccion' => $request->equipo_proteccion,
            'precausiones_ambiente' => $request->precausiones_ambiente,
            'material_limpieza' => $request->material_limpieza,
            'desechos' => $request->desechos,
            'seguridad_id' => $key_seguridad,
        ]);
        $almacen = Almacen::create([
            'precausiones_generales' => $request->precausiones_generales,
            'condicion_alm' => $request->condicion_alm,
            'incompatibilidad' => $request->incompatibilidad,
            'seguridad_id' => $key_seguridad,
        ]);
        $proteccion = Proteccion::create([
            'parametro_control' => $request->parametro_control,
            'control_tecnico' => $request->control_tecnico,
            'medidas' => $request->medidas,
            'prote_ojos' => $request->prote_ojos,
            'prote_piel' => $request->prote_piel,
            'prote_respiratoria' => $request->prote_respiratoria,
            'peligros_termicos' => $request->peligros_termicos,
            'seguridad_id' => $key_seguridad,
        ]);
        $propiedad = Propiedad::create([
            'apariencia' => $request->apariencia,
            'olor' => $request->olor,
            'ph' => $request->ph,
            'punto_fusion' => $request->punto_fusion,
            'temperatura' => $request->temperatura,
            'velocidad' => $request->velocidad,
            'inflamabilidad_info' => $request->inflamabilidad_info,
            'limite' => $request->limite,
            'presion_vapor' => $request->presion_vapor,
            'densidad_vapor' => $request->densidad_vapor,
            'densidad_relativa' => $request->densidad_relativa,
            'solubilidad' => $request->solubilidad,
            'coeficiente' => $request->coeficiente,
            'temperatura_esp' => $request->temperatura_esp,
            'temperatura_descom' => $request->temperatura_descom,
            'viscosidad' => $request->viscosidad,
            'peso_mol' => $request->peso_mol,
            'materia_volatil' => $request->materia_volatil,
            'datos_relevantes' => $request->datos_relevantes,
            'seguridad_id' => $key_seguridad,
        ]);
        $reactividad = Reactividad::create([
            'estabilidad_q' => $request->estabilidad_q,
            'condiciones_e' => $request->condiciones_e,
            'seguridad_id' => $key_seguridad,
        ]);
        $toxicologia = Toxicologia::create([
            'toxicidad' => $request->toxicidad,
            'vias_entrada' => $request->vias_entrada,
            'degradacion' => $request->degradacion,
            'metodos_eliminacion' => $request->metodos_eliminacion,
            'seguridad_id' => $key_seguridad,
        ]);
        
        $transporte = Transporte::create([
            'un' => $request->un,
            'desc_producto' => $request->desc_producto,
            'clase' => $request->clase,
            'grupo_embalaje' => $request->grupo_embalaje,
            'peligro_ambiente' => $request->peligro_ambiente,
            'seguridad_id' => $key_seguridad,
        ]);
        $transito = Transito::create([
            'regla_transito' => $request->regla_transito,
            'trans_internacional' => $request->trans_internacional,
            'seguridad_id' => $key_seguridad,
        ]);
        $adicional = Adicional::create([
            'abreviaturas' => $request->abreviaturas,
            'aviso_lector' => $request->aviso_lector,
            'seguridad_id' => $key_seguridad,
        ]);
        return view('seguridad.indicacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\seguridad  $seguridad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iden= $id;
        $seguridad=seguridad::where('id',$iden )->get();
        $peligro=Peligro::where('seguridad_id',$iden )->get();
        $etiqueta=Etiqueta::where('seguridad_id',$iden )->get();
        $indicaciones=Indicacion::where('seguridad_id',$iden )->get();
        $efectos=Efecto::where('seguridad_id',$iden )->get();
        $ingredientes=Ingrediente::where('seguridad_id',$iden )->get();
        $auxilio=Auxilio::where('seguridad_id',$iden )->get();
        $medida=Medida::where('seguridad_id',$iden )->get();
        $derrame=Derrame::where('seguridad_id',$iden )->get();
        $almacen=Almacen::where('seguridad_id',$iden )->get();
        $proteccion=Proteccion::where('seguridad_id',$iden )->get();
        $propiedad=Propiedad::where('seguridad_id',$iden )->get();
        $reactividad=Reactividad::where('seguridad_id',$iden )->get();
        $toxicologia=Toxicologia::where('seguridad_id',$iden )->get();
        $transporte=Transporte::where('seguridad_id',$iden )->get();
        $transito=Transito::where('seguridad_id',$iden )->get();
        $adicional=Adicional::where('seguridad_id',$iden )->get();
        $pdf= Pdf::loadView('seguridad.pdf', compact('seguridad', 'peligro', 'etiqueta','indicaciones','efectos','ingredientes','auxilio','medida', 'derrame', 'almacen', 'proteccion', 'propiedad', 'reactividad','toxicologia','transporte','transito','adicional'))
        ->setPaper('a4', 'portrait');
        return $pdf->stream('seguridad.pdf');
    }
    public function indicacion()
    {   
        $ids_seguridad=Seguridad::latest('id')->first()->id;
        return view('seguridad.indicacion', compact('ids_seguridad'));
    }
    public function indicacionStore(Request $request)
    {
        $ids_seguridad=Seguridad::latest('id')->first()->id;
        $countIds= count($request->codigo_indicacion);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new Indicacion();
            $array->codigo_indicacion = $request->codigo_indicacion[$i];
            $array->indicacion_peligro = $request->indicacion_peligro[$i];
            $array->clase_p = $request->clase_p[$i];
            $array->categoria_ghs = $request->categoria_ghs[$i];
            $array->seguridad_id = $ids_seguridad;
            $array->save();
        }
        
        return view('seguridad.ingrediente');
    }
    public function ingrediente()
    {   
        $ids_seguridad=Seguridad::latest('id')->first()->id;
        return view('seguridad.ingrediente', compact('ids_seguridad'));
    }

    public function ingredienteStore(Request $request)
    {
        $ids_seguridad=Seguridad::latest('id')->first()->id;
       $countIds= count($request->componente);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new Ingrediente();
            $array->componente = $request->componente[$i];
            $array->sinonimo = $request->sinonimo[$i];
            $array->cas = $request->cas[$i];
            $array->formula = $request->formula[$i];
            $array->seguridad_id = $ids_seguridad;
            $array->save();
        }
        return view('seguridad.auxilio');
    }
    public function auxilio()
    {
        $ids_seguridad=Seguridad::latest('id')->first()->id;
        return view('seguridad.auxilio', compact('ids_seguridad'));
    }
    public function auxilioStore(Request $request)
    {
        $ids_seguridad=Seguridad::latest('id')->first()->id;
       $countIds= count($request->tipo);
        //Pedazo nuevo
        For ($i=0; $i < $countIds; $i++) { 
            $array = new Auxilio();
            $array->tipo = $request->tipo[$i];
            $array->sintoma = $request->sintoma[$i];
            $array->auxilio = $request->auxilio[$i];
            $array->seguridad_id = $ids_seguridad;
            $array->save();
        }
        return view('seguridad.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seguridad  $seguridad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = seguridad::find($id);
        $consulta2=Peligro::where('seguridad_id',$id)->get();
        $consulta3=Etiqueta::where('seguridad_id',$id)->get();
        $consulta4=Efecto::where('seguridad_id',$id)->get();
        $consulta5=Medida::where('seguridad_id',$id)->get();
        $consulta6=Derrame::where('seguridad_id',$id)->get();
        $consulta7=Almacen::where('seguridad_id',$id)->get();
        $consulta8=Proteccion::where('seguridad_id',$id)->get();
        $consulta9=Propiedad::where('seguridad_id',$id)->get();
        $consulta10=Reactividad::where('seguridad_id',$id)->get();
        $consulta11=Toxicologia::where('seguridad_id',$id)->get();
        $consulta12=Transporte::where('seguridad_id',$id)->get();
        $consulta13=Transito::where('seguridad_id',$id)->get();
        $consulta14=Adicional::where('seguridad_id',$id)->get();
        $consulta15=Indicacion::where('seguridad_id',$id)->get();
        $consulta16=Ingrediente::where('seguridad_id',$id)->get();
        $consulta17=Auxilio::where('seguridad_id',$id)->get();
        return view('seguridad.edit', compact('consulta','consulta2','consulta3',
                    'consulta4','consulta5','consulta6','consulta7','consulta8',
                    'consulta9','consulta10','consulta11','consulta12','consulta13',
                    'consulta14','consulta15','consulta16','consulta17'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\seguridad  $seguridad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record=seguridad::where('id',$id)
            ->update([
                'nombre' => $request->nombre,
                'marca' => $request->marca,
                'id_sap' => $request->id_sap,
                'codigo_p'=>$request->codigo_p,
                'proposito_p'=>$request->proposito_p,
                'usos_p'=>$request->usos_p,
                'nombre_distribuidor'=>$request->nombre_distribuidor,
                'direccion_p'=>$request->direccion_p,
            ]);

            $record=Peligro::where('seguridad_id',$id)
            ->update([
                'peligro' => $request->peligro,
                'salud' => $request->salud,
                'inflamabilidad' => $request->inflamabilidad,
                'reactividad'=>$request->reactividad,
                'id_etiqueta'=>$request->id_etiqueta,
            ]);

            $record=Etiqueta::where('seguridad_id',$id)
            ->update([
                'palabra' => $request->palabra,
                'indicacion' => $request->indicacion,
                'categoria_p' => $request->categoria_p,
            ]);

            $record=Efecto::where('seguridad_id',$id)
            ->update([
                'inhalacion' => $request->inhalacion,
                'ojos_p' => $request->ojos_p,
                'piel_p' => $request->piel_p,
                'incendio_p' => $request->incendio_p,
                'ingestion_p' => $request->ingestion_p,
            ]);

            $record=Medida::where('seguridad_id',$id)
            ->update([
                'niebla' => $request->niebla,
                'espuma' => $request->espuma,
                'co2' => $request->co2,
                'polvo_quimico' => $request->polvo_quimico,
                'otros' => $request->otros,
                'quimicas_peligrosas' => $request->quimicas_peligrosas,
            ]);

            $record=Derrame::where('seguridad_id',$id)
            ->update([
                'derrame_material' => $request->derrame_material,
                'equipo_proteccion' => $request->equipo_proteccion,
                'precausiones_ambiente' => $request->precausiones_ambiente,
                'material_limpieza' => $request->material_limpieza,
                'desechos' => $request->desechos,
            ]);

            $record=Almacen::where('seguridad_id',$id)
            ->update([
                'precausiones_generales' => $request->precausiones_generales,
                'condicion_alm' => $request->condicion_alm,
                'incompatibilidad' => $request->incompatibilidad,
            ]);

            $record=Proteccion::where('seguridad_id',$id)
            ->update([
                'parametro_control' => $request->parametro_control,
                'control_tecnico' => $request->control_tecnico,
                'medidas' => $request->medidas,
                'prote_ojos' => $request->prote_ojos,
                'prote_piel' => $request->prote_piel,
                'prote_respiratoria' => $request->prote_respiratoria,
                'peligros_termicos' => $request->peligros_termicos,
            ]);

            $record=Propiedad::where('seguridad_id',$id)
            ->update([
                'apariencia' => $request->apariencia,
                'olor' => $request->olor,
                'ph' => $request->ph,
                'punto_fusion' => $request->punto_fusion,
                'temperatura' => $request->temperatura,
                'velocidad' => $request->velocidad,
                'inflamabilidad_info' => $request->inflamabilidad_info,
                'limite' => $request->limite,
                'presion_vapor' => $request->presion_vapor,
                'densidad_vapor' => $request->densidad_vapor,
                'densidad_relativa' => $request->densidad_relativa,
                'solubilidad' => $request->solubilidad,
                'coeficiente' => $request->coeficiente,
                'temperatura_esp' => $request->temperatura_esp,
                'temperatura_descom' => $request->temperatura_descom,
                'viscosidad' => $request->viscosidad,
                'peso_mol' => $request->peso_mol,
                'materia_volatil' => $request->materia_volatil,
                'datos_relevantes' => $request->datos_relevantes,
            ]);

            $record=Reactividad::where('seguridad_id',$id)
            ->update([
                'estabilidad_q' => $request->estabilidad_q,
                'condiciones_e' => $request->condiciones_e,
            ]);

            $record=Toxicologia::where('seguridad_id',$id)
            ->update([
                'toxicidad' => $request->toxicidad,
                'vias_entrada' => $request->vias_entrada,
                'degradacion' => $request->degradacion,
                'metodos_eliminacion' => $request->metodos_eliminacion,
            ]);

            $record=Transporte::where('seguridad_id',$id)
            ->update([
                'un' => $request->un,
                'desc_producto' => $request->desc_producto,
                'clase' => $request->clase,
                'grupo_embalaje' => $request->grupo_embalaje,
                'peligro_ambiente' => $request->peligro_ambiente,
            ]);

            $record=Transito::where('seguridad_id',$id)
            ->update([
                'regla_transito' => $request->regla_transito,
                'trans_internacional' => $request->trans_internacional,
            ]);

            $record=Adicional::where('seguridad_id',$id)
            ->update([
                'abreviaturas' => $request->abreviaturas,
                'aviso_lector' => $request->aviso_lector,
            ]);
            
        $consulta2= count((array)$request->id_indicacion);
            // No tocar esta puta parte plis
        for ($i=0; $i<$consulta2; $i++) {

         $data=Indicacion::where('id',$request->id_indicacion[$i])
                    ->update([
                    'codigo_indicacion' => $request->codigo_indicacion[$i],
                    'indicacion_peligro' => $request->indicacion_peligro[$i],
                    'clase_p' => $request->clase_p[$i],
                    'categoria_ghs' => $request->categoria_ghs[$i],
                    ]);

             }

             $consulta3= count((array)$request->id_ingredientes);
             // No tocar esta puta parte plis
            for ($i=0; $i<$consulta3; $i++) {
 
          $data=Ingrediente::where('id',$request->id_ingredientes[$i])
                     ->update([
                     'componente' => $request->componente[$i],
                     'sinonimo' => $request->sinonimo[$i],
                     'cas' => $request->cas[$i],
                     'formula' => $request->formula[$i],
                     ]);
 
              }

              $consulta4= count((array)$request->id_auxilio);
             // No tocar esta puta parte plis
            for ($i=0; $i<$consulta4; $i++) {
 
          $data=Auxilio::where('id',$request->id_auxilio[$i])
                     ->update([
                     'tipo' => $request->tipo[$i],
                     'sintoma' => $request->sintoma[$i],
                     'auxilio' => $request->auxilio[$i],
                     ]);
            }
         return redirect('seguridad/create/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\seguridad  $seguridad
     * @return \Illuminate\Http\Response
     */
    public function destroy(seguridad $seguridad)
    {
        //
    }
}
