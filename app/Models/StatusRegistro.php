<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusRegistro extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'st_registro';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'status'
    ];
}
