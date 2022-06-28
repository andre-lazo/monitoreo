<?php

namespace App\Models\Alerta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlertaModel extends Model
{
    use HasFactory;

    protected $table='tb_alerta';
    
    protected $fillable=[
        'ciudadela',
        'contenido',
        'guardia',
        'created_at',
        'updated_at',
        'estado'
    ];
    protected $primaryKey='id';
}
