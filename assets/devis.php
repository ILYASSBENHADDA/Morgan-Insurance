<!-- Header  -->
<?php include_once('sections/header.php'); ?>
<?php require_once('admin_panel/code_devis.php'); ?>

<!-- Header Background -->
    <div class="bg-header">
        <div class="heading-txt">
            <h1 class=""><?php echo $lang['devbititt'] ?></h1>
            <h5><?php echo $lang['devsmatitt'] ?></h5>
        </div>
    </div>
<!-- end of Header Background -->

<!-- Devis Calculation -->
<div class="cal-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form>
                    <h2><?php echo $lang['devmidtitt'] ?></h2>
                    <!-- Alert Danger -->
                    <style>#danger-notification { display:none;}</style>
                    <div id="danger-notification" class="alert alert-danger" role="alert"></div>

                    <div class="form-group">
                        <select id ="list_carburant" class="form-control">
                            <option><?php echo $lang['devtyca'] ?></option>
                            <option value="Diesel"><?php echo $lang['devdi'] ?></option>
                            <option value="Essence"><?php echo $lang['devess'] ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="num_cv" placeholder="<?php echo $lang['numcv'] ?>">
                    </div>
                    <button type="button" onclick="myCalc()" class="btn btn-primary"><?php echo $lang['devcalcbut'] ?></button>
                </form>
            </div>
            <div class="col-sm">
                <div class="result-cal">
                    <div class="row dh-value">
                        <div class="col">
                            <h6><?php echo $lang['devtrttan'] ?></h6>
                            <h5 id="price_year"><?php echo $lang['devdh'] ?></h5>
                        </div>
                    </div>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            <?php echo $lang['devresciv'] ?> <span>+</span></a>
                        </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body"><?php echo $lang['devcugo'] ?>
                            <p><?php echo $lang['devpadllp'] ?></p>
                            <p><?php echo $lang['devcapiass'] ?> <span><?php echo $lang['devddhh'] ?></span></p> 
                        </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            <?php echo $lang['devddeerr'] ?> <span>+</span></a>
                        </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body"><?php echo $lang['devggldd'] ?></div>
                        <p><?php echo $lang['devddllp'] ?></p>
                        <p><?php echo $lang['devcapiass'] ?> <span><?php echo $lang['devmoney'] ?></span></p>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            <?php echo $lang['devevca'] ?> <span>+</span></a>
                        </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body"><?php echo $lang['devggrpln'] ?>
                            <p><?php echo $lang['devconcon'] ?></p>
                            <p><?php echo $lang['devdevdev'] ?></p>
                            <p><?php echo $lang['devcatcat'] ?></p>
                        </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                            <?php echo $lang['devpropas'] ?> <span>+</span></a>
                        </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body"><?php echo $lang['devveci'] ?> <br> <br>
                            <p> <?php echo $lang['devsécé'] ?> <span>10000 <?php echo $lang['devdhss'] ?></span></p>
                            <p> <?php echo $lang['devétic'] ?> <span>20000 <?php echo $lang['devdhss'] ?></span></p>
                            <p> <?php echo $lang['devtion'] ?> <span>5000  <?php echo $lang['devdhss'] ?></span></p>
                            <p> <?php echo $lang['devcaux'] ?> <span>1000  <?php echo $lang['devdhss'] ?></span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    /* Calculation Devis */
function myCalc() {
  var num_cv = document.getElementById('num_cv').value;
  var price_year = document.getElementById('price_year');
  var price_six_mounth = document.getElementById('price_six_mounth');

  /* Pour Essence */
      /* 1 ans */
      var E_CV_4    = <?= $E_CV_4; ?>;
      var E_CV_5    = <?= $E_CV_5; ?>;
      var E_CV_6    = <?= $E_CV_6; ?>;
      var E_CV_7    = <?= $E_CV_7; ?>;
      var E_CV_8    = <?= $E_CV_8; ?>;
      var E_CV_9    = <?= $E_CV_9; ?>;
      var E_CV_10   = <?= $E_CV_10; ?>;
      var E_CV_11   = <?= $E_CV_11; ?>;


  /* Pour Diesel */
      /* 1 ans */
      var D_CV_4    = <?= $D_CV_4; ?>;
      var D_CV_5    = <?= $D_CV_5; ?>;
      var D_CV_6    = <?= $D_CV_6; ?>;
      var D_CV_7    = <?= $D_CV_7; ?>;
      var D_CV_8    = <?= $D_CV_8; ?>;
      var D_CV_9    = <?= $D_CV_9; ?>;
      var D_CV_10   = <?= $D_CV_10; ?>;
      var D_CV_11   = <?= $D_CV_11; ?>;


  var selection = document.getElementById('list_carburant');
  var carburant = selection.options[selection.selectedIndex].text;

  var dangerAlert = document.getElementById('danger-notification');  

  
  
  // Essence Conditions
    if (carburant == "Essence" && num_cv == 4) {
      price_year.innerHTML = E_CV_4 +" Dhs"
    }

    else if (carburant == "Essence" && num_cv == 5) {
      price_year.innerHTML = E_CV_5 +" Dhs"
    }

    else if (carburant == "Essence" && num_cv == 6) {
      price_year.innerHTML = E_CV_6 +" Dhs"
    }

    else if (carburant == "Essence" && num_cv == 7) {
      price_year.innerHTML = E_CV_7 +" Dhs"
    }

    else if (carburant == "Essence" && num_cv == 8) {
      price_year.innerHTML = E_CV_8 +" Dhs"
    }

    else if (carburant == "Essence" && num_cv == 9) {
      price_year.innerHTML = E_CV_9 +" Dhs"
    }

    else if (carburant == "Essence" && num_cv == 10) {
      price_year.innerHTML = E_CV_10 +" Dhs"
    }

    else if (carburant == "Essence" && num_cv == 11) {
      price_year.innerHTML = E_CV_11 +" Dhs"
    }

  // Diesel Conditions
    if (carburant == "Diesel" && num_cv == 4) {
      price_year.innerHTML = D_CV_4 +" Dhs"
    }

    else if (carburant == "Diesel" && num_cv == 5) {
      price_year.innerHTML = D_CV_5 +" Dhs"
    }

    else if (carburant == "Diesel" && num_cv == 6) {
      price_year.innerHTML = D_CV_6 +" Dhs"
    }

    else if (carburant == "Diesel" && num_cv == 7) {
      price_year.innerHTML = D_CV_7 +" Dhs"
    }

    else if (carburant == "Diesel" && num_cv == 8) {
      price_year.innerHTML = D_CV_8 +" Dhs"
    }

    else if (carburant == "Diesel" && num_cv == 9) {
      price_year.innerHTML = D_CV_9 +" Dhs"
    }

    else if (carburant == "Diesel" && num_cv == 10) {
      price_year.innerHTML = D_CV_10 +" Dhs"
    }

    else if (carburant == "Diesel" && num_cv == 11) {
      price_year.innerHTML = D_CV_11 +" Dhs"
    }

  // Validation
    if (carburant === "-- Type Carburant --") {
        dangerAlert.style.display = 'block';
        dangerAlert.innerHTML = "Choice Le Type Du Carburant!";
        return false;
    }
    
    if (num_cv == "") {
      dangerAlert.style.display = 'block';
      dangerAlert.innerHTML = "Le Champ est Vide, Veuillez Saisir Un Nombre";
      return false;
    }

    if (num_cv < 4 || num_cv > 11 ) {
        dangerAlert.style.display = 'block';
        dangerAlert.innerHTML = "Entrez Un Nombre Supérieur à 4 Ou égal";
        return false;
    }

    dangerAlert.style.display = 'none';
    dangerAlert.innerHTML = "";
    return true;

}
</script>
<?php include_once('sections/footer.php'); ?>