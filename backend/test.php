<?php 

$location = $_POST["localisation"];
if (empty($_POST["type"])) {
	$type = "0";
}
else {
	$type = $_POST["type"];
}
$price = $_POST["prix"];

?>