<?php

declare(strict_types=1);

namespace App\Test\Unit\Handler;

use App\Handler\HomeHandler;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Log\LoggerInterface;

final class HomeHandlerTest extends TestCase
{
    public function testHandledRequestIsLogged(): void
    {
        $logger = $this->createMock(LoggerInterface::class);
        $logger->expects($this->once())->method('info');

        $handler = new HomeHandler($logger);

        $rEQUEST = $this->getMockBuilder(ServerRequestInterface::class)->getMock();

        $response = $handler->handle($rEQUEST);

        $this->assertSame(200, $response->getStatusCode());
    }
}
