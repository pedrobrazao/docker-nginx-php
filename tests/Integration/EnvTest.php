<?php

declare(strict_types=1);

namespace App\Test\Integration;

final class EnvTest extends AbstractTestCase
{
    public function testDotEnvFileExists(): void
    {
        $path = __DIR__ . '/../../.env';

        $this->assertFileExists($path);
    }

    public function testContainerHasEnvArray(): void
    {
        $container = $this->getContainer();

        $this->assertTrue($container->has('env'));
        $this->assertIsArray($container->get('env'));
    }

    public function testEnvNames(): void
    {
        $container = $this->getContainer();
        $env = $container->get('env');
        $names = ['APP_NAME', 'APP_ENV'];

        foreach ($names as $name) {
            $this->assertArrayHasKey($name, $env);
        }
    }
}
