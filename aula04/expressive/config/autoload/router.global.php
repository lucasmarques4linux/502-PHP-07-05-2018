<?php

use Zend\Expressive\Router\FastRouteRouter;
use Zend\Expressive\Router\RouterInterface;

return [
    'dependencies' => [
        'invokables' => [
            RouterInterface::class => FastRouteRouter::class,
            App\User\GetAll::class => App\User\GetAll::class,
        ],
    ],
];
