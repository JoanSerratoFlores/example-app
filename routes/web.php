<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {

    echo "<h1>Hola mundo</h1>";
});

Route::get('/redirigir', [PeliculaController::class, 'redirigir'])
        ->name('redirigir');
;

Route::resource('usuario', UsuarioController::class);

Route::get('/detalle/{year?}',
                [PeliculaController::class, 'detalle'])
        ->name('detalle.pelicula')
        ->middleware('TestYear');

Route::get('/index',
                [PeliculaController::class, 'index'])
        ->name('index.pelicula');

Route::get('/formulario',
                [PeliculaController::class, 'formulario'])
        ->name('formulario.pelicula');

Route::post('/recibir',
        [PeliculaController::class, 'recibir']);

/* Rutas Fruta */

Route::group(['prefix' => 'frutas'], function () {
    Route::get('/index', [\App\Http\Controllers\FrutaController::class, 'index'])
            ->name('frutas.index');
    ;
    Route::get('/detail/{id}', [\App\Http\Controllers\FrutaController::class, 'detail'])
            ->name('frutas.detail');
    ;
    Route::get('/crear', [\App\Http\Controllers\FrutaController::class, 'create'])
            ->name('frutas.create');
    ;
    Route::get('/delete/{id}', [\App\Http\Controllers\FrutaController::class, 'delete'])
            ->name('frutas.delete');
    ;
    Route::get('/update/{id}', [\App\Http\Controllers\FrutaController::class, 'update'])
            ->name('frutas.update');
    ;
    Route::post('/edit', [\App\Http\Controllers\FrutaController::class, 'edit'])
            ->name('frutas.edit');
    ;
    Route::post('/save', [\App\Http\Controllers\FrutaController::class, 'save'])
            ->name('frutas.save');
    ;
});
/*
Route::get('/mostrar-fecha', function () {

    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha', array(
'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo}/{year?}', function ($titulo = 'No hay una pelicula seleccionada', $year = 2024) {

    return view('pelicula', array(
'titulo' => $titulo,
 'year' => $year,
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9 ]+',
));

Route::get('/listado-peliculas', function ($titulo = 'No hay una pelicula seleccionada', $year = 2024) {

    $titulo = "Listado de Peliculas";
    $listado = array('Batman','Spiderman','Gran Torino');

    return view('peliculas.listado')
    ->with('titulo', $titulo)
    ->with('listado',$listado);
});

Route::get('/pagina-generica', function ($titulo = 'No hay una pelicula seleccionada', $year = 2024) {

    return view ('pagina');
    
});
*/

