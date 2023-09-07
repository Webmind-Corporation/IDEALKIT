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
	</header>
	<main>
		<div class="featuredHouses">
			<h1 class="titleFeaturedHouses">Nos maisons en kit</h1>
			<p class="descFeaturedHouses">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit consequatur, eius labore ut explicabo nulla, blanditiis odio veniam similique consequuntur rerum. </p>
			<div class="containerFeaturedHouses">
				<div class="house">
					<img src="<?= findPath($root, "house.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">Lorem Ipsum</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">Lorem Ipsum</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">Lorem Ipsum</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">Lorem Ipsum</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">Lorem Ipsum</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">Lorem Ipsum</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">Lorem Ipsum</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">Lorem Ipsum</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include_once findPath($root, "footer.php") ?>
    <?php include_once findPath($root, "jsDocs.php") ?>
</body>