<?php

declare(strict_types=1);

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class TextLoggerMiddleware implements MiddlewareInterface
{
    const DATETIME_FORMAT = 'Y-m-d H:i:s';

    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $handler
    ) : ResponseInterface {
        $time = date(self::DATETIME_FORMAT);

        file_put_contents(
            './request.log',
            "Request made at $time" . PHP_EOL,
            FILE_APPEND
        );

        return $handler->handle($request);
    }
}
