<?php

declare(strict_types=1);

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class HttpCachingMiddleware implements MiddlewareInterface
{
    const DATETIME_FORMAT = 'Y-m-d H:i:s';

    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $handler
    ) : ResponseInterface {
        $time = date(self::DATETIME_FORMAT);

        $requestAsText = serialize($request);

        file_put_contents(
            './request-cache.log',
            "Request made at $time: $requestAsText" . PHP_EOL,
            FILE_APPEND
        );

        $response = $handler->handle($request);
        $responseAsText = serialize($response);

        file_put_contents(
            './response-cache.log',
            "Request made at $time: $responseAsText" . PHP_EOL,
            FILE_APPEND
        );

        return $response;
    }
}
