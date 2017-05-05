<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $table = 'galpon';
    
    protected $fillable = ['id','fecha_inicio', 'fecha_fin','nombre_empresa'];

protected $dates = ['deleted_at'];
}
