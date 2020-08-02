<?php

declare(strict_types=1);

namespace App\ServiceFactory;

use Slim\Psr7\Factory\ResponseFactory;

final class ResponseFactoryFactory
{
    public function __invoke(): ResponseFactory
    {
        return new ResponseFactory();
    }
}
