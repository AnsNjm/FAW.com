<?php
session_start();
if(isset($_GET["valider"])){
    $id = $_SESSION["id_candidat"];
    $offre = $_GET["valider"];
    require_once 'database_connect.inc.php';
    $sql = "SELECT * FROM `Offres` WHERE Id_offre = '$offre';";
    $zero = 8;
    $sth = $cnx->query($sql);
    $result = $sth->fetch();
    $sql2 = "INSERT INTO `offres_acceptes`(`id_offre`, `id_recruteur`, `id_candidat`) VALUES ('{$result['Id_offre']}', '{$result['Id_recruteur']}','$zero');";
    $sth2 = $cnx->query($sql2);
    $sql3 = "DELETE FROM `offres_recus` WHERE id_offre = '$offre';";
    $sth3 = $cnx->query($sql3);
    if($sth && $sth2 && $sth3){
        unset($_GET["id"]);
        header("location: ../profil_candidat.php?id=$id");
    }
    else{
        echo "Operation échoué";
    }
}
