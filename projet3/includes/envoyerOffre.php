<?php
if(isset ($_GET["envoyer"])){
    $idoffre = $_GET["envoyer"];
    $candidat = $_GET["candidat"];
    require_once 'database_connect.inc.php';
    $sql = "SELECT * FROM `Offres` WHERE Id_offre = '$idoffre';";
    $zero = $_GET["candidat"];
    $sth = $cnx->query($sql);
    $result = $sth->fetch();
    $sql2 = "INSERT INTO `offres_recus`(`id_offre`, `id_recruteur`, `id_candidat`) VALUES ('{$result['Id_offre']}', '{$result['Id_recruteur']}','$zero');";
    $sth2 = $cnx->query($sql2);
    if($sth && $sth2){
        echo "<script>alert('Postulation avec succes')</script>";
        header("location: ../list_candidats.php");
    }
    else{
        echo "Postulation échoué";
    }
}