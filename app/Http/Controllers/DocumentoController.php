<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentoController extends Controller
{
    public function buscarDocumentoPeloId(string $id){
        try{
            $cliente = Documento::where('id', $id);
            $message = "";

            if($cliente)
                $message = 'Documento '.$id.' encontrado com sucesso.';
            else
                $message = 'ID '.$id.' não possui nenhum documento registrado.';

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

    public function listarDocumentosPeloIdCliente(string $idCliente){
        try{
            $cliente = Documento::where('id_cliente', $idCliente);
            $message = "";

            if($cliente)
                $message = 'Documento '.$idCliente.' encontrado com sucesso.';
            else
                $message = 'ID '.$idCliente.' não possui nenhum documento registrado.';

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
            $cliente = Documento::create($request->all());

            return response()->json([
                'message' => 'Documento cadastrado com sucesso',
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
            $cliente = Documento::where('id', $id)->update($request->all());

            $clienteResponse = Documento::find($id);

            return response()->json([
                'message' => 'Documento atualizado com sucesso',
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
            $cliente = Documento::find($id);

            if(!$cliente)
                return response()->json([
                    'message' => 'Documento com ID-'.$id.' não existe.',
                ], 400);

            $cliente->delete();

            return response()->json([
                'message' => 'Documento '.$id.' removido com sucesso',
                'response' => $cliente
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ], 500);
        }
    }
}
