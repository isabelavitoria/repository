<?php

use App\Http\Livewire\Index;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/site', Index::class);