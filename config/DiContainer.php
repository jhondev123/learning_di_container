<?php

use DI\ContainerBuilder;
use function DI\create;
use Jhonattan\LearningDiContainer\Repositorys\UserRepository;

$databasePath = "sqlite:" . __DIR__ . "/../learning_container_di.db";

$builder = new ContainerBuilder();
$builder->addDefinitions([
    PDO::class => create(PDO::class)
        ->constructor($databasePath)
        ->method('setAttribute', PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
        ->method('setAttribute', PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC),
    UserRepository::class => create(UserRepository::class)
        ->constructor(\DI\get(PDO::class)),
]);


return $builder->build();
