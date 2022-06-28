<?php

namespace App\Http\Controllers\Alerta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Alerta\ObserverController;
use App\Models\Alerta\AlertaModel;
class AlertaController extends Controller
{
    public function alertar($data,$ciudadela,$guardia){
        AlertaModel::create([
            'ciudadela'=>$data,
            'contenido'=>$ciudadela,
            'guardia'=>$guardia,
            'estado'=>1
        ]);
        $alerta=AlertaModel::orderBy('id', 'desc')->latest()->first();
        event(new ObserverController($data,$ciudadela,$guardia,$alerta->id));
      
        return "ok";
    }
     public function consultar_activas(){
        $alertas_activas=AlertaModel::where('estado',1)->orderBy('desc')->get();
        return view('/home',['alertas'=>$alertas_activas]) ;
     }
     public function cerrar(Request $request){
       // return $request->input();
     AlertaModel::where('id',$request->id)->update(['estado'=>0]);
        return "ok";
     }
}
