<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
class CurtomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "Hi i am middle";
       $path=$request->path();
    //    if($path=='login' || $path=='register' && Session::get('login')){
    //     return redirect('/');
    //    }
    //    else if(($path!="login" && !Session::get('user')) && ($path!='register' && !Session::get('user'))){
    //     return redirect('login');
    //    }
        return $next($request);
    }
}
