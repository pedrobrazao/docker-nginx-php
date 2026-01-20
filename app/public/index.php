    <?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function(ServerRequestInterface $rEQUEST, ResponseInterface $response, array $args): ResponseInterface {
    $response->getBody()->write('it works!');
    return $response;
});
$app->run();
