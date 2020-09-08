<?php
  include "config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Website Title -->
    <title>Accueil - Morgan Assurance</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
	  <link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.svg">
</head>
<body>

    <!-- Topbar -->
    <section class="topbar-area">
        <ul>
            <li><i class="fas fa-map-marker-alt"></i><?php echo $lang['address'] ?></li>
            <li><i class="fas fa-clock"></i><?php echo $lang['opntim'] ?></li>
        </ul>
        <ul>
            <li><a href="about.php"><?php echo $lang['apdn'] ?></a></li>
            <li><a href="contact.php"><?php echo $lang['cnb'] ?></a></li>
            <li>
                <select onchange="la(this.value)" class="form-control form-control-sm">
                <option disabled selected><?php echo $lang['lang'] ?></option>
                  <option value="?lang=fr">FR</option>
                  <option value="?lang=ar">AR</option>
                </select>
            </li>
        </ul>
    </section>

    <script>
      function la(src) {
        window.location=src;
      }
    </script>
    <!-- end of Topbar -->

    <!-- Header Area -->
    <header class="header-area">
        <div class="container">
                <div class="row">
                    <ul>
                        <li><a href="#"><img class="logo-header" src="images/logo.png" alt=""></a></li>
                    </ul>
                    <ul>
                        <li>
                            <table>
                                  <tr>
                                    <th rowspan="2"><i class="fas fa-phone"></i></th>
                                    <th><?php echo $lang['appn'] ?></th>
                                  </tr>
                                  <tr>
                                    <td>05 24-64-78-08</td>
                                  </tr>
                            </table>
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <th rowspan="2"><i class="fas fa-envelope"></i></th>
                                    <th><?php echo $lang['enum'] ?></th>
                                  </tr>
                                  <tr>
                                    <td>contact@morgan.ma</td>
                                  </tr>
                            </table>
                        </li>
                    </ul>
                </div>                          
        </div>
    </header>
    <!-- end of Header Area -->
    
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><?php echo $lang['tittle'] ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="devis.php"><?php echo $lang['vodevbu'] ?></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $lang['nosserbut'] ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="services.php#S1"><?php echo $lang['listtdam'] ?></a>
                <a class="dropdown-item" href="services.php#S2"><?php echo $lang['listtdi'] ?></a>
                <a class="dropdown-item" href="services.php#S3"><?php echo $lang['listpdf'] ?></a>
                <a class="dropdown-item" href="services.php#S4"><?php echo $lang['listpdva'] ?></a>
                <a class="dropdown-item" href="services.php#S5"><?php echo $lang['listpdet'] ?></a>
                <a class="dropdown-item" href="services.php#S6"><?php echo $lang['listaebdvc'] ?></a>
                <a class="dropdown-item" href="services.php#S7"><?php echo $lang['listpeed'] ?></a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><?php echo $lang['nbcbutt'] ?></a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-map"></i> <?php echo $lang['nbllbutt'] ?> </a>
            </li>
          </ul>
        </div>
      </nav>
    <!-- end of Navbar -->