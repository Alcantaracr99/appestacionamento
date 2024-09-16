<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ValorHora;

class ValorHoraController extends Controller
{
    public function listar(){
        try{
            return ValorHora::get();
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }
}
