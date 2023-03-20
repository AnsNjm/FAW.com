<?php
if(isset($_POST["soumission"])){

    $prenom = $_POST["Prenom"];
    $nom = $_POST["Nom"];
    $email = $_POST["email"];
    $telephone = $_POST["Telephone"];
    $ville = $_POST["Ville"];
    $date = $_POST["date"];
    $password = $_POST["password"];

    require_once 'database_connect.inc.php';
    if(!empty($prenom) || !empty($nom) || !empty($email) || !empty($telephone) || !empty($ville) || !empty($date) || !empty($password)){
    $sql = "INSERT INTO `candidats`(`prenom`,`nom`,`email`,`telephone`,`ville`,`datedenaissance`,`passwordcandidat`) VALUES ('$prenom','$nom','$email','$telephone','$ville','$date','$password');";
    $sth = $cnx->query($sql);
    if($sth){
        $msg = "<script>alert(\"Votre inscription a été effecuté avec succes.\")</script>";
        echo $msg;
        header("location: ../candidat1.php");
    }
    else{
        $msg = "<p>Reesayer votre inscription</p>";
        echo $msg;
        header("location: ../principale.php");
    }
}}
?>