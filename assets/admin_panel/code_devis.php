<?php
require_once 'login/config.php';

// Essance Selection
$query = "SELECT * FROM devis_essence_an";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$E_CV_4   = $row['E_CV_4'];
$E_CV_5   = $row['E_CV_5'];
$E_CV_6   = $row['E_CV_6'];
$E_CV_7   = $row['E_CV_7'];
$E_CV_8   = $row['E_CV_8'];
$E_CV_9   = $row['E_CV_9'];
$E_CV_10  = $row['E_CV_10'];
$E_CV_11  = $row['E_CV_11'];


// Diesel Selection 
$query = "SELECT * FROM devis_diesel_an";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$D_CV_4   = $row['D_CV_4'];
$D_CV_5   = $row['D_CV_5'];
$D_CV_6   = $row['D_CV_6'];
$D_CV_7   = $row['D_CV_7'];
$D_CV_8   = $row['D_CV_8'];
$D_CV_9   = $row['D_CV_9'];
$D_CV_10  = $row['D_CV_10'];
$D_CV_11  = $row['D_CV_11'];


// Modification Action
if(isset($_POST['update'])) {
    //Essance
    $E_CV_4   = $_POST['E_CV_4'];
    $E_CV_5   = $_POST['E_CV_5'];
    $E_CV_6   = $_POST['E_CV_6'];
    $E_CV_7   = $_POST['E_CV_7'];
    $E_CV_8   = $_POST['E_CV_8'];
    $E_CV_9   = $_POST['E_CV_9'];
    $E_CV_10  = $_POST['E_CV_10'];
    $E_CV_11  = $_POST['E_CV_11'];
    //Diesel
    $D_CV_4   = $_POST['D_CV_4'];
    $D_CV_5   = $_POST['D_CV_5'];
    $D_CV_6   = $_POST['D_CV_6'];
    $D_CV_7   = $_POST['D_CV_7'];
    $D_CV_8   = $_POST['D_CV_8'];
    $D_CV_9   = $_POST['D_CV_9'];
    $D_CV_10  = $_POST['D_CV_10'];
    $D_CV_11  = $_POST['D_CV_11'];


    $query="UPDATE devis_essence_an SET E_CV_4 ='$E_CV_4', E_CV_5 ='$E_CV_5', E_CV_6 ='$E_CV_6', E_CV_7 ='$E_CV_7', E_CV_8 ='$E_CV_8', E_CV_9 ='$E_CV_9', E_CV_10 ='$E_CV_10', E_CV_11 ='$E_CV_11'";
    $second_query="UPDATE devis_diesel_an SET D_CV_4 ='$D_CV_4', D_CV_5 ='$D_CV_5', D_CV_6 ='$D_CV_6', D_CV_7 ='$D_CV_7', D_CV_8 ='$D_CV_8', D_CV_9 ='$D_CV_9', D_CV_10 ='$D_CV_10', D_CV_11 ='$D_CV_11'";
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $second_query);

    if($result && $result2) {
        echo "<script>alert('Mise à jour Des Données Réussie')</script>";
    }
    else {
        echo "<script>alert('Il y a un problème')</script>";
    }

}

