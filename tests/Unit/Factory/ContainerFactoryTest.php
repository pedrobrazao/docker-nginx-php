<?php

declare(strict_types=1);

namespace App\Test\Unit\Factory;

use App\Factory\ContainerFactory;
use DI\ContainerBuilder;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;

final class ContainerFactoryTest extends TestCase
{
    public function testCreateContainer(): void
    {
        $definitions = ['foo' => 'bar'];
        $container = new ContainerFactory($definitions)->create();

        $this->assertInstanceOf(ContainerInterface::class, $container);
        $this->assertTrue($container->has('foo'));
    }
}
