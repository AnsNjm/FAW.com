<?php


include "link1.php";
?>
<title>Ajouter une Nouvelle Offre</title>
<?php
include "header.php";
if(isset($_SESSION["id_recruteur"])){
$id = $_SESSION["id_recruteur"];
}
?>

            
         <center><h1 id="h1_offre">Nouvelle Offre</h1></center>
         <form action="includes/addoffer.inc.php?recruteur=<?php echo $id;?>" method="get">
            <div class="offre">

                    <section>
                        <div style="float:left;margin-right:20px;">
                            <label class="offre" for="titre">Titre:</label>
                            <input type="text" class="offre" name="titre">
                        </div>
                        
                        <p >
            <label class="offre" for="Categories">Categories :</label>
            <select name="domaine" id="Categories" class="offre">
                <option value="">choisissez</option>
                <option value="Web_dev">Web dev</option>
                <option value="Appweb_dev">Appweb dev</option>
                <option value="App_mobile">App mobile</option>
            </select>
        
        </p><hr>
                    </section>
                    <section>
                        <div style="float:left;margin-right:20px;">
                            <label class="offre" for="type">Type:</label>
                            <input type="text" class="offre" name="type">
                        </div>
                        <div style="float: left;">
                            <label class="offre" for="duree">Durée;</label>
                            <input type="text" class="offre" name="duree">
                        </div>
                    </section>
                    <div style="float: left;">
                        <label class="offre" for="description">Description:</label>
                        <textarea type="text" id="description" class="offre" name="description"></textarea>
                    </div>

                    

                    <button name="ajouter" id="Ajouter">Ajouter</button>


            </div>
         </form>

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
</html>

