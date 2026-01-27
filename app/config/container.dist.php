<?php

use Monolog\Handler\AbstractHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

/**
 * @return array<string, scalar|callable|array<string,scalar>>
 */
return [
    'env' => [
        APP_NAME => (string) ($_ENV[APP_NAME] ?? 'App'),
        APP_ENV => (string) ($_ENV[APP_ENV] ?? APP_ENV_PROD),
    ],
    AbstractHandler::class => function (ContainerInterface $c): AbstractHandler {
        $env = $c->get('env')[APP_ENV];
        $filename = APP_ENV_PROD === $env ? 'app.log' : $env . date('Ymd') . '.log';
        return new StreamHandler(__DIR__ . '/../var/logs/' . $filename);
    },
    LoggerInterface::class => function (ContainerInterface $c): LoggerInterface {
        $logger = new Logger($c->get('env')[APP_NAME]);
        $logger->pushHandler($c->get(AbstractHandler::class));
        return $logger;
    },
];
