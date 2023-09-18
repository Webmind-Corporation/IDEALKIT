<?php

$root = "../";

include_once "../components/functions.php";
include_once findPath($root, "vars.php");

$page["pageName"] = $page["companyName"] . " • Se connecter";
$page["pageRef"] = "login";


include_once findPath($root, "head.php")
?>

<body>
	<?php include_once findPath($root, "navbar.php") ?>
	<header>
		
	</header>
	<?php include_once findPath($root, "footer.php") ?>
    <?php include_once findPath($root, "jsDocs.php") ?>
</body>