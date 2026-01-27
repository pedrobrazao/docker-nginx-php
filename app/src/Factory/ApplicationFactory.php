<?php

declare(strict_types=1);

namespace App\Factory;

use App\Handler\HomeHandler;
use App\Handler\WebHooks\GetHandler;
use App\Handler\WebHooks\PostHandler;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

final readonly class ApplicationFactory
{
    public function __construct(private ?ContainerInterface $container = null) {}

    /** @phpstan-ignore missingType.generics */
    public function create(): App
    {
        if (null !== $this->container) {
            AppFactory::setContainer($this->container);
        }

        $app = AppFactory::create();
        $app->addRoutingMiddleware();

        $app->get('/', HomeHandler::class)->setName(HomeHandler::NAME);

        return $app;
    }
}
