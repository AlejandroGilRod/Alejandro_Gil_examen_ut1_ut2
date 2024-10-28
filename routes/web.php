<?php
use App\Http\Controllers\ControladorFormulario2;
use App\Http\Controllers\ControladorFormulario;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    $messages = \App\Models\Message::all();
    return view('messages', ['messages' => $messages]);
});
Route::get('/formulario', function () {
    return view('formulario');
});
Route::put('/messages/{id}', [ControladorFormulario::class, 'editarMensaje'])->name('negrita');

Route::put('/messages/{id}', [ControladorFormulario2::class, 'editarMensaje'])->name('subrayado');