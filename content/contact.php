<?php

$root = "../";

include_once "../components/functions.php";
include_once findPath($root, "vars.php");

$page["pageName"] = $page["companyName"] . " • Contact";
$page["pageRef"] = "contact";

include_once findPath($root, "head.php")
?>

<body>
	<?php include_once findPath($root, "navbar.php") ?>
	<header>
		<div class="container">
			<h1 class="title">Contact</h1>
			<form action="" method="post">
				<div class="containerForm">
					<div class="form-group">
						<input type="text" name="name" placeholder="Nom" class="form-control" required>
					</div>
					<div class="form-group">
						<input type="text" name="firstName" placeholder="Prénom" class="form-control" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" placeholder="Addresse mail" class="form-control" required>
					</div>
					<div class="form-group">
						<input type="tel" name="phone" placeholder="Numéro de téléphone" class="form-control" required>
					</div>
					<div class="form-group">
						<input type="tel" name="localisation" placeholder="Lieu de construction" class="form-control" required>
					</div>
					<div class="form-group">
						<textarea name="message" placeholder="Message" class="form-control" required></textarea>
					</div>
				</div>
			</form>
		</div>
	</header>
</body>