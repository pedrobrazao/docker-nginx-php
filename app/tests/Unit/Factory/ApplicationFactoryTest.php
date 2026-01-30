<?php

declare(strict_types=1);

namespace App\Test\Unit\Factory;

use App\Factory\ApplicationFactory;
use App\Factory\ContainerFactory;
use App\Handler\HomeHandler;
use App\Handler\WebHooks\GetHandler;
use App\Handler\WebHooks\PostHandler;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

final class ApplicationFactoryTest extends TestCase
{
    public function testCreateApplication(): void
    {
        $container = new ContainerFactory()->create();
        $factory = new ApplicationFactory($container);
        $app = $factory->create();

        $this->assertInstanceOf(App::class, $app);
        $this->assertSame($container, $app->getContainer());
    }
}
