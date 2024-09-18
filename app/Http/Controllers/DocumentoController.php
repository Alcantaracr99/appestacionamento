<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentoController extends Controller
{
    public function buscarDocumentoPeloId(string $id){
        try{
            $documento = Documento::where('id', $id)
                                    ->with(['cliente', 'tp_documento'])
                                    ->get();
            $message = "";

            if($documento)
                $message = 'Documento '.$id.' encontrado com sucesso.';
            else
                $message = 'ID '.$id.' não possui nenhum documento registrado.';

            return response()->json([
                'message' => $message,
                'response' => $documento
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function listarDocumentosPeloIdCliente(string $idCliente){
        try{
            $documento = Documento::where('id_cliente', $idCliente)
                                    ->with(['cliente', 'tp_documento'])
                                    ->get();
            $message = "";

            if($documento)
                $message = 'Documento '.$idCliente.' encontrado com sucesso.';
            else
                $message = 'ID '.$idCliente.' não possui nenhum documento registrado.';

            return response()->json([
                'message' => $message,
                'response' => $documento
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function criar(Request $request){
        try{
            $documento = Documento::create($request->all());

            return response()->json([
                'message' => 'Documento cadastrado com sucesso',
                'response' => $documento
            ], 201);

        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function atualizar(Request $request, string $id){
        try{
            $documento = Documento::where('id', $id)->update($request->all());

            $documentoResponse = Documento::find($id);

            return response()->json([
                'message' => 'Documento atualizado com sucesso',
                'response' => $documentoResponse
            ]);

        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function remover(string $id){
        try{
            $documento = Documento::find($id);

            if(!$documento)
                return response()->json([
                    'message' => 'Documento com ID-'.$id.' não existe.',
                ], 400);

            $documento->delete();

            return response()->json([
                'message' => 'Documento '.$id.' removido com sucesso',
                'response' => $documento
            ], 200);
        }catch(Exception $ex){
            return response()->json([
                'message' => $ex->getMessage()
            ], 500);
        }
    }
}
