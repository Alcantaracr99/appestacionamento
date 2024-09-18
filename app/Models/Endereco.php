<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'endereco';
    protected $fillable = [
        'id',
        'id_cliente',
        'endereco',
        'complemento',
        'numero',
        'cidade',
        'bairro',
        'uf',
        'cep'
    ];
    protected $hidden = [
        'id',
        'id_cliente'
    ];


}
