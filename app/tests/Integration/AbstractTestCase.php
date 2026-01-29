<?php

declare(strict_types=1);

namespace App\Test\Integration;

use App\Factory\ContainerFactory;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;

abstract class AbstractTestCase extends TestCase
{
    public function getContainer(): ContainerInterface
    {
        $definitions = include __DIR__ . '/../../config/container.dist.php';

        return new ContainerFactory($definitions)->create();
    }
}
