<?php
require '../app/libs/connect.php';
$id = $_GET['id'];

$connection = getConnection();
$dbh = $connection->prepare("update inmuebles set votos=votos+1 where id='$id'");
$dbh->execute();
$connection = null;