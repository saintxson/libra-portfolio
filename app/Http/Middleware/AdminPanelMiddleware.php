<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminPanelMiddleware
{

    public function handle(Request $request, Closure $next)
    {
//        if (auth()->user()->role !== 'admin'){
//            return redirect()->route('book.index');
//        }
//        return $next($request);
        if (auth()->user()->role === 'admin'){
            return $next($request);
        }
        else{
            return redirect()->route('book.index');
        }
    }
}
