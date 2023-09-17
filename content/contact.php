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
			<div class="title">
				<h1 class="title">Contact</h1>
			</div>
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
				<button class="buton">Envoyer</button>
			</form>
		</div>
	</header>
	<main></main>
	<?php include_once findPath($root, "footer.php") ?>
	<?php include_once findPath($root, "jsDocs.php") ?>
</body>