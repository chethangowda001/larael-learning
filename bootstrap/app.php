<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\ageCheck;
use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\checkAge;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->append(ageCheck::class);
        // $middleware->appendToGroup("check1", [
        //     ageCheck::class,
        //     CountryCheck::class,
        // ]);

       
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
