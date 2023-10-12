<nav class="ordi">
	<div class="logo">
		<a href="<?php echo findPath($root, "home.php") ?>"><img src="assets/logo.png" alt="logo"></a>
	</div>
	<ul class="menu">
		<li><a href="<?php echo findPath($root, "home.php") ?>">Accueil</a></li>
		<li><a href="<?php echo findPath($root, "nos_projets") ?>">Nos modèles de maisons</a></li>
		<li><a href="<?php echo findPath($root, "about_us") ?>">Qui sommes nous ?</a></li>
		<li><a href="<?php echo findPath($root, "contact") ?>">Contacter</a></li>
		<li><a href="<?php echo findPath($root, "login") ?>">Mon compte</a></li>
	</ul>
</nav>

<nav class="mobile">
	<div class="logo">
		<a href="<?php echo findPath($root, "home.php") ?>"><img src="assets/logo.png" alt="logo"></a>
	</div>
	<button class="menu">
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
	</button>
	<div class="menu">
		<ul class="menu-mobile">
			<li><a href="<?php echo findPath($root, "home.php") ?>">Accueil</a></li>
			<li><a href="<?php echo findPath($root, "nos_projets") ?>">Nos modèles de maisons</a></li>
			<li><a href="<?php echo findPath($root, "about_us") ?>">Qui sommes nous ?</a></li>
			<li><a href="<?php echo findPath($root, "contact") ?>">Contacter</a></li>
			<li><a href="<?php echo findPath($root, "login") ?>">Mon compte</a></li>
		</ul>
	</div>
</nav>