<?php

declare(strict_types=1);

namespace App\Handler;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Log\LoggerInterface;
use Slim\Psr7\Response;

final readonly class HomeHandler implements RequestHandlerInterface
{
    public const string NAME = 'home';

    public function __construct(
        private LoggerInterface $logger,
    ) {}

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $this->logger->info('GET ' . $request->getUri());

        $response = new Response();
        $response->getBody()->write('It works!');

        return $response;
    }
}
