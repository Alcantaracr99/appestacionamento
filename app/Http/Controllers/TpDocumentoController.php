<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TpDocumento;

class TpDocumentoController extends Controller
{
    public function listar(){
        try{
            return TpDocumento::get();
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }
}
