<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpTelefone extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'tp_telefone';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'tp_telefone'
    ];
}
