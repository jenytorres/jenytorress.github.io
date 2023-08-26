<?php
$dbhost = "BD/querubin.sql";
$dbuser = "root";
$dbpass = "";
$dbname = "querubin";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

?>
