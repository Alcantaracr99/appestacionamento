<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusRegistro;
use League\Flysystem\Exception;

class StatusRegistroController extends Controller
{
    public function listar(){
        try{
            return StatusRegistro::get();
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }
}
