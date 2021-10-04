<?php

namespace src;

use Tuupola\Middleware\JwtAuthentication;

function jwtAuth(): JwtAuthentication {
   return new JwtAuthentication(
    [
        'secret'=>getenv('JWT_SECRET_KEY'),
        'attribute'=>'jwt',
        "relaxed" => ["localhost", "cosems.com", "equipeintegrada.com.br", "192.168.0.122"],

    ]);
} 