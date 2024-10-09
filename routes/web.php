<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/formulario-cliente', function () {
    return view('formulario-cliente');
});


Route::get('/cliente-recibe', function (Request $request) {
    #return view('cliente-recibe');
    dd($request->all());
});
