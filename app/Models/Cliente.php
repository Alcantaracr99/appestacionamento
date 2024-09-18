<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Cliente extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'cliente';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nome'
    ];

    public function documento(){
        return $this->hasOne(Documento::class, 'id_cliente', 'id');
    }
}
