<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SimpleAuth
{
    public function handle(Request $request, Closure $next)
    {
        $username = $request->getUser();
        $password = $request->getPassword();

        // Change these to your desired username and password
        if ($username == 'admin' && $password == 'portfolio123') {
            return $next($request);
        }

        return response('Unauthorized', 401, ['WWW-Authenticate' => 'Basic']);
    }
}