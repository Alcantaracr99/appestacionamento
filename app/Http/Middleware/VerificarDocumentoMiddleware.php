<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificarDocumentoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $documento = $request->documento;
        $tp_documento = $request->tp_documento;
        $valid = false;

        switch ($tp_documento) {
            case 1:
                // Validar RG (formato com ou sem pontuação, entre 7 e 9 dígitos)
                $valid = preg_match('/^\d{1,2}\.\d{3}\.\d{3}(-\d{1})?$|^\d{7,9}$/', $documento);
                break;

            case 2:
                // Validar CPF (formato com ou sem pontuação)
                $valid = preg_match('/^\d{3}\.\d{3}\.\d{3}-\d{2}$|^\d{11}$/', $documento);
                break;

            case 3:
                // Validar CNPJ (formato com ou sem pontuação)
                $valid = preg_match('/^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$|^\d{14}$/', $documento);
                break;

            case 4:
                // Validar Inscrição Estadual (formato genérico com até 14 dígitos)
                $valid = preg_match('/^\d{1,14}$/', $documento);
                break;


            default:
                return response()->json(['error' => 'Tipo de documento inválido.'], 400);
        }

        if (!$valid) {
            return response()->json(['error' => 'Documento inválido.'], 400);
        }

        return $next($request);
    }
}
