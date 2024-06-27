<?php

use App\Http\Controllers\BiovitaController;
use App\Http\Controllers\BpmController;
use App\Http\Controllers\CambioController;
use App\Http\Controllers\CapsulaController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\DesviacionesController;
use App\Http\Controllers\SeguimientoController;
use App\Http\Controllers\CoreccionesController;
use App\Http\Controllers\CriterioController;
use App\Http\Controllers\DesinfeccionController;
use App\Http\Controllers\EmbalajeController;
use App\Http\Controllers\EnvasadoController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\InformacionController;
use App\Http\Controllers\LimpiezaController;
use App\Http\Controllers\LiquidoController;
use App\Http\Controllers\LogisticaController;
use App\Http\Controllers\MezclaController;
use App\Http\Controllers\MezclaItemController;
use App\Http\Controllers\ModDocumentosController;
use App\Http\Controllers\ParametroController;
use App\Http\Controllers\PolvoadicionalController;
use App\Http\Controllers\PolvoController;
use App\Http\Controllers\PolvotempController;
use App\Http\Controllers\PterminadoController;
use App\Http\Controllers\SachetController;
use App\Http\Controllers\SanitizacionController;
use App\Http\Controllers\SeguridadController;
use App\Http\Controllers\SeleniumController;
use App\Http\Controllers\SuplementoController;
use App\Http\Controllers\ViscosoController;
use App\Models\Biovita;
use App\Models\Corecciones;
use App\Models\Desinfeccion;
use App\Models\Desviaciones;
use App\Models\Envasado;
use App\Models\Logistica;
use App\Models\Mezcla;
use App\Models\ModDocumentos;
use App\Models\Parametro;
use App\Models\Polvo;
use App\Models\Suplemento;
use Illuminate\Support\Facades\Route;

require(base_path('routes/route-list/route-auth.php'));

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/responsable/', [App\Http\Controllers\ResponsableController::class, 'index'])->name('responsable.index');
// Route::get('/responsable/create', [App\Http\Controllers\ResponsableController::class, 'create'])->name('responsable.create');
route::resource('responsable', ResponsableController::class);
route::resource('desviacion', DesviacionesController::class);
route::resource('seguimiento', SeguimientoController::class);
route::resource('correccion', CoreccionesController::class);
route::resource('moddocumentos', ModDocumentosController::class);
route::resource('envasado', EnvasadoController::class);
route::resource('limpieza', LimpiezaController::class);
route::resource('mezcla', MezclaController::class);
route::resource('mezclaItem', MezclaItemController::class);
route::resource('fichas', FichaController::class);
route::resource('seguridad', SeguridadController::class);
route::resource('suplemento', SuplementoController::class);
route::resource('informacion', InformacionController::class);
route::resource('pterminado', PterminadoController::class);
route::resource('logistica', LogisticaController::class);
route::resource('contenido', ContenidoController::class);
route::resource('embalaje', EmbalajeController::class);
route::resource('sanitizacion', SanitizacionController::class);
route::resource('desinfeccion', DesinfeccionController::class);
route::resource('bpm', BpmController::class);
route::resource('parametro', ParametroController::class);
route::resource('capsulas', CapsulaController::class);
route::resource('criterio', CriterioController::class);
route::resource('polvoadicional', PolvoadicionalController::class);
route::resource('viscoso', ViscosoController::class);
route::resource('sachet', SachetController::class);
route::resource('liquido', LiquidoController::class);
route::resource('polvo', PolvoController::class);
route::resource('selenium', SeleniumController::class);
route::resource('biovita', BiovitaController::class);
route::resource('polvotemplate', PolvotempController::class);
route::resource('cambio', CambioController::class);
Route::controller(ResponsableController::class)->group(function(){
  Route::post('validator','validator');
  Route::get('responsable/{id}/recibe', 'recibe')->name('responsable.recibe');
  Route::put('escribe/{id}', 'escribe')->name('responsable.escribe');
  Route::put('activar/{id}', 'activar')->name('responsable.activar');
});

Route::controller(CriterioController::class)->group(function(){
  Route::get('buscarCriterio','buscar');
});
Route::controller(BpmController::class)->group(function(){
  Route::get('buscarBpm','buscar');
  Route::get('bpm/{id}/autoriza', 'autoriza')->name('bpm.autoriza');
  Route::put('bpm/autoriza/{id}', 'autorizaStore')->name('bpm.autorizaStore');
});
Route::controller(PterminadoController::class)->group(function(){
      Route::get('buscarPterminado','buscar');
});
Route::controller(SanitizacionController::class)->group(function(){
  Route::get('buscarSanitizacion','buscar');
});


Route::controller(SeguridadController::class)->group(function(){

  Route::post('post','store')->name('seguridad.store');
  Route::get('indicacion','indicacion')->name('seguridad.indicacion');
  Route::post('indicacionStore','indicacionStore');
  Route::get('ingrediente','ingrediente');
  Route::Post('ingredienteStore', 'ingredienteStore');
  Route::get('auxilio','auxilio');
  Route::Post('auxilioStore','auxilioStore');
  Route::get('buscar','buscar');


});
Route::controller(FichaController::class)->group(function(){

  Route::get('buscarFichas','buscar');



});

Route::controller(DesviacionesController::class)->group(function(){

  Route::get('buscarDesviacion','buscar');
  Route::get('desviacion/correcciones/{id}', 'correcciones')->name('desviacion.correcciones');
  Route::post('desviacion/correcciones/', 'storeCorrecciones')->name('desviacion.storeCorrecciones');
  Route::get('desviacion/documentos/{id}', 'documentos')->name('desviacion.documentos');
  Route::post('desviacion/documentos/', 'documentosStore')->name('desviacion.documentosStore');
  Route::get('desviacion/{id}/vobo', 'vobo')->name('desviacion.vobo');
  Route::put('desviacion/vobo/{id}', 'voboUpdate')->name('desviacion.voboUpdate');
  Route::get('desviacion/seg/{id}', 'seg')->name('desviacion.seg');
  Route::post('desviacion/seg/', 'segStore')->name('desviacion.segStore');
  Route::get('desviacion/{id}/cierre', 'cierre')->name('desviacion.cierre');
  Route::put('desviacion/cierre/{id}', 'cierreUpdate')->name('desviacion.cierreUpdate');
  

});
Route::controller(EnvasadoController::class)->group(function(){

  Route::get('buscarEnvasado','buscar');


});
Route::controller(LimpiezaController::class)->group(function(){

  Route::get('buscarLimpieza','buscar');


});
Route::controller(MezclaController::class)->group(function(){

  Route::get('buscarMezcla','buscar');


});