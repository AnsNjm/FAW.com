<?php
include "link1.php";
include_once "includes/database_connect.inc.php";

?>
<title>Mon Profile</title>
<?php
include "header.php";
$check = "SELECT `id_cand` FROM `candidats` WHERE `id_cand` = '{$_GET['id']}';";
$exec = $cnx->query($check);
$id = $exec->fetch();
if(!isset($_SESSION["id_recruteur"]) && !isset($_SESSION["id_admin"]) && !isset($_SESSION["user"])){
if($id["id_cand"] == $_SESSION["id_candidat"]){
    $idcd = $id["id_cand"];    
    $self = true;
}
else if(isset($_GET['id'])){
    $idcd = $_GET['id'];
    $self = false;
}}
else {
    $idcd = $_GET['id'];
}
$sql = "SELECT * FROM `candidats` where `Id_cand` = '$idcd';";
$sql2 = "SELECT * FROM `offres`,`offres_recus` where offres.Id_offre = offres_recus.id_offre
         AND offres_recus.id_candidat = '$idcd';";
$sql3 = "SELECT LinkedIn FROM `cv` where `Id_candidat` = '$idcd';";
$sth = $cnx->query($sql);
$sth2 = $cnx->query($sql2);
$sth3 = $cnx->query($sql3);
$result = $sth->fetchAll();
$result2 = $sth2->fetchAll();
$result3 = $sth3->fetch();

$zero = "+212 ";

$sqldb = "SELECT * FROM base_de_donnees where base_de_donnees.Id_candidat = '$idcd';";
$exec = $cnx->query($sqldb);
$db = $exec->fetchAll();
$sqlexp = "SELECT * FROM experiences where experiences.Id_candidat = '$idcd';";
$exec = $cnx->query($sqlexp);
$exp = $exec->fetchAll();
$sqlform = "SELECT * FROM formations where formations.Id_candidat = '$idcd';";
$exec = $cnx->query($sqlform);
$formations = $exec->fetchAll();
$sqlfram = "SELECT * FROM frameworks where frameworks.Id_candidat = '$idcd';";
$exec = $cnx->query($sqlfram);
$framework = $exec->fetchAll();
$sqllangues = "SELECT * FROM langues where langues.Id_candidat = '$idcd';";
$exec = $cnx->query($sqllangues);
$langue = $exec->fetchAll();
$sqlprog = "SELECT * FROM langages_de_programmation where langages_de_programmation.Id_candidat = '$idcd';";
$exec = $cnx->query($sqlprog);
$prog = $exec->fetchAll();
$sqlse = "SELECT * FROM `systeme_d'exploitaion` where `systeme_d'exploitaion`.Id_candidat = '$idcd';";
$exec = $cnx->query($sqlse);
$se = $exec->fetchAll();
$sqlcv = "SELECT * FROM `cv` WHERE Id_candidat = $idcd";
$exec = $cnx->query($sqlcv);
$personal = $exec->fetch();
?>

     <div style="display: flex; align-items: center; background-color: whitesmoke;">
        <h1 id="title">Mon Profile: </h1>
        <div style="position: relative; left: 600px;">
           <a href="contact.php"><i id="icon" style="margin-right: 50px;" class="fa-solid fa-message fa-2x"></i></a> 
           <a href="candidat1.php"><i id="icon" class="fa-solid fa-pencil fa-2x"></i></a>
           <span class="score">Score: <?php echo $personal["Score"] ;?></span>
        </div>
    </div>
     <div class="container">
        <div class="info">
            <h1 id="img_title"><img id="profil_pic" src="<?php echo $personal["Photo"] ;?>" alt="photo"> 
            <?php foreach($result as $row){
                echo $row['Prenom']." ".$row['Nom'] ;
                }?> 
            </h1>
            <ul>
                <li><span class="material-symbols-outlined">
                    call
                    </span><?php  foreach($result as $row){
                    echo  $zero."".$row['Telephone'];
                     }?></li>
                <li><a href=
                    <?php  foreach($result as $row){
                    echo $row['EmailCandidat'];
                     }?>>
                <span class="material-symbols-outlined">
                    alternate_email
                    </span>
                    <?php  foreach($result as $row){
                    echo $row['EmailCandidat'];
                     }?></a>
                </li>
                <li><span class="material-symbols-outlined">
                    home </span>
                    <?php  foreach($result as $row){
                    echo $row['Ville'];
                     }?></li>
                <li><a href="
                    <?php echo $result3['LinkedIn'];?>"
                     ><i id="linkedin" style="margin-right: 15px;" class="fa-brands fa-linkedin"></i>LinkedIn</a></li>
            </ul>
        </div>
        <div id="candidat" class="candidat" style="display:block;">
            <div class="options">
                <div><button class="btn" id="profil">Profil</button></a></div>
                <div><button class="btn" id="offres">Offres</button></div>
            </div>
            <div id="div_profil">
                <h1 class="candidat">Description: </h1>
                <p class="cv"><?php echo $personal["Description"] ?>.</p>
                <h1 class="candidat">Formations: </h1>
                <?php foreach($formations as $formation){?>
                <h2 id="h2" class="candidat"><?php echo $formation["Diplome"];?></h2>
                <li class="cv"><?php echo $formation["Etablissement"];}?>.</li>
                <h1 class="candidat">Competences: </h1>
                <h2 class="candidat"><?php foreach($prog as $progr){ ?></h2>
                <li class="cv"><?php echo $progr["Langage"] ;}?></li>
                <h2 class="candidat">Base de Données: </h2>
                <h2 class="candidat"><?php foreach($db as $datab){ ?></h2>
                <li class="cv"><?php echo $datab["NomBdd"] ;}?></li>
                <h2 class="candidat">Frameworks: </h2>
                <h2 class="candidat"><?php foreach($framework as $fram){ ?></h2>
                <li class="cv"><?php echo $fram["NomFramework"] ;}?></li>
                <h2 class="candidat">Systemes d'exploitation: </h2>
                <h2 class="candidat"><?php foreach($se as $sys){ ?></h2>
                <li class="cv"><?php echo $sys["NomSystemeExploitation"] ;}?></li>
                <h2 class="candidat">Langues: </h2>
                <?php foreach($langue as $lng){?>
                    <li class="cv"><?php echo $lng["Langue"] ;}?></li>

            </div>

            <div id="div_offres">
            <?php foreach($result2 as $row){
                if($self){
                echo"<div class=cd_offre>
                    <h2>".$row['Titre']."</h2>
                    <p>".$row['Description'].".</p>
                    <a href='includes/validerOffre.php?valider=". $row['Id_offre']."><button  name='valider' id='valider'>Valider</button></a>
                    <a href='includes/deleteOffre.php?refuser=".$row['Id_offre']."><button name='refuser' id='refuser'>Refuser</button></a>
                </div>";}}?>
                
        </div>
       
     </div></div>
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
        const btn_offr = document.getElementById("offres")
        const btn_prfl = document.getElementById("profil")
        const prfl = document.getElementById("div_profil")
        const offr = document.getElementById("div_offres")

        btn_offr.addEventListener("click", hide2)
        btn_offr.addEventListener("click", show2)
        btn_prfl.addEventListener("click", show)
        btn_prfl.addEventListener("click", hide)
        function hide2(){
            prfl.style.display = "none"
        }
        function hide(){
            offr.style.display = "none"
        }
        function show(){
            prfl.style.display = "block"
            btn_prfl.style.backgroundColor = "white"
            btn_prfl.style.color = "#45608b"
            btn_offr.style.backgroundColor = "#45608b"
            btn_offr.style.color = "white"
        }
        function show2(){
            offr.style.display = "block"
            btn_offr.style.backgroundColor = "white"
            btn_offr.style.color = "#45608b"
            btn_prfl.style.backgroundColor = "#45608b"
            btn_prfl.style.color = "white"
        }
    </script>

</body>
</html>