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

        $rEQUEST = $this->getMockBuilder(ServerRequestInterface::class)->getMock();
        $rEQUEST->expects($this->once())->method('getUri');

        $handler = new HomeHandler($logger);

        $response = $handler->handle($rEQUEST);

        $this->assertSame(200, $response->getStatusCode());
    }
}
