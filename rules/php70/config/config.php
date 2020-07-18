<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->public()
        ->autowire();

    $services->load('Rector\Php70\\', __DIR__ . '/../src')
        ->exclude(
            [
                __DIR__ . '/../src/Rector/**/*Rector.php',
                __DIR__ . '/../src/Exception/*',
                __DIR__ . '/../src/ValueObject/*',
            ]
        );
};
