<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CurtomAuth;  //middleware path
use App\Http\Middleware\setlang;  ///middleware setlang
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(CurtomAuth::class);
        $middleware->appendToGroup('setlang',setlang::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
