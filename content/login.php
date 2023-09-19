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
		<div class="container">
			<h1 class="title">Mon compte</h1>
			<div class="select">
				<p class="underline">Se connecter</p>
				<p>Créer un compte</p>
			</div>
			<form action="" method="post" class="login">
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Adresse email" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
				</div>
			</form>
			<form action="" method="post" class="register hidden">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Nom" required>
				</div>
				<div class="form-group">
					<input type="text" name="firstname" class="form-control" placeholder="Prénom" required>
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Adresse email" required>
				</div>
				<div class="form-group">
					<input type="tel" name="phone" class="form-control" placeholder="Numéro de téléphone" required>
				</div>
				<div class="form-group">
					<input type="text" name="address" class="form-control" placeholder="Lieu de construction" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
				</div>
			</form>
			<button type="submit">Se Connecter</button>
		</div>
	</header>
	<?php include_once findPath($root, "footer.php") ?>
    <?php include_once findPath($root, "jsDocs.php") ?>
</body>