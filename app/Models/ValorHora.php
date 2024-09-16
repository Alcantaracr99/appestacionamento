<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValorHora extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'valor_hora';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'valor_hora',
        'faixa_horaria',
        'desconto'
    ];
}
