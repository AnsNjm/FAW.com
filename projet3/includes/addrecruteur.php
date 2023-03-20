<?php
if(isset($_POST["save"])){

    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $ville = $_POST["ville"];
    $societe = $_POST["societe"];
    $password = $_POST["password"];
    $poste = $_POST["fonction"];

    require_once 'database_connect.inc.php';

    $checkEmail = "SELECT * FROM `recruteurs` where `EmailRecruteur` ='$email'";
    $checkEmailExecute = $cnx->query($checkEmail);
    $checkEmailResult = $checkEmailExecute->fetchAll();
    if(!empty($checkEmailResult)){
        
        echo '<script>alert("Email déjà utilisé")</script>';
        
    }
    else{

    if(!empty($prenom) || !empty($nom) || !empty($email) || !empty($telephone) || !empty($ville) || !empty($societe)){
    $sql = "INSERT INTO `recruteurs`(`prenom`,`nom`,`emailrecruteur`,`telephone`,`ville`,`societe`,`passwordrecruteur`,`poste`) VALUES ('$prenom','$nom','$email','$telephone','$ville','$societe','$password','$poste');";
    $sth = $cnx->query($sql);
    if($sth){
        $sql1 = "SELECT id_rec FROM `recruteurs` where `EmailRecruteur` = '$email';";
        $sth1 = $cnx->query($sql1);
        $result = $sth1->fetch();
        session_start();
        $_SESSION['id_recruteur'] = $result["id_rec"];
        $_SESSION["id_recruteur"];
        echo "<p>ADD REC du OUIIII</p>";
        header("location: ../index.php?");
    }
    else{
        
        header("location: ../insciptionrecruteur.php");
    }
}}}
?>