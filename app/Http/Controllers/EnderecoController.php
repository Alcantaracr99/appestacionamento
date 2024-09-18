<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function buscarEnderecoPeloId(string $id){
        try{
            $endereco = Endereco::where('id', $id);
            $message = "";

            if($endereco)
                $message = 'Endereco '.$id.' encontrado com sucesso.';
            else
                $message = 'ID '.$id.' não possui nenhum endereco registrado.';

            return response()->json([
                'message' => $message,
                'response' => $endereco
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function listarEnderecosPeloIdCliente(string $idCliente){
        try{
            $endereco = Endereco::where('id_cliente', $idCliente);
            $message = "";

            if($endereco)
                $message = 'Endereco '.$idCliente.' encontrado com sucesso.';
            else
                $message = 'ID '.$idCliente.' não possui nenhum endereco registrado.';

            return response()->json([
                'message' => $message,
                'response' => $endereco
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function criar(Request $request){
        try{
            $endereco = Endereco::create($request->all());

            return response()->json([
                'message' => 'Endereco cadastrado com sucesso',
                'response' => $endereco
            ], 201);

        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function atualizar(Request $request, string $id){
        try{
            $endereco = Endereco::where('id', $id)->update($request->all());

            $enderecoResponse = Endereco::find($id);

            return response()->json([
                'message' => 'Endereco atualizado com sucesso',
                'response' => $enderecoResponse
            ]);

        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function remover(string $id){
        try{
            $endereco = Endereco::find($id);

            if(!$endereco)
                return response()->json([
                    'message' => 'Endereco com ID-'.$id.' não existe.',
                ], 400);

            $endereco->delete();

            return response()->json([
                'message' => 'Endereco '.$id.' removido com sucesso',
                'response' => $endereco
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ], 500);
        }
    }
}
