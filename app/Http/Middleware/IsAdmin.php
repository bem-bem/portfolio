<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role->name === 'admin') {
            return $next($request); // return this user to the next page
        }else {
            abort(403, 'Your not an admin');
        }
       
    }
}
