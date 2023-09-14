<?php

    $root = "./";

    include_once findPath($root, "env.php");

    $page["pageName"] = $page["companyName"] . " • Home";
    $page["pageRef"] = "home";

    include_once findPath($root, "head.php")
?>


<header>
    <div class="leftHeader">
        <h1>Idéalkit<br> la maison<br> en kit</h1>
    </div>
    <div class="rightHeader">
        <img src="<?= findPath($root, "maison.png") ?>" alt="logo">
    </div>
    <div class="floatingBar"></div>
</header>