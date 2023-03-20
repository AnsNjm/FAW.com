<?php 
session_start();

?>
<?php
$_SESSION["nom"] = "Najam ";
$_SESSION["prenom"] = "Anass";
?>
<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <head>
    <title>Profile</title>
    <link rel="stylesheet" href="project3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <style>
        img{
            margin-left: 10%;
            float: left;
            height: 150px;
            width: 150px;
        }
        .link2{
            color:white;
            font-size: 20px;
        }
        .h11{
            color: white;
            margin-left: 50px;
            text-decoration: underline;
        }
        .container{
    display: flex;
    justify-content: space-evenly;
    background-color: red;
    margin-top: 200px;
}
    </style>
    <body>
        <header class="nav">
            <div><img src="faw logo.jpg" alt="logo">
            <div class="list"> 
             <li class="header">
                 <ul class="header"><a class="link" href="TBD">Home</a> </ul>
                 <ul class="header"><a class="link" href="TBD">Contact</a></ul>
                 <ul class="header"><a class="link" href="TBD">Recherche</a></ul>
             </li>
             </div></div>
             
         </header>
         <hr style="color:beige">
         <div class="container">
            <div class="info">
                <h3 style="font-size: 60px; text-align: center;"><?php echo $_SESSION["nom"];echo $_SESSION["prenom"] ; ?></h3>
                    <ul><a class="link2" href="example@gmail.com">example@gmail.com</a></ul>
                    <ul class="link2">0612345678</a></ul>
                    <ul><a class="link2" href='https://linkedin.com'>idLinkedin</a></ul>
            </div>
         <div class="candidat">
            <h1 class="h11">Mon CV</h1>
            <h1 class="h11">Offres</h1>
            
         </div><div><span class="material-symbols-outlined">
            mail
            </span></div></div>
    </body>
</html>