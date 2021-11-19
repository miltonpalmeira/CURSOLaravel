<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Redirecionar para página teste
//Route::redirect('/', '/teste');

/*Route::get('/teste', function() {
    return view('teste');
});*/

// Ou
Route::view('/teste', 'teste');

// Exemplo de ROTA DINÂMICA
Route::get('/noticia/{slug}', function($slug) {
    echo "TÍTULO: ".$slug;
});

// Comentário da notícia
Route::get('/noticia/{slug}/comentario/{id}', function($slug, $id) {
    echo "Mostrando o comentário ".$id." da notícia ".$slug;
});

// Expressão regular - Listar o usuário - Envio nome ou id
Route::get('/user/{name}', function($name) {
    echo "Mostrando usuário de NOME: ".$name;
})->where('name', '[a-z]+');

Route::get('/user/{id}', function($id) {
    echo "Mostrando usuário ID: ".$id;
})->where('id', '[0-9]+');