<?php 

session_start();

	if(!isset($_SESSION['adminlogin'])){
		header("Location: login/login.php");
	}

	if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
		header("Location: login/login.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Morgan Panel</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/fontawesome-all.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="../images/favicon.svg">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark">
    <a href="index.php" class="navbar-brand">Morgan Panel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar6">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-stretch" id="navbar6">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="../">Visitez le site</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="devis.php">Modifier Devis</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?logout=true"> <i class="fas fa-sign-out-alt"></i> Déconnecter</a>
            </li>
        </ul>
    </div>
</nav>
<!-- end of Navbar -->