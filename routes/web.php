<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidoshasproductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use Carbon\Carbon;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource("producto",ProductoController::class);

Route::resource("carrito",CarritoController::class);

Route::resource("pedido", PedidoController::class);

Route::resource("su_pedido", PedidoshasproductoController::class);

//Route::resource("");

/* Route::get("/prueba", function(){
    printf("Right now is %s", Carbon::now()->toDateTimeString());
    printf("Right now in Bogotá is %s", Carbon::now('America/Bogota'));
}); */
