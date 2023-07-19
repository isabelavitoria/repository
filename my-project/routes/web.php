<?php

use App\Http\Livewire\Couter;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/contador', Couter::class);