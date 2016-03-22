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
		$dbh = $connection->prepare("SELECT * FROM inmuebles WHERE curdate() - created_at < 60 LIMIT 8");
		$count = $connection->prepare("SELECT COUNT(*) FROM inmuebles WHERE curdate() - created_at < 60");
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

$app->get('/lista', function () use ($app){
    try{
		$connection = getConnection();
		$dbh = $connection->prepare("SELECT * FROM inmuebles WHERE curdate() - created_at < 60");
		$dbh->execute();
		$inmuebles = $dbh->fetchAll();
		$connection = null;
    	$app->render('lista.php', array('inmuebles'=> $inmuebles));
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
});

$app->get('/lista_todo', function () use ($app){
    try{
		$connection = getConnection();
		$dbh = $connection->prepare("SELECT * FROM inmuebles");
		$dbh->execute();
		$inmuebles = $dbh->fetchAll();
		$connection = null;
    	$app->render('lista.php', array('inmuebles'=> $inmuebles));
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
});

$app->get('/inmobiliaria', function () use ($app){
    try{
		$connection = getConnection();
		$dbh = $connection->prepare("SELECT * FROM inmuebles WHERE tipo_in='Terreno' OR tipo_in='Casa' OR tipo_in='Departamento' OR tipo_in='Local Comercial'");
		$dbh->execute();
		$inmuebles = $dbh->fetchAll();
		$connection = null;
    	$app->render('lista.php', array('inmuebles'=> $inmuebles));
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
});

$app->get('/vatodo', function () use ($app){
    try{
		$connection = getConnection();
		$dbh = $connection->prepare("SELECT * FROM inmuebles WHERE tipo='Venta' OR tipo='Alquiler'");
		$dbh->execute();
		$inmuebles = $dbh->fetchAll();
		$connection = null;
    	$app->render('lista.php', array('inmuebles'=> $inmuebles));
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
