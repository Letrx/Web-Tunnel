<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
ini_set("display_erors", 1);
$host="localhost";
$mysqliUsername="amci";
$mysqliPassword="^mXs14h3";
$database="amci";
$mysqli = new mysqli($host,$mysqliUsername,$mysqliPassword,$database);


if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}




?>
