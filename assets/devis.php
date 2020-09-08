<!-- Header  -->
<?php include_once('sections/header.php'); ?>


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
                        <input type="number" class="form-control" id="num_cv" placeholder="Nombre de chevaux">
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
                        <div class="col">
                            <h6><?php echo $lang['devtrttmo'] ?></h6>
                            <h5 id="price_six_mounth"><?php echo $lang['devdh'] ?></h5>
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
                            <p> <?php echo $lang['devsécé'] ?>               <span>10000 <?php echo $lang['devdhss'] ?></span></p>
                            <p><?php echo $lang['devétic'] ?>           <span>20000 <?php echo $lang['devdhss'] ?></span></p>
                            <p><?php echo $lang['devtion'] ?><span>5000 <?php echo $lang['devdhss'] ?></span></p>
                            <p><?php echo $lang['devcaux'] ?>       <span>1000 <?php echo $lang['devdhss'] ?></span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('sections/footer.php'); ?>