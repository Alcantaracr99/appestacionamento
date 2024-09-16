<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function buscarEnderecoPeloId(string $id){
        try{
            $cliente = Endereco::where('id', $id);
            $message = "";

            if($cliente)
                $message = 'Endereco '.$id.' encontrado com sucesso.';
            else
                $message = 'ID '.$id.' não possui nenhum endereco registrado.';

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

    public function listarEnderecosPeloIdCliente(string $idCliente){
        try{
            $cliente = Endereco::where('id_cliente', $idCliente);
            $message = "";

            if($cliente)
                $message = 'Endereco '.$idCliente.' encontrado com sucesso.';
            else
                $message = 'ID '.$idCliente.' não possui nenhum endereco registrado.';

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
            $cliente = Endereco::create($request->all());

            return response()->json([
                'message' => 'Endereco cadastrado com sucesso',
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
            $cliente = Endereco::where('id', $id)->update($request->all());

            $clienteResponse = Endereco::find($id);

            return response()->json([
                'message' => 'Endereco atualizado com sucesso',
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
            $cliente = Endereco::find($id);

            if(!$cliente)
                return response()->json([
                    'message' => 'Endereco com ID-'.$id.' não existe.',
                ], 400);

            $cliente->delete();

            return response()->json([
                'message' => 'Endereco '.$id.' removido com sucesso',
                'response' => $cliente
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ], 500);
        }
    }
}
