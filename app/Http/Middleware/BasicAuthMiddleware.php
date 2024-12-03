<?php
    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;
    
    class BasicAuthMiddleware
    {
        public function handle(Request $request, Closure $next)
        {
            if (! $request->hasHeader('Authorization')) {
                return response('Unauthorized', 401)
                        ->header('WWW-Authenticate', 'Basic realm="Restricted"');
            }
    
            $credentials = base64_decode(substr($request->header('Authorization'), 6));
            list($username, $password) = explode(':', $credentials);
    
            if ($username !== 'ferrero' || $password !== 'GMP~DEV') {
                return response('Unauthorized', 401)
                        ->header('WWW-Authenticate', 'Basic realm="Restricted"');
            }
    
            return $next($request);
        }
    }
    