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
    try{
		$connection = getConnection();
		$dbh = $connection->prepare("SELECT * FROM inmuebles WHERE enabled=1 AND curdate() - created_at < 60 LIMIT 8");
		$count = $connection->prepare("SELECT COUNT(*) FROM inmuebles");
		$dbh->execute();
		$count->execute();
		$inmuebles = $dbh->fetchAll();
		$numero = $count->fetch();
		$connection = null;
    	$app->render('inmueble.php', array('inmuebles'=> $inmuebles , 'var'=> $numero[0]));
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
});

$app->get('/aconsejanos', function () use ($app){
    $app->render('aconseja.php');
});

$app->run();
?>
