<?php 
 include "includes/database_connect.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="admi.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
</head>
<body>
<!--nav-->
    <div id="list" class="oneline">
        <div class="oneline">
           <div  > <a href="admin.php"><img class="image1" src="logo.jpg" alt="faw"></a></div>
            <div class="FAW" ><h2>Find A Work</h2></div>
        </div>
        <div  class="oneline">
            <div class="A" id="dash"> <a href="#">Dashboard</a></div>
            <div class="A"id="recr"> <a href="#"> Liste de recruteurs</a></div>
            <div class="A"id="cand"> <a href="#"> Liste de candidats</a></div>
            <div class="A"><a href="login.php">Deconnexion</a></div>     
        </div>
        <div  class="oneline">
            <div class="wlcmadmin"  style="color: goldenrod;"><h2>Welcome</h2></div>   <!--<img class="image2" src="image/unive.png" alt="pp">-->
            
       
        </div>
    </div>
 
    <!--dashbard-->

<div id="dsh">
   <div class="Title"><h1>Dashboard</h1></div>
   <div id="Dashboard">
    <div class="DBdiv" > 
    <div id="soustitre"> <h2>Users </h2></div>
    <div id="iconetextnum" class="oneline">  
        <div class="textnum"> <h1> <?php 
                         $sqlRec = $cnx->prepare(" SELECT * FROM `recruteurs`");
                         $sqlRec->execute();
                         $rowRec = $sqlRec->rowCount();
                         $sqlCand = $cnx->prepare(" SELECT * FROM `candidats`");
                         $sqlCand->execute();
                         $rowCand = $sqlCand->rowCount();

                        echo $rowRec+$rowCand;
                         ?>
                         </h1> <h1>total</h1>  </div>
        <div class="iconedsh"> <i class="fas fa-user-alt"></i> </div>
    </div> 
    </div>
    <div class="DBdiv" >
    <div id="soustitre"> <h2>Recruteurs </h2></div>
    <div id="iconetextnum" class="oneline">  
        <div class="textnum"> <h1> <?php 
                              $sqlRec = $cnx->prepare(" SELECT * FROM `recruteurs`");
                              $sqlRec->execute();
                              $rowRec = $sqlRec->rowCount();
                              echo $rowRec;
                               ?>
                               </h1> <h1>total</h1>  </div>
        <div class="iconedsh"> <i class="fas fa-user-tie"></i> </div>
    </div> 
    </div>
    <div class="DBdiv"  > 
    <div id="soustitre"> <h2>Candidats</h2></div>
    <div id="iconetextnum" class="oneline">  
        <div class="textnum"> <h1> <?php 
                              $sqlCand = $cnx->prepare(" SELECT * FROM `candidats`");
                              $sqlCand->execute();
                              $rowCand = $sqlCand->rowCount();
                              echo $rowCand;
                               ?>
            </h1> <h1>total</h1>  </div>
        <div class="iconedsh"> <i class="fas fa-glasses" ></i> </div>
    </div> 
    </div>
    <div class="DBdiv" > 
    <div id="soustitre"> <h2>Admin </h2></div>
    <div id="iconetextnum" class="oneline">  
        <div class="textnum"> <h1> <?php 
                              $sqlAdmin = $cnx->prepare(" SELECT * FROM `administrateur`");
                              $sqlAdmin->execute();
                              $rowAdmin = $sqlAdmin->rowCount();
                              echo $rowAdmin;
        ?></h1> <h1>total</h1>  </div>
        <div class="iconedsh">  <i class="fas fa-bell" ></i> </div>
    </div> 
    </div>
    <div class="DBdiv" >
    <div id="soustitre"> <h2> logging</h2></div>
    <div id="iconetextnum" class="oneline">  
        <div class="textnum"> <h1> <?php 
                              $sqlLog = $cnx->prepare(" SELECT * FROM `count_login`");
                              $sqlLog->execute();
                              $rowLog = $sqlLog->rowCount();
                              echo $rowLog;
                              ?></h1> <h1>total</h1>  </div>
        <div class="iconedsh"> <i class="fas fa-desktop" ></i></div>
    </div> 
    </div>
    <div class="DBdiv" >
    <div id="soustitre"> <h2> offres</h2></div>
    <div id="iconetextnum" class="oneline">  
        <div class="textnum"> <h1> <?php
                              $sqlOfr = $cnx->prepare(" SELECT * FROM `offres`");
                              $sqlOfr->execute();
                              $rowOfr = $sqlOfr->rowCount();
                              echo $rowOfr;
        
        ?></h1> <h1>total</h1>  </div>
        <div class="iconedsh">  <i class="fas fa-briefcase" ></i> </div>
    </div> 
    </div>
   </div>    
</div>

   <!-- comptes recruteurs-->
<div id="rec">
    <div class="Title"><h1>Liste de Recruteurs</h1></div>
    
    <div>
       

         <table class="containTable" border="1"> 
            <tr>
                <th><div>id Reruteurs</div> </th>
                <th><div> Nom </div></th>
                <th><div> prenom </div></th>
                <th><div>Téléphone </div></th>
                <th><div>Societé </div></th>
                <th><div>Ville</div></th>
                <th><div>Email </div></th>
                <th><div class="caseAction">Action</div></th>
            </tr>
            <?php 
       $query = "SELECT * FROM `recruteurs`;";
       $sth1 = $cnx->query($query);
       $result = $sth1->fetchall();
       foreach($result as $row){
          ?> 
         
            <tr>
                <td><div style="background-color: rgb(128, 126, 105);" class="casetable" > 
                <a href='profil_recruteur.php?id=<?php echo $row['Id_rec']; ?>'><?php echo $row['Id_rec']; ?></a></div></td>
                <td><div style="color: black;" class="casetable" > 
                <?php echo $row['Nom']; ?> </div></td>
                <td><div style="color: black;" class="casetable" >
                <?php echo$row['Prenom']; ?> </div></td>
                <td><div style="background-color: rgb(128, 118, 105);"  class="casetable" >
                +212 <?php  echo $row['Telephone']; ?> </div></td>
                <td><div style="color: black;" class="casetable" >
                <?php echo $row['Societe']; ?> </div></td>
                <td><div style="color: black;" class="casetable" > 
                <?php echo $row['Ville']; ?> </div></td>
                <td><div style="color: black;" class="casetable" > 
                <?php echo $row['EmailRecruteur']; ?> </div></td>
                <td>
                 <button  class="delete" > <strong><a href="includes/Deleteboutton.php?del=<?php echo $row['Id_rec']; ?>"> delete </a> </strong> </button>
                </td>
            </tr>";
   <?php } ?> 
         

        </table>
        
    </div>
</div>  

    <!--candidats-->
<div id="Cand">
        <div class="Title"><h1>Liste de Candidats</h1></div>
        
        <div>
             <table class="containTable" border="1">
                <tr>
                    <th><div>  id candidat </th>
                    <th><div> Nom </div></th>
                    <th><div> prenom </div></th>
                    <th><div>Téléphone </div></th>
                    <th><div>Email</div></th>
                    <th><div>Ville </div></th>
                    <th><div>Date de naissance</div></th>
                    <th><div class="caseAction">Action</div></th>
                </tr>
                <?php 
       $query = "SELECT * FROM `candidats`;";
       $sth2 = $cnx->query($query);
       $result = $sth2->fetchall();
       foreach($result as $row){
         ?>
                <tr>
                    <td><div style="background-color: rgb(128, 126, 105);" class="casetable" >
                    <a href='profil_candidat.php?id=<?php echo $row['Id_cand']; ?>'><?php echo $row['Id_cand']; ?></a></div></td>
                    <td><div style="color: black;" class="casetable" >
                    <?php  echo $row['Nom']; ?></div></td>
                    <td><div style="color: black;" class="casetable" >
                    <?php  echo $row['Prenom']; ?> </div></td>
                    <td><div style="background-color: rgb(128, 118, 105);"  class="casetable" >
                    +212 <?php  echo $row['Telephone']; ?></div></td>
                    <td><div style="color: black;" class="casetable" >
                    <?php  echo $row['EmailCandidat']; ?></div></td>
                    <td><div style="color: black;" class="casetable" >
                    <?php  echo $row['Ville']; ?></div></td>
                    <td><div style="background-color: rgb(128, 118, 105);"  class="casetable" >
                    <?php  echo $row['DatedeNaissance']; ?></div></td>
                    <td>
                    <button  class="delete" > <strong><a href="includes/Deleteboutton.php?dell=<?php echo $row['Id_cand']; ?>"> Delete </a> </strong> </button>
                    
                    </td>
                </tr>
     <?php } ?> 
            </table>
        </div>     
</div>  
        <script>
            const dsh = document.getElementById("dsh")
            const rec = document.getElementById("rec")
            const cand = document.getElementById("Cand")
            
            const btn_dash = document.getElementById("dash")
            const btn_rec = document.getElementById("recr")
            const btn_cand = document.getElementById("cand")
            
            btn_dash.addEventListener("click", show)
            btn_rec.addEventListener("click", show2)
            btn_cand.addEventListener("click", show3)
            
            btn_dash.addEventListener("click", hide)
            btn_rec.addEventListener("click", hide2)
            btn_cand.addEventListener("click", hide3)
    
            function show(){
                dsh.style.display = "block"   
            }
            function hide (){
                rec.style.display = "none"
                cand.style.display = "none"
            }
    
            function show2(){
                rec.style.display = "block" 
            }
            function hide2(){
                dsh.style.display = "none"
                cand.style.display = "none"
            }
    
            function show3(){
                cand.style.display = "block"   
            }
            function hide3(){
                dsh.style.display = "none"
                rec.style.display = "none"
            }
    
            
    </script>
</body>
</html>