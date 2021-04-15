<?php

require_once '../../vendor/autoload.php';

$server = new \Workerman\Worker('http://0.0.0.0:3335');

$server->onMessage = function ($connection, $request) {



     $a =    include '../example/web/index.html';


    $connection->send($a);
};




\Workerman\Worker::runAll();