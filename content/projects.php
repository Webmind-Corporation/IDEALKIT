<?php

$root = "../";

include_once "../components/functions.php";
include_once findPath($root, "vars.php");

$page["pageName"] = $page["companyName"] . " • Nos Maisons";
$page["pageRef"] = "projects";

include_once findPath($root, "head.php")
?>
<body>
	<?php include_once findPath($root, "navbar.php") ?>

</body>