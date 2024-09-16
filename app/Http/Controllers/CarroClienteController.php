<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarroCliente;

class CarroClienteController extends Controller
{
    public function listar(){
        try{
            $cliente = CarroCliente::get();
            $message = "";
            $tamanhoCliente = sizeOf($cliente);

            if($tamanhoCliente > 0)
                $message = "Foram retornados ".$tamanhoCliente." registros";
            else
                $message = "Não há registros na base de dados";

            return response()->json([
                'message' => $message,
                'response' => $cliente
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }
}
