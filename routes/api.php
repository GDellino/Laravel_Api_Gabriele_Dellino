<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/monsters', function () {
    $monsters = Http::get('https://www.dnd5eapi.co/api/monsters')->json()['results'];
   // dd($monsters);
    return response($monsters);
});
