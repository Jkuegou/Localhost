<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Autres middlewares de route
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ];

    // Autres sections comme $middleware, $middlewareGroups, etc.
}
