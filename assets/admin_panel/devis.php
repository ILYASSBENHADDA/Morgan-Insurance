<!-- Header -->
<?php include_once 'sections/header.php';?>
<?php require_once 'code_devis.php';?>


<!-- Infos -->
<div class="devis">
    <form action="" method="post">
        <div class="container my-5">
            <div class="row">
                <div class="col">
                    <!-- Devis Essance 1an -->
                    <h2>Devis Essance 1an (Dhs)</h2>
                    <hr>
                    <div class="form-group">
                        <label for="E_CV_4">Tarif Pour 4 CV</label>
                        <input type="number" class="form-control" id="E_CV_4" name="E_CV_4" value="<?= $E_CV_4 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="E_CV_5">Tarif Pour 5 CV</label>
                        <input type="number" class="form-control" id="E_CV_5" name="E_CV_5" value="<?= $E_CV_5 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="E_CV_6">Tarif Pour 6 CV</label>
                        <input type="number" class="form-control" id="E_CV_6" name="E_CV_6" value="<?= $E_CV_6 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="E_CV_7">Tarif Pour 7 CV</label>
                        <input type="number" class="form-control" id="E_CV_7" name="E_CV_7" value="<?= $E_CV_7 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="E_CV_8">Tarif Pour 8 CV</label>
                        <input type="number" class="form-control" id="E_CV_8" name="E_CV_8" value="<?= $E_CV_8 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="E_CV_9">Tarif Pour 9 CV</label>
                        <input type="number" class="form-control" id="E_CV_9" name="E_CV_9" value="<?= $E_CV_9 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="E_CV_10">Tarif Pour 10 CV</label>
                        <input type="number" class="form-control" id="E_CV_10" name="E_CV_10" value="<?= $E_CV_10 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="E_CV_11">Tarif Pour 11 CV</label>
                        <input type="number" class="form-control" id="E_CV_11" name="E_CV_11" value="<?= $E_CV_11 ?>" required>
                    </div>
                </div>
                <div class="col">
                    <!-- Devis Diesel 1an -->
                    <h2>Devis Diesel 1an (Dhs)</h2>
                    <hr>
                    <div class="form-group">
                        <label for="D_CV_4">Tarif Pour 4 CV</label>
                        <input type="number" class="form-control" id="D_CV_4" name="D_CV_4" value="<?= $D_CV_4 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="D_CV_5">Tarif Pour 5 CV</label>
                        <input type="number" class="form-control" id="D_CV_5" name="D_CV_5" value="<?= $D_CV_5 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="D_CV_6">Tarif Pour 6 CV</label>
                        <input type="number" class="form-control" id="D_CV_6" name="D_CV_6" value="<?= $D_CV_6 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="D_CV_7">Tarif Pour 7 CV</label>
                        <input type="number" class="form-control" id="D_CV_7" name="D_CV_7" value="<?= $D_CV_7 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="D_CV_8">Tarif Pour 8 CV</label>
                        <input type="number" class="form-control" id="D_CV_8" name="D_CV_8" value="<?= $D_CV_8 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="D_CV_9">Tarif Pour 9 CV</label>
                        <input type="number" class="form-control" id="D_CV_9" name="D_CV_9" value="<?= $D_CV_9 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="D_CV_10">Tarif Pour 10 CV</label>
                        <input type="number" class="form-control" id="D_CV_10" name="D_CV_10" value="<?= $D_CV_10 ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="D_CV_11">Tarif Pour 11 CV</label>
                        <input type="number" class="form-control" id="D_CV_11" name="D_CV_11" value="<?= $D_CV_11 ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-submit mt-4 text-center">
                    <button type="submit" name="update" class="btn-ily-mode">Sauvegarder les modifications</button>
            </div>
        </div>
    </form>
</div>

<!-- Footer -->
<?php include_once 'sections/footer.php';?>