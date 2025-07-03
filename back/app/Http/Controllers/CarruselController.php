<?php

namespace App\Http\Controllers;

use App\Models\Carrusel;
use Illuminate\Http\Request;

class CarruselController extends Controller{
    function index(){
        return Carrusel::all();
    }
}
