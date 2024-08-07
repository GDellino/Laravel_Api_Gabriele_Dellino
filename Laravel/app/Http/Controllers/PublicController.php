<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PublicController extends Controller
{
    public function homepage(){

        $equipments = Http::get('https://www.dnd5eapi.co/api/equipment')->json()['results'];

        // dd($equipments);
        return view('welcome', ['equipments'=>$equipments]);
    }

    public function detail($index){

        $equipment =  Http::get('https://www.dnd5eapi.co/api/equipment/' . $index)->json();

        return view('detail', ['equipment'=>$equipment]);
    }
}
