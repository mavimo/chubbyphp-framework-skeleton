<?php

declare(strict_types=1);

namespace App;

use Chubbyphp\Framework\ErrorHandler;

require __DIR__.'/../vendor/autoload.php';

set_error_handler([ErrorHandler::class, 'handle']);
