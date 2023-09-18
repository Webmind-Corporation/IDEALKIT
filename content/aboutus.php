<?php

$root = "../";

include_once "../components/functions.php";
include_once findPath($root, "vars.php");

$page["pageName"] = $page["companyName"] . " • Qui sommes-nous ?";
$page["pageRef"] = "aboutus";

include_once findPath($root, "head.php")
?>

<body>
	<?php include_once findPath($root, "navbar.php") ?>
	<header>
        <div class="outerContentHeader">
            <div class="innerHeader">
                <h1 class="heroTitle">Rencontrez-nous ! <br><span>IDÉALKIT</span></h1>
                <p class="heroDesc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quas saepe quidem. Qui consequatur aspernatur cum reprehenderit. Commodi, id. Explicabo facilis accusamus laborum ad quod optio aut dolorem perferendis commodi.</p>
                <form action="#" method="post">
                    <input type="email" name="email" id="email" placeholder="Votre adresse e-mail">
                    <button type="submit">Commencer</button>
                </form>
            </div>
        </div>
	</header>
	<main>
        <div class="ourTeam">
            <div class="headSection">
                <h2 class="teamTitle">Notre équipe</h2>
                <p class="teamDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo qui repellat praesentium, dolorum at quidem? Dolor nesciunt ut tempora ex inventore!</p>
                <div class="teamButtons">
                    <button class="secondary">En savoir plus</button><button class="primary">Prendre RDV</button>
                </div>
            </div>
            <div class="containerTeam">
                <div class="mate">
                    <div class="containerPP"><img src="<?= findPath($root, "pp.webp") ?>" alt="profile picture of Sonia Madoulé"></div>
                    <div class="bottomContent">
                        <p class="mateName">Sonia Madoulé</p>
                        <p class="mateJob">Expert Comptable</p>
                    </div>
                </div>
                <div class="mate">
                    <div class="containerPP"><img src="<?= findPath($root, "pp.webp") ?>" alt="profile picture of Sonia Madoulé"></div>
                    <div class="bottomContent">
                        <p class="mateName">Sonia Madoulé</p>
                        <p class="mateJob">Expert Comptable</p>
                    </div>
                </div>
                <div class="mate">
                    <div class="containerPP"><img src="<?= findPath($root, "pp.webp") ?>" alt="profile picture of Sonia Madoulé"></div>
                    <div class="bottomContent">
                        <p class="mateName">Sonia Madoulé</p>
                        <p class="mateJob">Expert Comptable</p>
                    </div>
                </div>
                <div class="mate">
                    <div class="containerPP"><img src="<?= findPath($root, "pp.webp") ?>" alt="profile picture of Sonia Madoulé"></div>
                    <div class="bottomContent">
                        <p class="mateName">Sonia Madoulé</p>
                        <p class="mateJob">Expert Comptable</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
	<?php include_once findPath($root, "footer.php") ?>
	<?php include_once findPath($root, "jsDocs.php") ?>
</body>