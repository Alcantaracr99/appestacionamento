<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function buscarContatoPeloId(string $id){
        try{
            $contato = Contato::where('id', $id);
            $message = "";

            if($contato)
                $message = 'Contato '.$id.' encontrado com sucesso.';
            else
                $message = 'ID '.$id.' não possui nenhum contato registrado.';

            return response()->json([
                'message' => $message,
                'response' => $contato
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function listarContatosPeloIdCliente(string $idCliente){
        try{
            $contato = Contato::where('id_cliente', $idCliente);
            $message = "";

            if($contato)
                $message = 'Contato '.$idCliente.' encontrado com sucesso.';
            else
                $message = 'ID '.$idCliente.' não possui nenhum contato registrado.';

            return response()->json([
                'message' => $message,
                'response' => $contato
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function criar(Request $request){
        try{
            $contato = Contato::create($request->all());

            return response()->json([
                'message' => 'Contato cadastrado com sucesso',
                'response' => $contato
            ], 201);

        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function atualizar(Request $request, string $id){
        try{
            $contato = Contato::where('id', $id)->update($request->all());

            $contatoResponse = Contato::find($id);

            return response()->json([
                'message' => 'Contato atualizado com sucesso',
                'response' => $contatoResponse
            ]);

        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function remover(string $id){
        try{
            $contato = Contato::find($id);

            if(!$contato)
                return response()->json([
                    'message' => 'Contato com ID-'.$id.' não existe.',
                ], 400);

            $contato->delete();

            return response()->json([
                'message' => 'Contato '.$id.' removido com sucesso',
                'response' => $contato
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ], 500);
        }
    }
}
