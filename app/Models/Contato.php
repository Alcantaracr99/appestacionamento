<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'documento';
    protected $fillable = [
        'id',
        'telefone',
        'id_cliente',
        'tp_telefone',
        'email'
    ];
    protected $hidden = [
        'id',
        'id_cliente'
    ];
}
