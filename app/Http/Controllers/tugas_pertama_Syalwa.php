<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tugas_pertama_Syalwa extends Controller
{
    public function index(){
    $a=3;
    $b=10;
    $c = $a+$b;
    return "Nilai dari penjumlahan a dan b = ".$c;
    }
}

