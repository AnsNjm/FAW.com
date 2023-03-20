<?php
session_start();
if(isset($_GET["refuser"])){
    $id = $_SESSION["id_candidat"];
    $offre = $_GET["refuser"];
    require_once 'database_connect.inc.php';
    $sql = "DELETE FROM `offres_recus` WHERE id_offre = '$offre';";
    $sth = $cnx->query($sql);
    if($sth){
        header("location: ../profil_candidat.php?id=$id");
    }
    else{
        echo "Operation échoué";
    }
}
