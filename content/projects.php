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

	<form class="selectZone" method="post" action="./backend/test.php">
		<div class="filtres">
			<div class="filtre">
				<input type="text" name="localisation" class="question" id="city" required autocomplete="off" />
				<label for="city"><span>Où souhaitez-vous habiter ?</span></label>
			</div>
			<div class="filtre hidden">
				<select class="minimal" name="type" required>
					<option value="0" disabled selected>Quel type de bien ?</option>
					<option value="1">Appartement</option>
					<option value="2">Maison</option>
					<option value="3">Terrain</option>
				</select>
			</div>
			<div class="filtre hidden">
				<input type="number" name="prix" class="price" id="price" required autocomplete="off" />
				<label for="price"><span>Prix maximun</span></label>
			</div>
		</div>
		<div class="search">
			<svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M686-450H160v-60h526L438-758l42-42 320 320-320 320-42-42 248-248Z"/></svg>
		</div>
	</form>

</body>