<?php

declare(strict_types=1);

use Slim\Psr7\Factory\ServerRequestFactory;

$env = 'prod';

$web = require __DIR__.'/../app/web.php';
$web->send($web->handle((new ServerRequestFactory())->createFromGlobals()));
