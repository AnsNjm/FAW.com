<?php
session_start();
if (isset($_GET["ajouter"])){
    $id = $_SESSION["id_recruteur"];
    $titre = $_GET["titre"];
    $domaine = $_GET["domaine"];
    $type = $_GET["type"];
    $duree = $_GET["duree"];
    $description = $_GET["description"];
    
    require_once 'database_connect.inc.php';
    if(!empty($titre) || !empty($domaine) || !empty($type) || !empty($duree) || !empty($description)){
    $sql = "INSERT INTO `offres`(`titre`,`domaine`,`type`,`duree`,`description`,`id_recruteur`) VALUES ('$titre','$domaine','$type','$duree','$description','$id') ;";
    $sth = $cnx->query($sql);
    if($sth){
        echo "<p>alert(\"Offre Ajouté\")</p>";
        header("location: ../list_offres.php");
    }
    else{
        echo "<script>alert(\"Quelque chose ne marche pas, veuillez resasir votre offre et ressayer.\")</script>";
        header("location: ../offre.php");
    }
}
}
