<?php
session_start();
?>
    <title>Se Connecter</title>
</head>
<body>
    <!-- HEADER-->
    <nav 
    class="navbar navbar-expand-sm" 
    style="width:100%;background-color:#A5ABBD;border-bottom-left-radius:10px;border-bottom-right-radius: 10px;box-shadow: 5px 3px 10px black;margin-bottom: 20px;">
       <a href="#"><img
       id="logo" 
       src="logo.jpg" 
       alt="logo"
       width="50px" height="50px"
       class="d-inline-block align-top"/></a>
       <a 
       href="#"
       class="navbar-brand mb-0 h1"
       style="font-size: 30px; font-weight: 900; font-family:Georgia, 'Times New Roman', Times, serif;; color: #516286;margin-left: 20px;margin-right: 20px;"> 
       Find a Work
      </a>
      <div class="collapse navbar-collapse">
       <ul class="navbar-nav">
           <li class="nav-item active">
               <a href="index.php" class="nav-link navOptions">Home</a>
           </li>
           <?php if(isset($_SESSION["id_candidat"]) || isset($_SESSION["id_recruteur"])) echo"
           <li class='nav-item active navOptions'>
               <a href='contact.php' class='nav-link navOptions'>Contact</a>
           </li>"?>

<?php 
if(isset($_SESSION["id_candidat"]) || isset($_SESSION["id_recruteur"])){
    echo "<li class='nav-item'><a class='nav-link navOptions' href='";
    if(isset($_SESSION["id_candidat"])){
        echo "profil_candidat.php?id=".$_SESSION["id_candidat"];
    }
    else if(isset($_SESSION["id_recruteur"])){
        echo "profil_recruteur.php?id=".$_SESSION["id_recruteur"];
    }
    else {
        echo "dashboard.php?id=".$_SESSION["id_recruteur"];
    }
    echo "'>Profile</a></li>";
}
?>

           <?php 
                if(isset($_SESSION["id_candidat"]) || isset($_SESSION["id_recruteur"])) {
                    echo "<li class='nav-item'><a class='nav-link navOptions' href='"?>
                    <?php if(isset($_SESSION["id_candidat"])){
                        echo "profil_candidat.php?id=".$_SESSION["id_candidat"];
                    }
                    else if(isset($_SESSION["id_recruteur"])){
                        echo "profil_recruteur.php?id=".$_SESSION["id_recruteur"];
                    }
                    else {
                        echo "dashboard.php?id=".$_SESSION["id_recruteur"];
                    }
                    echo ">Profile</a></li>";
                }
                ?>
           <li class="nav-item active navOptions">
               <a href="list_offres.php" class="nav-link navOptions">Offres</a>
           </li>
           <li class="nav-item active navOptions">
               <a href="list_candidats.php" class="nav-link navOptions">Candidats</a>
           </li>
           <?php if(isset($_SESSION["id_candidat"]) || isset($_SESSION["id_recruteur"])|| isset($_SESSION["id_admin"])) echo"
           <li class='nav-item active navOptions '>
           <a href='includes/logout.php' class='nav-link navOptions fa-lg sign-out'><i class='fa-solid fa-power-off'></i></a>
           </li>"?>
           
        </ul>
      </div>
    </nav>
   