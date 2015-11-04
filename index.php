<?php
require 'vendor/autoload.php';
$app = new \Slim\Slim();

$app->setName('Not yet');
require 'app/libs/connect.php';
require 'app/routes/api.php';

$app->config(array(
    'debug' => true,
));

$app->view(new \Slim\View());

$app->get('/', function () use ($app){
    $app->render('home.php');
});

$app->get('/aconsejanos', function () use ($app){
    $app->render('aconseja.php');
});

$app->run();
?>