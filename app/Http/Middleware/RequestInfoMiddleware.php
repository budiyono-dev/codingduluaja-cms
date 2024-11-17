<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class RequestInfoMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        
        Log::withContext([
            'request_id' => (string) Str::uuid(),
            'user_id' => auth()?->user()?->id ?? 'anonymous',
            'path' => $request->path(),
            'method' => $request->method(),
            'ip'=> $request->ip()
        ]);

        info('request info');
        return $next($request);
    }
}
