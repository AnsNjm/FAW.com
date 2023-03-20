<?php
session_start();
if(isset($_POST["continuer"])){

    $prenom = $_POST["Prenom"];
    $nom = $_POST["Nom"];
    $email = $_POST["email"];
    $telephone = $_POST["Telephone"];
    $ville = $_POST["Ville"];
    $date = $_POST["date"];
    $password = $_POST["password"];

    require_once 'database_connect.inc.php';
    
    $checkEmail = "SELECT * FROM `candidats` where `EmailCandidat` ='$email'";
    $checkEmailExecute = $cnx->query($checkEmail);
    $checkEmailResult = $checkEmailExecute->fetchAll();
    if(!empty($checkEmailResult)){
        echo "<p>Email dejà utilisé.</p>";
        header("location: ../inscriptionCandidat.php");
    }
    else{
    if(!empty($prenom) || !empty($nom) || !empty($email) || !empty($telephone) || !empty($ville) || !empty($date) || !empty($password)){
    $sql = "INSERT INTO `candidats`(`prenom`,`nom`,`EmailCandidat`,`telephone`,`ville`,`datedenaissance`,`Passwordcandidat`) VALUES ('$prenom','$nom','$email','$telephone','$ville','$date','$password');";
    $sth = $cnx->query($sql);
    if($sth){
            $sql1 = "SELECT id_cand FROM `candidats` where `EmailCandidat` = '$email';";
            $sth1 = $cnx->query($sql1);
            $result = $sth1->fetch();
            $_SESSION['id_candidat'] = $result["id_cand"];
            echo $_SESSION["id_candidat"];
            header("location: ../candidat1.php");
        
    }
    else{
        $msg = "<p>Reesayer votre inscription</p>";
        echo $msg;
        header("location: ../principale.php");
    }
}}}
?>