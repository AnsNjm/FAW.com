<?php
include "link1.php";
include_once "includes/database_connect.inc.php";
?>
<title>Mon Profile</title>
<?php
include "header.php";
$checkrec = "SELECT id_rec FROM recruteurs where id_rec = '{$_GET['id']}';";
$exec = $cnx->query($checkrec);
$id = $exec->fetch();
$self = "";
if(!isset($_SESSION["id_candidat"]) && !isset($_SESSION["id_admin"]) && !isset($_SESSION["user"])){
    if($id["id_rec"] == $_SESSION["id_recruteur"]){
        $idrec = $id["id_rec"];
        $self = true;    
    }
    else if(isset($_GET['id'])){
    $idrec = $_GET['id'];
    $self = false;
    }}
else {
    $idrec = $_GET['id'];
    
}


$sql = "SELECT * FROM `recruteurs` where `Id_rec` = '$idrec';";
$sth = $cnx->query($sql);
$result = $sth->fetch();

$sql1 = "SELECT * FROM `offres` where `Id_recruteur` = '$idrec';";
$sth1 = $cnx->query($sql1);
$mesoffres = $sth1->fetchAll();

$sql2 = "SELECT * FROM `offres_acceptes`,`offres` where offres.Id_offre = offres_acceptes.id_offre
AND offres_acceptes.id_recruteur = '$idrec';";
$sth2 = $cnx->query($sql2);
$accoffres = $sth2->fetchAll();

$sql3 = "SELECT DISTINCT *  FROM `candidats`, `offres_acceptes` where candidats.id_cand = offres_acceptes.id_candidat;";
$sth3 = $cnx->query($sql3);
$name = $sth3->fetch();
?>
     <h1 id="title">Profil: </h1>
     <div class="rec">
        <div >
           <ul > 
            <li> <h3 ><i class="fa-solid fa-address-card"></i><?php echo $result['Prenom']." ".$result['Nom'] ;?> </h3></li>
            <li><h3 ><i class="fa-solid fa-briefcase"></i><?php echo $result['Poste']; ?> </h3></li>
            <li><h3 ><i class="fa-solid fa-building"></i><?php echo $result['Societe']; ?> </h3></li>
        </div></ul>
        <div >
          <ul> 
            <li><h3 ><a href="<?php echo $result['EmailRecruteur']; ?> " class="rec"><span class="material-symbols-outlined">
                alternate_email
                </span><?php echo $result['EmailRecruteur']; ?> </a></h3></li>
                <li><a href="https://linkedin.com/anassnajam" class="rec"><i  style="margin-right: 15px;" class="fa-brands fa-linkedin"></i>LinkedIn</a></li>
            <li> <h3><span class="material-symbols-outlined">
                call
                </span><?php echo $result['Telephone']; ?> </h3></li>
        </ul>
        </div>
        <div style="position: relative; left: 250px;">
           <a href="contact.php"><i id="icon" style="margin-right: 50px;" class="fa-solid fa-message fa-2x"></i></a> 
           <a href="inscriptionrecruteur.php"><i id="icon" style="margin-right: 50px;"  class="fa-solid fa-pencil fa-2x"></i></a>
           <a href="offre.php"><i id="icon" class="fa-solid fa-plus fa-2x"></i></a>
        </div>
    </div>


     <div class="recruteur">
        <div class="options">
            <div><button class="btn" id="btn_off" >Mes Offres</button></div>
            <div><button class="btn" id="btn_acc" >Offres Acceptés</button></div>
            <div><button class="btn" id="btn_att" >Offres En Attente</button></div>
        </div>

        <div id="mes_offres">
        <?php foreach($mesoffres as $row){ ?>
            <tr>
                <td><h2> <?php echo $row["Titre"];?></h2></td>
            </tr>
            <tr>
                <p><?php echo $row["Description"];?>.</p>
            </tr>
            <?php if($self){ 
         echo "<td><a href='includes/deleteMyOffre.php?refuser=" . $row['Id_offre'] . "'><button id='refuser'>Supprimer</button></a></td>";
                        }?>
                <?php } ?>
        </div>
        <div id="offres_acc">
        <?php foreach($accoffres as $row){ ?>
            <tr>
                <td><h2> <?php echo $row["Titre"];?></h2></td>
            </tr>
            <tr>
                <p><?php echo $row["Description"];?>.</p>
            </tr>
            <tr>
                <a href="profil_candidat.php?id=<?php echo $row['id_candidat'];}?>">
                <p><?php echo $name["Prenom"]." ".$name["Nom"];?></p></a>
            </tr>
            
        </div>

        <div id="offres_att">
        <?php foreach($attoffres as $row){ ?>
            <tr>
                <td><h2> <?php echo $row["Titre"];?></h2></td>
            </tr>
            <tr>
                <p><?php echo $row["Description"];?>.</p>
            </tr>
            <td>
                <button href id="refuser">Supprimer</button>
            </td>
                <?php } ?>
        </div>

     </div>
        
     <footer>
        <br>
        <h3  style=" text-decoration: underline 2px; margin-left: 40px;"><a id="contact" href="contact.html"> Contactez-nous</a></h3>
        <ul type="circle">
            <li class="footer"><span class="material-symbols-outlined">
                alternate_email
                </span> 0612345678</li>
            <li class="footer"><a style="color:  #516286;" href="mail@exemple.com"><span class="sub" ><span class=" material-symbols-outlined">
                call 
                </span> exemple@gmail.com</span> </a></li>
        </ul>
    </footer>
     <script>
        const btn_off = document.getElementById("btn_off")
        const btn_acc = document.getElementById("btn_acc")
        const btn_att = document.getElementById("btn_att")
        const mes_offres = document.getElementById("mes_offres")
        const offres_acc = document.getElementById("offres_acc")
        const offres_att = document.getElementById("offres_att")

        btn_off.addEventListener("click", showme1)
        btn_acc.addEventListener("click", showme2)
        btn_att.addEventListener("click", showme3)

        function showme1(){
            mes_offres.style.display = "block"
            offres_acc.style.display = "none"
            offres_att.style.display = "none"
        }
        function showme2(){
            mes_offres.style.display = "none"
            offres_acc.style.display = "block"
            offres_att.style.display = "none"
        }
        function showme3(){
            mes_offres.style.display = "none";
            offres_acc.style.display = "none";
            offres_att.style.display = "block";
        }

       
    </script>