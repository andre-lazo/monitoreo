<?php

namespace App\Http\Controllers\Alerta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Alerta\ObserverController;
class AlertaController extends Controller
{
    public function alertar(){
        event(new ObserverController('retorno de datos de prueba'));
        return "ok";
    }
}
