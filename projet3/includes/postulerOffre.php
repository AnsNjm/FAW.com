<?php
session_start();
if(isset ($_GET["postuler"]) && isset($_SESSION["id_candidat"])){
    $id = $_GET["postuler"];
    $candidat = $_SESSION['id_candidat'];
    require_once 'database_connect.inc.php';
    $sql = "SELECT * FROM `Offres` WHERE Id_offre = '$id';";
    $zero = 8;
    $sth = $cnx->query($sql);
    $result = $sth->fetch();
    $sql2 = "INSERT INTO `offres_postules`(`id_offre`, `id_recruteur`, `id_candidat`) VALUES ('{$result['Id_offre']}', '{$result['Id_recruteur']}','$candidat');";
    $sth2 = $cnx->query($sql2);
    if($sth && $sth2){
        echo "Postulation avec succes";
    }
    else{
        echo "Postulation echoué !";
    }
}
else{
    echo "Il faut être un candidat pour postuler à cette offre:";
}