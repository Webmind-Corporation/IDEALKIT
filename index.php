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
		<div class="innerHeader">
			<div class="containerHeader">
				<div class="leftHeader">
					<h1><span class="firstPart part">
						<span class="firstLetter" id="letter0">Créez</span> l'Extérieur,</span>
						<span class="secondPart part"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M240-200h147.692v-203.077q0-13.731 9.289-23.019 9.288-9.289 23.019-9.289h120q13.731 0 23.019 9.289 9.289 9.288 9.289 23.019V-200H720v-347.692q0-6.154-2.692-11.154-2.693-5-7.308-8.846L494.615-730q-6.154-5.385-14.615-5.385T465.385-730L250-567.692q-4.615 3.846-7.308 8.846-2.692 5-2.692 11.154V-200Zm-40 0v-347.692q0-15.347 6.865-29.077 6.866-13.731 18.981-22.616l215.385-163.077q16.907-12.923 38.646-12.923 21.738 0 38.892 12.923l215.385 163.077q12.115 8.885 18.981 22.616Q760-563.039 760-547.692V-200q0 16.077-11.961 28.039Q736.077-160 720-160H564.615q-13.73 0-23.019-9.288-9.288-9.289-9.288-23.019v-203.077H427.692v203.077q0 13.73-9.288 23.019Q409.115-160 395.385-160H240q-16.077 0-28.039-11.961Q200-183.923 200-200Zm280-268.462Z"/></svg><span class="firstLetter" id="letter1">Imaginez</span> l'Intérieur.</span>
					</h1>
				</div>
				<div class="rightHeader">
					<div class="decorationshape"></div>
					<img data-id="2" src="<?= findPath($root, "header2.webp") ?>" alt="house contruction wood">
				</div>
			</div>
			<div class="searchBar">
				<div class="containerInputs">
					<div class="input">
						<label for="inputCity"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-122.386q-11.692 0-23.384-4.038-11.692-4.039-21.154-12.5-53.845-49.615-100.768-102.191-46.923-52.577-81.577-105.115-34.654-52.539-54.846-104.154-20.193-51.616-20.193-99.693 0-138.46 89.577-224.191Q357.231-859.999 480-859.999t212.345 85.731q89.577 85.731 89.577 224.191 0 48.077-20.193 99.501-20.192 51.423-54.654 104.154-34.461 52.73-81.384 105.115-46.923 52.384-100.769 101.998-9.323 8.462-21.189 12.693-11.867 4.23-23.733 4.23Zm.068-362.999q29.855 0 51.047-21.26 21.192-21.26 21.192-51.115t-21.26-51.047q-21.26-21.192-51.115-21.192t-51.047 21.26q-21.192 21.26-21.192 51.115t21.26 51.047q21.26 21.192 51.115 21.192Z"/></svg> Ville</label>
						<input type="text" name="inputCity" class="searchInput" placeholder="Commune">
					</div>
					<div class="transition"></div>
					<div class="input">
						<label for="project"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M582.306-140.001q-29.826 0-51.066-21.241-21.241-21.24-21.241-51.067v-165.385q0-29.826 21.241-51.066 21.24-21.241 51.066-21.241h165.385q29.827 0 51.067 21.241 21.241 21.24 21.241 51.066v165.385q0 29.827-21.241 51.067-21.24 21.241-51.067 21.241H582.306Zm0-369.998q-29.826 0-51.066-21.241-21.241-21.24-21.241-51.066v-165.385q0-29.827 21.241-51.067 21.24-21.241 51.066-21.241h165.385q29.827 0 51.067 21.241 21.241 21.24 21.241 51.067v165.385q0 29.826-21.241 51.066-21.24 21.241-51.067 21.241H582.306Zm-369.997 0q-29.827 0-51.067-21.241-21.241-21.24-21.241-51.066v-165.385q0-29.827 21.241-51.067 21.24-21.241 51.067-21.241h165.385q29.826 0 51.066 21.241 21.241 21.24 21.241 51.067v165.385q0 29.826-21.241 51.066-21.24 21.241-51.066 21.241H212.309Zm0 369.998q-29.827 0-51.067-21.241-21.241-21.24-21.241-51.067v-165.385q0-29.826 21.241-51.066 21.24-21.241 51.067-21.241h165.385q29.826 0 51.066 21.241 21.241 21.24 21.241 51.066v165.385q0 29.827-21.241 51.067-21.24 21.241-51.066 21.241H212.309Z"/></svg> Projet</label>
						<select name="project" id="project">
							<option class="first" value="default">Selectionner</option>
							<option value="onlyHouse">Maison seule</option>
							<option value="landnHouse">Terrain + Maison</option>
						</select>
					</div>
					<div class="transition"></div>
					<div class="input">
						<label for="inputCity"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M549.999-451.539q41.923 0 70.961-29.038 29.038-29.038 29.038-70.961 0-41.922-29.038-70.96-29.038-29.038-70.961-29.038-41.922 0-70.96 29.038-29.038 29.038-29.038 70.96 0 41.923 29.038 70.961 29.038 29.038 70.96 29.038ZM286.154-327.693q-29.826 0-51.067-21.24-21.24-21.24-21.24-51.067v-303.076q0-29.826 21.24-51.067 21.241-21.24 51.067-21.24h527.69q29.827 0 51.067 21.24 21.24 21.241 21.24 51.067V-400q0 29.827-21.24 51.067t-51.067 21.24h-527.69ZM146.156-187.694q-29.827 0-51.067-21.241-21.24-21.24-21.24-51.066v-366.152q0-12.75 8.628-21.374 8.629-8.625 21.384-8.625 12.756 0 21.371 8.625 8.615 8.624 8.615 21.374v366.152q0 4.615 3.847 8.462 3.846 3.846 8.462 3.846h590.765q12.75 0 21.375 8.629 8.625 8.628 8.625 21.384 0 12.755-8.625 21.37-8.625 8.616-21.375 8.616H146.156Zm127.69-455.383q29.923 0 51.115-21.24 21.192-21.241 21.192-51.067h-59.999q-5 0-8.654 3.654t-3.654 8.654v59.999Zm552.307 0v-59.999q0-5-3.654-8.654t-8.655-3.654h-59.998q0 29.923 21.24 51.115 21.24 21.192 51.067 21.192ZM286.154-387.691h59.999q0-29.923-21.24-51.115-21.241-21.193-51.067-21.193V-400q0 5 3.654 8.654 3.654 3.655 8.654 3.655Zm467.692 0h59.998q5.001 0 8.655-3.655 3.654-3.654 3.654-8.654v-59.999q-29.923 0-51.115 21.241-21.192 21.24-21.192 51.067Z"/></svg> Prix max</label>
						<input type="number" name="inputCity" class="searchInput" placeholder="800€">
					</div>
				</div>
				<button class="searchButton"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M380.769-335.386q-102.461 0-173.537-71.076Q136.155-477.539 136.155-580q0-102.461 71.077-173.538 71.076-71.076 173.537-71.076 102.461 0 173.538 71.076Q625.384-682.461 625.384-580q0 42.846-14.385 81.846-14.385 39-38.385 67.846l230.155 230.154q8.307 8.308 8.499 20.885.193 12.576-8.499 21.268-8.693 8.692-21.077 8.692-12.384 0-21.076-8.692L530.461-388.155q-30 24.769-69 38.769t-80.692 14Zm0-59.998q77.308 0 130.962-53.654Q565.385-502.692 565.385-580q0-77.308-53.654-130.962-53.654-53.654-130.962-53.654-77.308 0-130.962 53.654Q196.154-657.308 196.154-580q0 77.308 53.653 130.962 53.654 53.654 130.962 53.654Z"/></svg></button>
			</div>
		</div>
	</header>
	<main>
		<div class="message">
			<div class="videoMessage">
			<iframe width="600" height="380" muted src="https://www.maisons-revea.fr/vendor/templates/maisons-revea/img/po-2023-09-22.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
			</div>
			<div class="rightSection">
				<h1 class="headTitle">Portes ouvertes 22/09 - 23/09</h1>
				<p class="headDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit consequatur, eius labore ut explicabo nulla, blanditiis odio veniam similique consequuntur rerum. </p>
			</div>
		</div>
		<div class="whyUs">
			<div class="headSection">
				<h1 class="headTitle">Pourquoi IDÉALKIT ?</h1>
				<p class="headDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit consequatur, eius labore ut explicabo nulla, blanditiis odio veniam similique consequuntur rerum. </p>
			</div>
			<div class="containerWhy">
				<div class="why">
					<div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M438-351.847 650.153-564l-42.768-42.768L438-437.384l-84.769-84.769-42.768 42.768L438-351.847Zm42 251.076q-129.769-35.384-214.884-152.768Q180.001-370.924 180.001-516v-230.153L480-858.46l299.999 112.307V-516q0 145.076-85.115 262.461Q609.769-136.155 480-100.771Z"/></svg></div>
					<div class="infoContainer">
						<h3 class="infoTitle">Lorem Ipsum</h3>
						<p class="infoDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="why">
					<div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M438-351.847 650.153-564l-42.768-42.768L438-437.384l-84.769-84.769-42.768 42.768L438-351.847Zm42 251.076q-129.769-35.384-214.884-152.768Q180.001-370.924 180.001-516v-230.153L480-858.46l299.999 112.307V-516q0 145.076-85.115 262.461Q609.769-136.155 480-100.771Z"/></svg></div>
					<div class="infoContainer">
						<h3 class="infoTitle">Lorem Ipsum</h3>
						<p class="infoDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="why">
					<div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M438-351.847 650.153-564l-42.768-42.768L438-437.384l-84.769-84.769-42.768 42.768L438-351.847Zm42 251.076q-129.769-35.384-214.884-152.768Q180.001-370.924 180.001-516v-230.153L480-858.46l299.999 112.307V-516q0 145.076-85.115 262.461Q609.769-136.155 480-100.771Z"/></svg></div>
					<div class="infoContainer">
						<h3 class="infoTitle">Lorem Ipsum</h3>
						<p class="infoDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="why">
					<div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M438-351.847 650.153-564l-42.768-42.768L438-437.384l-84.769-84.769-42.768 42.768L438-351.847Zm42 251.076q-129.769-35.384-214.884-152.768Q180.001-370.924 180.001-516v-230.153L480-858.46l299.999 112.307V-516q0 145.076-85.115 262.461Q609.769-136.155 480-100.771Z"/></svg></div>
					<div class="infoContainer">
						<h3 class="infoTitle">Lorem Ipsum</h3>
						<p class="infoDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="contactSection">
			<h2 class="titleContact">Contact</h2>
			<h2 class="labelInputContact">Restons en contact</h2>
			<div class="inputContact">
				<input type="text" placeholder="john.doe@gmail.com">
				<button class="sendContact">Envoyer</button>
			</div>
		</div>
			<div class="featuredHouses">
				<div class="headSection">
					<h1 class="headTitle">Nos maisons en kit</h1>
					<p class="headDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit consequatur, eius labore ut explicabo nulla, blanditiis odio veniam similique consequuntur rerum. </p>
				</div>
				<div class="containerFeaturedHouses">
					<div class="house">
					<img src="<?= findPath($root, "house1.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">PAV 2CH67 GI-AR-T</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house2.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">CONCEPT 24</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house3.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">PAV 2CH67 GI-AR-A</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house4.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">FUSCHIA 3CH94 T</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house2.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">CONCEPT 24</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house4.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">FUSCHIA 3CH94 T</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house1.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">PAV 2CH67 GI-AR-T</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
				<div class="house">
					<img src="<?= findPath($root, "house3.webp") ?>" alt="" class="imgHouse">
					<div class="containerHouseInfos">
						<h3 class="houseTitle">PAV 2CH67 GI-AR-A</h3>
						<p class="houseDesc"></p>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include_once findPath($root, "footer.php") ?>
    <?php include_once findPath($root, "jsDocs.php") ?>
</body>