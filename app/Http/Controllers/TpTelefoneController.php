<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TpTelefone;

class TpTelefoneController extends Controller
{
    public function listar(){
        try{
            return TpTelefone::get();
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }
}
