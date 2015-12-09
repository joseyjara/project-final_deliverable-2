<?php
/**
 * Created by PhpStorm.
 * User: cs3620
 * Date: 12/1/15
 * Time: 6:08 PM
 */

require_once __DIR__ . '/vendor/autoload.php';

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();

//$app['debug'] = true;

$notes = [
            '00001'=> [
                        'name' => 'ManagerPlus Desktop',
                        'body' => 'ManagerPlus Asset Management Software, Enterprise edition.',
                        'username' => 'joseyjara',
                        'tag' => 'Asset Management, CMMS'
                      ],
            '00002'=> [
                        'name' => 'ManagerPlus Cloud',
                        'body' => 'ManagerPlus Cloud solution, Corporate and Small business edition',
                        'username' => 'jjara',
                        'tag' => 'M+ Cloud, CMMS Cloud'
                      ]
        ];

$users = [
            '00001' => [
                        'username' => 'jrosep',
                        'password' => 'abc123',
                        'fullName' => 'Janora Jara'
                        ],
            '00002' => [
                        'username' => 'kbeckstead',
                        'password' => 'asdf123',
                        'fullName' => 'Kris Beckstead'
                        ]
        ];

 $app->get('/notes', function() use ($notes) {

     return new Response(json_encode($notes), 200);
 });

 /*$app->get('/{stockcode}', function (Silex\Application $app, $stockcode) use ($note) {

     if (!isset($note[$stockcode])) {
         $app->abort(404, "Stockcode {$stockcode} does not exist.");
     }
     return json_encode($note[$stockcode]);
 });*/

 $app->run();