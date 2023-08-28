<!DOCTYPE html>
<html lang="<?php echo $page["pageLang"] ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta SEO -->
    <meta name="description" content="<?php echo $page["pageDescription"] ?>">
    <meta name="keywords" content="<?php echo $page["pageKeywords"] ?>">
    <meta name="author" content="<?php echo $page["pageAuthor"] ?>">

    <title><?php echo $page["pageName"] ?></title>

	<!-- Import Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="icon" href="<?php echo findPath($root, "logo.png") ?>" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo findPath($root, "default.css") ?>">
    <link rel="stylesheet" href="<?php echo findPath($root, $page['pageRef'] . ".css") ?>">

    <link rel="stylesheet" href="<?php echo findPath($root, "responsive.css") ?>">

    <!-- Google tag (gtag.js) -->
    
</head>