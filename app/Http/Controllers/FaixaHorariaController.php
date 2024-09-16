<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FaixaHoraria;

class FaixaHorariaController extends Controller
{
    public function listar(){
        try{
            return FaixaHoraria::get();
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }
}
