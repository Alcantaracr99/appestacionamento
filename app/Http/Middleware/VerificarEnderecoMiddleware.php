<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificarEnderecoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->has(['endereco', 'uf', 'cep', 'cidade'])) {
            return response()->json(['error' => 'Todos os campos de endereço (endereço, uf, cep, cidade) são obrigatórios.'], 400);
        }

        // Validar CEP (formato 00000-000 ou 00000000)
        if (!preg_match('/^\d{5}-\d{3}$|^\d{8}$/', $request->input('cep'))) {
            return response()->json(['error' => 'CEP inválido.'], 400);
        }

        // Validar UF (deve ser 2 letras maiúsculas)
        if (!preg_match('/^[A-Z]{2}$/', $request->input('uf'))) {
            return response()->json(['error' => 'UF inválida.'], 400);
        }

        return $next($request);
    }
}
