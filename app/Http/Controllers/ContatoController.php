<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function buscarContatoPeloId(string $id){
        try{
            $cliente = Contato::where('id', $id);
            $message = "";

            if($cliente)
                $message = 'Contato '.$id.' encontrado com sucesso.';
            else
                $message = 'ID '.$id.' não possui nenhum contato registrado.';

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

    public function listarContatosPeloIdCliente(string $idCliente){
        try{
            $cliente = Contato::where('id_cliente', $idCliente);
            $message = "";

            if($cliente)
                $message = 'Contato '.$idCliente.' encontrado com sucesso.';
            else
                $message = 'ID '.$idCliente.' não possui nenhum contato registrado.';

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
            $cliente = Contato::create($request->all());

            return response()->json([
                'message' => 'Contato cadastrado com sucesso',
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
            $cliente = Contato::where('id', $id)->update($request->all());

            $clienteResponse = Contato::find($id);

            return response()->json([
                'message' => 'Contato atualizado com sucesso',
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
            $cliente = Contato::find($id);

            if(!$cliente)
                return response()->json([
                    'message' => 'Contato com ID-'.$id.' não existe.',
                ], 400);

            $cliente->delete();

            return response()->json([
                'message' => 'Contato '.$id.' removido com sucesso',
                'response' => $cliente
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ], 500);
        }
    }
}
