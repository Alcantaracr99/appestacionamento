<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use League\Flysystem\Exception;

class ClienteController extends Controller
{
    public function listar(){
        try{
            $cliente = Cliente::get();
            $message = "";
            $tamanhoCliente = sizeOf($cliente);

            if($tamanhoCliente > 0)
                $message = "Foram retornados ".$tamanhoCliente." clientes";
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

    public function mostrarPorId($id){
        try{
            $cliente = Cliente::with('endereco')->find($id);
            $message = "";

            if($cliente)
                $message = 'Cliente '.$id.' encontrado com sucesso.';
            else
                $message = 'ID '.$id.' nao existe';

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

    public function criar(Request $request){
        try{
            $cliente = Cliente::create($request->all());

            return response()->json([
                'message' => 'Cliente cadastrado com sucesso',
                'response' => $cliente
            ], 201);

        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function atualizar(Request $request, string $id){
        try{
            $cliente = Cliente::where('id', $id)->update($request->all());

            $clienteResponse = Cliente::find($id);

            return response()->json([
                'message' => 'Cliente atualizado com sucesso',
                'response' => $clienteResponse
            ]);

        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function remover(string $id){
        try{
            $cliente = Cliente::find($id);

            if(!$cliente)
                return response()->json([
                    'message' => 'Cliente com ID-'.$id.' não existe.',
                ], 400);

            $cliente->delete();

            return response()->json([
                'message' => 'Cliente '.$id.' removido com sucesso',
                'response' => $cliente
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ], 500);
        }
    }
}
