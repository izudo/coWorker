<?php
require __DIR__.'/vendor/autoload.php';

$web = new \Workerman\WebServer('http://127.0.0.1:9090');
$web->addRoot('localhost', __DIR__);
\Workerman\Worker::runAll();