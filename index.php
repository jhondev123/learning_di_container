<?php
require_once __DIR__ . "/vendor/autoload.php";

use Jhonattan\LearningDiContainer\Class\Test;
use Psr\Container\ContainerInterface;
use Jhonattan\LearningDiContainer\Repositorys\UserRepository;

/**
 * @var ContainerInterface $container
 */

$container = require_once __DIR__ . "/config/DiContainer.php";
$userRepository = $container->get(UserRepository::class);
var_dump($userRepository->searchUsers());
