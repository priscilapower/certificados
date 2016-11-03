<?php

namespace App\Http\Controllers\Evento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventoController extends Controller
{
    public function index(){
        return view('evento.index');
    }
}
