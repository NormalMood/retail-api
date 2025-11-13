<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSecretToken
{
    public function handle(Request $request, Closure $next): Response
    {
        $key = $request->input('key');
        $secretToken = env('APP_SECRET_TOKEN');
        if (! $key || ! hash_equals($secretToken, $key)) {
            return response()->json([
                'error' => 'Token invalid or empty'
            ], 403);
        }
        return $next($request);
    }
}
