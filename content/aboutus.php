<?php

$root = "../";

include_once "../components/functions.php";
include_once findPath($root, "vars.php");

$page["pageName"] = $page["companyName"] . " • Qui sommes-nous ?";
$page["pageRef"] = "contact";

include_once findPath($root, "head.php")
?>

<body>
	<?php include_once findPath($root, "navbar.php") ?>
	<header>
		
	</header>
	<main></main>
	<?php include_once findPath($root, "footer.php") ?>
	<?php include_once findPath($root, "jsDocs.php") ?>
</body>