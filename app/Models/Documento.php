<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'documento';
    protected $fillable = [
        'id',
        'documento',
        'id_cliente',
        'tp_documento'
    ];
    protected $hidden = [
        'id',
        'id_cliente'
    ];
}
