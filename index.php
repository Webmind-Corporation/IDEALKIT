<?php

$root = "./";

include_once "./components/functions.php";
include_once findPath($root, "vars.php");

$page["pageName"] = $page["companyName"] . " • Home";
$page["pageRef"] = "home";


include_once findPath($root, "head.php")
?>

<body onload="load()">
    <?php include_once findPath($root, "navbar.php") ?>
    <header>
		<div class="header"></div>
		<div class="form">
			<form class="selectZone">
				<div class="filtres">
					<div class="filtre">
						<label for="localisation">Localisation</label>
						<select>
							<option value="">Localisation</option>
							<option value="1">Nantes</option>
						</select>
					</div>
					<div class="filtre">
						<label for="surface">Type de bien</label>
						<select>
							<option value="">Type de bien</option>
							<option value="1">Appartement</option>
							<option value="2">Maison</option>
							<option value="3">Terrain</option>
						</select>
					</div>
					<div class="filtre">
						<label for="price">Prix maximum</label>
						<input type="range" name="price" id="price" min="100000" max="1000000" step="100000">
					</div>
				</div>
				<div class="search">
					<svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M796-121 533-384q-30 26-69.959 40.5T378-329q-108.162 0-183.081-75Q120-479 120-585t75-181q75-75 181.5-75t181 75Q632-691 632-584.85 632-542 618-502q-14 40-42 75l264 262-44 44ZM377-389q81.25 0 138.125-57.5T572-585q0-81-56.875-138.5T377-781q-82.083 0-139.542 57.5Q180-666 180-585t57.458 138.5Q294.917-389 377-389Z"/></svg>
				</div>
			</form>
		</div>
	</header>
</body>