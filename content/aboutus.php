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
                <h2 class="headTitle">Notre équipe</h2>
                <p class="headDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo qui repellat praesentium, dolorum at quidem? Dolor nesciunt ut tempora ex inventore!</p>
                <div class="headButtons">
                    <button class="secondary">En savoir plus</button><button class="primary">Prendre RDV</button>
                </div>
            </div>
            <div class="containerSection">
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
        <div class="ourSkills">
            <div class="headSection">
                <h2 class="headTitle">Qu'est ce qu'IDÉALKIT ?</h2>
                <p class="headDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo qui repellat praesentium, dolorum at quidem? Dolor nesciunt ut tempora ex inventore!</p>
                <div class="headButtons">
                    <button class="secondary">En savoir plus</button><button class="primary">Contacter</button>
                </div>
            </div>
            <div class="containerSection">
                <div class="skill">
                    <div class="skillIcon"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M40-240q-17 0-28.5-11.5T0-280v-23q0-44 44-70.5T160-400q13 0 24.5 1t22.5 3q-14 20-20.5 43t-6.5 49v64H40Zm240 0q-17 0-28.5-11.5T240-280v-24q0-65 66.5-105.5T480-450q108 0 174 40.5T720-304v24q0 17-11.5 28.5T680-240H280Zm500 0v-64q0-26-7-49t-20-43q11-2 22.5-3t24.5-1q72 0 116 26.5t44 70.5v23q0 17-11.5 28.5T920-240H780ZM160-440q-33 0-56.5-23.5T80-520q0-33 23.5-56.5T160-600q33 0 56.5 23.5T240-520q0 33-23.5 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-33 23.5-56.5T800-600q33 0 56.5 23.5T880-520q0 33-23.5 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35Z"/></svg></div>
                    <div class="bottomContent">
                        <p class="skillName">Une équipe à taille humaine</p>
                        <p class="skillDesc">Nous sommes une équipe de professionnels de l'immobilier. Notre taille humaine vous permet de connaitre vos interlocuteurs. Nous vous répondons rapidement et sans détours.</p>
                    </div>
                </div>
                <div class="skill">
                    <div class="skillIcon"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m382-354 339-339q12-12 28.5-12t28.5 12q12 12 12 28.5T778-636L410-268q-12 12-28 12t-28-12L182-440q-12-12-11.5-28.5T183-497q12-12 28.5-12t28.5 12l142 143Z"/></svg></div>
                    <div class="bottomContent">
                        <p class="skillName">Des artisans sélectionnés avec soin</p>
                        <p class="skillDesc">Notre réseau d'artisans est issus d'une sélection avisée et méticuleuse. Nous choisissons pour vous des artisans que nous connaissons pour leur savoir-faire et leur fiabilité.</p>
                    </div>
                </div>
                <div class="skill">
                    <div class="skillIcon"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M600-120q-118 0-210-67T260-360H160q-17 0-28.5-11.5T120-400q0-17 11.5-28.5T160-440h82q-2-11-2-20v-40q0-9 2-20h-82q-17 0-28.5-11.5T120-560q0-17 11.5-28.5T160-600h100q38-106 130-173t210-67q57 0 107 16.5t94 45.5q17 11 17.5 31T805-713q-14 14-35 16.5t-39-8.5q-29-17-62.5-26t-68.5-9q-75 0-136.5 38.5T370-600h190q17 0 28.5 11.5T600-560q0 17-11.5 28.5T560-520H344q-2 11-3 20t-1 20q0 11 1 20t3 20h216q17 0 28.5 11.5T600-400q0 17-11.5 28.5T560-360H370q32 63 93.5 101.5T600-220q35 0 68.5-8.5T731-254q18-11 39-9t35 16q14 14 13.5 34T801-182q-44 29-94 45.5T600-120Z"/></svg></div>
                    <div class="bottomContent">
                        <p class="skillName">Des prix négociés au plus juste</p>
                        <p class="skillDesc">Nous négocions chaque année nos prix avec l'ensemble de nos artisans, sans rogner sur la qualité ! Vous êtes assurés d'obtenir une maison avec un rapport qualité/prix excellent.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="steps">
            <div class="headSection">
                <h2 class="headTitle">Quelles sont les étapes ?</h2>
                <p class="headDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo qui repellat praesentium, dolorum at quidem? Dolor nesciunt ut tempora ex inventore!</p>
                <div class="headButtons">
                    <button class="secondary">Comprendre le processus</button>
                </div>
            </div>
            <div class="containerSteps">
                <div class="step">
                    <h3 class="stepTitle">Comprendre votre projet</h3>
                    <p class="stepDesc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam culpa unde nulla porro laborum veritatis quisquam possimus, hic modi? Ipsam fugit beatae eos vel blanditiis eligendi, repellendus dignissimos earum illum.</p>
                </div>
                <div class="step">
                    <h3 class="stepTitle">Rechercher un terrain</h3>
                    <p class="stepDesc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam culpa unde nulla porro laborum veritatis quisquam possimus, hic modi? Ipsam fugit beatae eos vel blanditiis eligendi, repellendus dignissimos earum illum.</p>
                </div>
                <div class="step">
                    <h3 class="stepTitle">Mise en relation financement</h3>
                    <p class="stepDesc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam culpa unde nulla porro laborum veritatis quisquam possimus, hic modi? Ipsam fugit beatae eos vel blanditiis eligendi, repellendus dignissimos earum illum.</p>
                </div>
                <div class="step">
                    <h3 class="stepTitle">Construction de la maison</h3>
                    <p class="stepDesc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam culpa unde nulla porro laborum veritatis quisquam possimus, hic modi? Ipsam fugit beatae eos vel blanditiis eligendi, repellendus dignissimos earum illum.</p>
                </div>
                <div class="step">
                    <h3 class="stepTitle">Réalisez vous mêmes les finitions</h3>
                    <p class="stepDesc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam culpa unde nulla porro laborum veritatis quisquam possimus, hic modi? Ipsam fugit beatae eos vel blanditiis eligendi, repellendus dignissimos earum illum.</p>
                </div>
            </div>
            <button class="primary">Commencer dès maintenant</button>
        </div>
    </main>
	<?php include_once findPath($root, "footer.php") ?>
	<?php include_once findPath($root, "jsDocs.php") ?>
</body>