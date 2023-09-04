<?php

$root = "./";

include_once "./components/functions.php";
include_once findPath($root, "vars.php");

$page["pageName"] = $page["companyName"] . " • Home";
$page["pageRef"] = "home";


include_once findPath($root, "head.php")
?>

<body>
    <?php include_once findPath($root, "navbar.php") ?>
    <header>
		<div class="header"></div>
		<form class="selectZone">
			<div class="filtres">
				<div class="filtre">
					<input type="text" name="name" class="question" id="nme" required autocomplete="off" />
					<label for="nme"><span>Où souhaitez-vous habiter ?</span></label>
				</div>
				<div class="filtre hidden">
					<label for="surface">Type de bien</label>
					<select>
						<option value="0">Type de bien</option>
						<option value="1">Appartement</option>
						<option value="2">Maison</option>
						<option value="3">Terrain</option>
					</select>
				</div>
				<div class="filtre hidden">
					<label for="price">Prix maximum</label>
					<input type="range" name="price" id="price" min="100000" max="1000000" step="100000">
				</div>
			</div>
			<div class="search">
				<svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M686-450H160v-60h526L438-758l42-42 320 320-320 320-42-42 248-248Z"/></svg>
			</div>
		</form>
	</header>
	<?php include_once findPath($root, "footer.php") ?>
    <?php include_once findPath($root, "jsDocs.php") ?>
</body>