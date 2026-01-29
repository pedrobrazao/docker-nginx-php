    <?php

use App\Factory\ApplicationFactory;
use App\Factory\ContainerFactory;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

Dotenv::createImmutable(__DIR__ . '/..')->load();

new ApplicationFactory(
    new ContainerFactory(
        file_exists(__DIR__ . '/../config/container.php')
        ? include __DIR__ . '/../config/container.php'
        : include __DIR__ . '/../config/container.dist.php',
    )->create(),
)->create()->run();
