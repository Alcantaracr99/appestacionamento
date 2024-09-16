<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroEstacionamento extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'registro_estacionamento';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_cliente',
        'dt_entrada',
        'dt_saida',
        'vl_hora',
        'st_registro',
        'vl_total'
    ];
    protected $hidden = [
        'id',
        'id_cliente'
    ];
}
