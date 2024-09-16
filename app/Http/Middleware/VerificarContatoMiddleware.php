<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificarContatoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $telefone = $request->telefone;
        $email = $request->email;

        if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
            return response()->json(['error' => 'Email inválido.'], 400);
        }

        if(empty($telefone) || is_null($telefone))
            return response()->json(['error' => "O telefone não pode ser nulo ou vazio"], 400);
        else if (!preg_match('/^\(\d{2}\)\s\d{4,5}-\d{4}$/', $phone)) {
            return response()->json(['error' => 'Telefone inválido.'], 400);
        }

        return $next($request);
    }
}
