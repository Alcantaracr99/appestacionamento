<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Documento;

class TpDocumento extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'tp_documento';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'documento'
    ];

    public function documento(){
        return $this->hasMany(Documento::class, 'tp_documento', 'id');
    }
}
