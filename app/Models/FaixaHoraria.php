<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaixaHoraria extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'faixa_horaria';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'faixa_horaria'
    ];
}
