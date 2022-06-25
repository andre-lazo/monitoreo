<?php

namespace App\Http\Controllers\Alerta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Alerta\ObserverController;
class AlertaController extends Controller
{
    public function alertar($data){
        event(new ObserverController($data));
        return "ok";
    }
}
