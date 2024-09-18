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
        'id_cliente',
        'created_at',
        'updated_at'

    ];

    public function cliente(){
        return $this->hasOne(Cliente::class, 'id', 'id_cliente');
    }

    public function tp_documento(){
        return $this->hasOne(TpDocumento::class, 'id', 'tp_documento');
    }
}
