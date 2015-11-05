<?php //if(!defined("SPECIALCONSTANT")) die("Acceso denegado");

function getConnection()
{
	try{
		$db_username = "b6a0edcc69e543";
		$db_password = "1fac6bca";
		$connection = new PDO("mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=dbarranca", $db_username, $db_password);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
	return $connection;
}