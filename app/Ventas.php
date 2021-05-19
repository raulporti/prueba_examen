<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = 'mvtascli';
    protected $fillable = [
        'cli_id', 'vta_mes', 'vta_anio', 'vta_monto', 'vta_clascli'
    ];
}
