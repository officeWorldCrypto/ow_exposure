<?php

namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ExceptionController {

   public function test( Request $request, Response $response, array $args ): Response {
      try {
          throw new \Exception('Mensagem de erro');
          return $response->withJson(['msg'=>'ok']);
        } catch( \InvalidArgumentException $e) {
            return $response->withJson([
                'error' => \InvalidArgumentException::class,
                'status' => 400, /* Bad Request*/
                'code' => '002',
                'userMessage' => 'Necessário enviar todos os dados requeridos',
                'developerMessage' => $e->getMessage()
            ],500);
        } catch( \Exception | \Throwable $e) {
            return $response->withJson([
              'error' => \Exception::class,
              'status' => 500,
              'code' => '001',
              'userMessage' => 'Erro interno',
              'developerMessage' => $e->getMessage()
          ],500);
        }
   }

}