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
		<!-- <div class="header"></div> -->
		<div class="containerHeader">
			<div class="leftHeader">
				<div class="title">
					<h1>Recherchez votre bien immobilier</h1>
					<h2>Appartement, maison, terrain</h2>
				</div>
			</div>
			<div class="rightHeader">
				<div class="decorationshape"></div>
				<img data-id="2" src="<?= findPath($root, "header2.webp") ?>" alt="house contruction wood">
				<!-- <img data-id="3" src="<?= findPath($root, "header2.webp") ?>" alt="house contruction wood"> -->
			</div>
		</div>
		<form class="selectZone">
			<div class="filtres">
				<div class="filtre">
					<input type="text" name="name" class="question" id="nme" required autocomplete="off" />
					<label for="nme"><span>Où souhaitez-vous habiter ?</span></label>
				</div>
				<div class="filtre hidden">
					<details class="custom-select">
						<summary class="radios">
							<input type="radio" name="item" id="0" title="Type de bien" checked>
							<input type="radio" name="item" id="1" title="Appartement">
							<input type="radio" name="item" id="2" title="Maison">
							<input type="radio" name="item" id="3" title="Terrain">
						</summary>
						<ul class="list">
							<li>
								<label for="1">
									Appartement
									<span></span>
								</label>
							</li>
							<li>
								<label for="2">Maison</label>
							</li>
							<li>
								<label for="3">Terrain</label>
							</li>
						</ul>
					</details>
				</div>
				<div class="filtre hidden">
					<label for="price">Prix maximum</label>
					<input type="number" name="price" id="price">
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