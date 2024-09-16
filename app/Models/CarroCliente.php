<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarroCliente extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'carro_cliente';
    protected $fillable = [
        'id',
        'id_cliente',
        'modelo_carro',
        'placa',
        'cor'
    ];
    protected $hidden = [
        'id',
        'id_cliente'
    ];
}
