<!-- Header -->
<?php include_once('sections/header.php'); ?>

<!-- Slider -->
<div id="carouselExampleControls" class="carousel slide slide-header" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide-img.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1><?php echo $lang['hometitle'] ?></h1>
        <p></p>
        <div class="btn-div">
          <a class="btn-mode-one" href="services.php"><?php echo $lang['homepi'] ?></a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide-img-02.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1><?php echo $lang['hometvda'] ?></h1>
        <p></p>
        <div class="btn-div">
          <a class="btn-mode-one" href="devis.php"><?php echo $lang['homecvd'] ?></a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide-img.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1><?php echo $lang['hometitle'] ?></h1>
        <p></p>
        <div class="btn-div">
          <a class="btn-mode-one" href="#"><?php echo $lang['homepi'] ?></a>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"><?php echo $lang['homepre'] ?></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"><?php echo $lang['homenex'] ?></span>
  </a>
</div>
<!-- end of Slider -->

<!-- Partner -->
<div class="partners">
  <div class="container">
    <div class="col-lg-12">
      <h2><?php echo $lang['hometpart'] ?></h2>
      <hr class="line-heading">
    </div>
    <div class="row">
      <div class="col-sm">
        <img src="images/wafa-ima-assurence-logo.png" alt="" width="218px">
      </div>
      <div class="col-sm">
      <img src="images/wafa-assurence-logo.png" alt="" width="179px">
      </div>
      <div class="col-sm">
      <img src="images/cat-assurence-logo.png" alt="" width="330px">
      </div>
    </div>
  </div>
</div>
<!-- end of Partner -->

<!-- Nos services -->
<section class="pt-5 pb-5 services">
  <div class="container">
    <div class="row">
    <div class="col-lg-12">
      <h2><?php echo $lang['homenstit'] ?></h2>
      <hr class="line-heading">
    </div>
        <div class="col-6">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/heart.svg">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $lang['hometdam'] ?></h4>
                                        <p class="card-text"><?php echo $lang['hometdamp'] ?></p>
                                        <div class="btn-div">
                                          <a class="btn-mode-one" href="services.php#S1"><?php echo $lang['homeespbut'] ?></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/car.svg">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $lang['hometdi'] ?></h4>
                                        <p class="card-text"><?php echo $lang['hometdip'] ?></p>
                                        <div class="btn-div">
                                          <a class="btn-mode-one" href="services.php#S2"><?php echo $lang['homeespbut'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/heart.svg">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $lang['homepdf'] ?></h4>
                                        <p class="card-text"><?php echo $lang['homepdfp'] ?></p>
                                        <div class="btn-div">
                                          <a class="btn-mode-one" href="services.php#S3"><?php echo $lang['homeespbut'] ?></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/helmet.svg">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $lang['homepdva'] ?></h4>
                                        <p class="card-text"><?php echo $lang['homepdvap'] ?></p>
                                        <div class="btn-div">
                                          <a class="btn-mode-one" href="services.php#S4"><?php echo $lang['homeespbut'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/taxi.svg">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $lang['homepdet'] ?></h4>
                                        <p class="card-text"><?php echo $lang['homepdetp'] ?></p>
                                        <div class="btn-div">
                                          <a class="btn-mode-one" href="services.php#S5"><?php echo $lang['homeespbut'] ?></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/motorcycle.svg">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $lang['homeadbdvc'] ?></h4>
                                        <p class="card-text"><?php echo $lang['homeadbdvc'] ?></p>
                                        <div class="btn-div">
                                          <a class="btn-mode-one" href="services.php#S6"><?php echo $lang['homeespbut'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/taxi.svg">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $lang['homepeedesds'] ?></h4>
                                        <p class="card-text"><?php echo $lang['homepeedesdsp'] ?></p>
                                        <div class="btn-div">
                                          <a class="btn-mode-one" href="services.php#S7"><?php echo $lang['homeespbut'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- end of Nos services -->

<!-- Transfer and Payment -->
<div class="tp-section">
  <div class="container">
    <div class="col-lg-12">
      <h2><?php echo $lang['hometeptitle'] ?></h2>
      <hr class="line-heading">
    </div>
    <div class="row">
    <div class="col-sm-4">
      <img src="images/banner-bg.svg" alt="">
    </div>
      <div class="col-sm-8">
        <ul>
          <li><i class="fas fa-square"></i><?php echo $lang['hometeppat'] ?></li>
          <li><i class="fas fa-square"></i><?php echo $lang['hometeppaad'] ?></li>
          <li><i class="fas fa-square"></i><?php echo $lang['hometeppape'] ?></li>
          <li><i class="fas fa-square"></i><?php echo $lang['hometeppapd'] ?></li>
        </ul>
        <div class="btn-div">
          <a class="btn-mode-one" href="services.php"><?php echo $lang['homepdibut'] ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end of Transfer and Payment -->

<!-- Contact -->
<div class="contact">
  <div class="container">
    <div class="col-lg-12">
      <h2><?php echo $lang['hometepcn'] ?></h2>
      <hr class="line-heading">
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center p-resize mb-5"><?php echo $lang['hometepcnp'] ?></p>
        <div class="btn-div">
          <a class="btn-mode-one" href="contact.php"><?php echo $lang['hometepcn'] ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end of Contact -->

<!-- Footer -->
<?php include_once('sections/footer.php'); ?>