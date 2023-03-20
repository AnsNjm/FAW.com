<?php
session_start();
// si on clique sur se conncter de type submit :
if (isset($_POST["submit"])){
    
    $email = $_POST["email"];
    $password = $_POST["password"];
//connexion :

    require_once 'database_connect.inc.php';

  
//------------------------------------------vérification du comptes s'ils existent déja pour se connecter-----------------------------------------------------


    $sql = "SELECT * FROM `administrateur` where EmailAdmin = '$email' ;";
    $sth = $cnx->query($sql);
    $result = $sth->fetchall();
    $sql1 = "SELECT * FROM `candidats` where EmailCandidat = '$email' ;";
    $sth1 = $cnx->query($sql1);
    $result1 = $sth1->fetchall();
    $sql2 = "SELECT * FROM `recruteurs` where EmailRecruteur = '$email' ;";
    $sth2 = $cnx->query($sql2);
    $result2 = $sth2->fetchall();
    if(!empty($result) || !empty($result1) || !empty($result2)){
    foreach($result2 as $row){

        if( $email == $row["EmailRecruteur"]  && $password == $row["PasswordRecruteur"] ){
            $log = "SELECT id_rec, EmailRecruteur FROM `recruteurs` where EmailRecruteur = '$email';";
            $exec = $cnx->query($log);
            $id = $exec->fetch();
            $_SESSION["id_recruteur"] = $id["id_rec"];
            $_SESSION["email"] = $id["EmailRecruteur"];
            $idrec = $id["id_rec"];
            // si l email et le password existe dans la bdd faw on va inserer ces infos dans count_login:
            if(!empty($email) and !empty($password)){
                $sqlLogin = "INSERT INTO `count_login` (`EmailLogin`, `PsswdLogin`) VALUES ('$email','$password');";
                $sthlogin = $cnx->query($sqlLogin);
                if($sthlogin)
                {  
                   echo '<script>alert("WELCOME Recruteur ");</script>';
                   header("location:../profil_recruteur.php?id=$idrec");
                }
                 else { echo "failed to insert "; exit();}
            
        } }}
        foreach($result1 as $row){
            if( $email == $row["EmailCandidat"] && $password == $row["PasswordCandidat"] ){
            $log = "SELECT id_cand, EmailCandidat FROM `candidats` where EmailCandidat = '$email'";
            $exec = $cnx->query($log);
            $id = $exec->fetch();
            $_SESSION["id_candidat"] = $id["id_cand"];
            $_SESSION["email"] = $id["EmailCandidat"];
            $idcd = $id["id_cand"];
            
            
        // si l email et le password existe dans la bdd faw on va inserer ces infos dans count_login:
            if(!empty($email) and !empty($password)){
                $sqlLogin = "INSERT INTO `count_login` (`EmailLogin`, `PsswdLogin`) VALUES ('$email','$password');";
                $sthlogin = $cnx->query($sqlLogin);
                if($sthlogin)
                {  
                   echo '<script>alert("WELCOME candidat ");</script>';
                   header("location:../profil_candidat.php?id=$idcd");
                }
                 else { echo "failed to insert "; exit();}
            
        }}}
            foreach($result as $row){
            if($email == $row["EmailAdmin"] && $password == $row["PasswordAdmin"]){
            $log = "SELECT id_admin, EmailAdmin FROM `administrateur` where EmailAdmin = '$email'";
            $exec = $cnx->query($log);
            $id = $exec->fetch();
            $_SESSION["id_admin"] = $id["id_admin"];
            $_SESSION["email"] = $id["EmailAdmin"];
            $idadmin = $id["id_admin"];
            if(!empty($email) and !empty($password)){
                $sqlLogin = "INSERT INTO `count_login` (`EmailLogin`, `PsswdLogin`) VALUES ('$email','$password');";
                $sthlogin = $cnx->query($sqlLogin);
                if($sthlogin)
                {  
                   echo '<script>alert("WELCOME candidat ");</script>';
                   header("location:../dashboard.php?id=$idadmin");
                }
                 else { echo "failed to insert "; exit();}
            
        }
        }}

    }
    
    else{
        echo '<script>alert("Vous ne pouvez pas se connecter. <br> Vous n_avez pas un compte. <br >Veuillez s_inscrire. ");</script>';
        header("location:../login.php");
        exit(); 
    }

     }
        




?>