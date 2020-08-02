<?php

declare(strict_types=1);

namespace App;

use Chubbyphp\Container\Container;
use Chubbyphp\Framework\Application;
use Chubbyphp\Framework\ErrorHandler;
use Chubbyphp\Framework\Middleware\ExceptionMiddleware;
use Chubbyphp\Framework\Middleware\LazyMiddleware;
use Chubbyphp\Framework\Middleware\RouterMiddleware;

require __DIR__.'/../vendor/autoload.php';

return static function (string $env) {
    set_error_handler([new ErrorHandler(), 'errorToException']);

    /** @var Container $container */
    $container = (require __DIR__.'/container.php')($env);

    return new Application([
        new LazyMiddleware($container, ExceptionMiddleware::class),
        new LazyMiddleware($container, RouterMiddleware::class),
    ]);
};
