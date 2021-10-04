<?php 

namespace src;

function slimConfiguration(): \Slim\Container
{
    $configuration = [
        'settings' => [
            'displayErrorDetails' => getenv('DISPLAY_ERRORS_DETAIL')
        ],
    ];
    $c = new \Slim\Container($configuration);
    return $c;
}
