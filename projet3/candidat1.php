<?php

include "links2.php";

?>

        <title>information about ur cv</title>
<?php
include "header2.php";
if(isset($_SESSION["id_candidat"])){
$id_cd = $_SESSION["id_candidat"];}
?><form action="includes/createCV.php" method="post" >
    <div style="background-color:#F5F9FF ;" class="centrer">
        <h1 style="color: black;"><strong>Compléter mon CV</strong></h1>
    </div><br>
     <div style="margin-left: 180px;margin-right: 180px;" class="flexi2" >
         <div class="sizepage" >
             <h2 align="center"><strong>Ma photo</strong></h2><hr>
             <p><label style="margin: 10px;" for="photo"><strong>Joignez votre photo :</strong> </label></p>
             <input style="margin-left: 50px;" type="file" name="photo" accept="image/*" class="text">
         </div>
         <div class="sizepage">
             <h2 align="center"><strong>Mon CV</strong></h2><hr>
             <p><label style="margin: 10px;" for="cv"><strong>Joignez votre CV :</strong></label></p>
             <input style="margin-left: 50px;" type="file" name="cv" id="cv" class="text"><br><br>
         </div>
     </div><br>
     <div style="margin-left: 180px;margin-right: 180px;"  class="sizepage">
        <h2 align="center"><strong>Description</strong></h2><hr>
        <p><h3 style="margin: 10px;"><strong>Description du CV :</strong></h3></p>
        <table class="marg">
            <tr>                
                <td colspan="2">
                 <textarea   name="description_cv" id="description" cols="93" rows="10" placeholder="Saisissez une description detaillee de votre formation"  class="text" ></textarea>
                </td>                                
            </tr>
        </table>
     </div><br>
    
     <div style="margin-left: 180px;margin-right: 180px;"  class="sizepage">
         <h2 align="center"><strong>Mon profil</strong></h2><hr>
         <p><h3 style="margin: 10px;"><strong>Niveau d'études :</strong></h3></p>
        <table id="framework1" style="margin-left: 50px;" >
            <tr>
            <td id="framework1"><input type="radio" name="niveau_etude" value="Qualification avant bac" class="text">Qualification avant bac </td>
            <td id="framework1"><input type="radio" name="niveau_etude" value="Bac" class="text">Bac </td>
            <td id="framework1"><input type="radio" name="niveau_etude" value="Bac+1" class="text">Bac+1</td>
            <td id="framework1"><input type="radio" name="niveau_etude" value="Bac+2" class="text">Bac+2 </td>
            <td id="framework1"><input type="radio" name="niveau_etude" value="Bac+3" class="text">Bac+3</td>
            <td id="framework1"><input type="radio" name="niveau_etude" value="Bac+4" class="text">Bac+4</td>
            <td id="framework1"><input type="radio" name="niveau_etude" value="Bac+5" class="text">Bac+5</td>
        </tr>

        </table><hr>
        <div>
            <p><h3 style="margin: 10px;"><strong>Diplôme :</strong></h3></p>        
            <div width="100%"  >
                <div class="display" style="margin-left: 0px;">
                <p >
                    <label  for="date_debut_mois_annee[]"><h5 >Date de début :</h5></label>
                    <select name="date_debut_mois_D" id="date_debut_mois_D" class="text1" >
                        <option value="">-Mois</option>
                        <option value="Jan">Jan</option>
                        <option value="Fev">Fev</option>
                        <option value="Mar">Mar</option>
                        <option value="Avr">Avr</option>
                        <option value="Mai">Mai</option>
                        <option value="jui">jui</option>
                        <option value="juil">juil</option>
                        <option value="Aou">Aou</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                    </select>
                    <select name="date_debut_annee_D[]"  class="text1">
                        <option value="">-Année</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </p>
                <p >
                    <label for="date_fin_mois_annee"><h5>Date de fin :</h5></label>
                    <select  name="date_fin_mois" id="date_fin_mois_D" class="text1">
                    <option value="">-Mois</option>
                        <option value="Jan">Jan</option>
                        <option value="Fev">Fev</option>
                        <option value="Mar">Mar</option>
                        <option value="Avr">Avr</option>
                        <option value="Mai">Mai</option>
                        <option value="jui">jui</option>
                        <option value="juil">juil</option>
                        <option value="Aou">Aou</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                    </select>
                    <select name="date_fin_annee_D[]" class="text1">
                        <option value="">-Année</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </p>
            </div><br>
            <table class="marg">
                <tr>
                    <td>
                        <input   type="text" name="titre_formation[]"  placeholder="Titre de votre formation" size="41px" maxlength="30" class="text">                            
                    </td>
                    <td>
                        <input type="text" name="Nom_etablissement[]" placeholder="Nom de l'école ou de l'établissement" size="41px" maxlength="30" class="text">
                    </td>
                    <td>
                        <select class="case1" style="width: 105%;height:54px;" name="Ville_D[]" >
                            <option value="">Ville</option>
                            <option value="Berrechid">Berrechid</option>
                            <option value="Casablanca">Casablanca</option>
                            <option value="Salé">Salé</option>
                            <option value="Tanger">Tanger</option>
                            <option value="Fès">Fès</option>
                            <option value="Marrakech">Marrakech</option>
                            <option value="Safi">Safi</option>
                            <option value="Meknès">Meknès</option>
                            <option value="Oujda">Oujda</option>
                            <option value="Rabat">Rabat</option>
                            <option value="Témara">Témara</option>
                            <option value="Agadir">Agadir</option>
                            <option value="Kénitra">Kénitra</option>
                            <option value="Tétouan">Tétouan</option>
                            <option value="Laayoune">Laayoune</option>
                            <option value="Mohammédia">Mohammédia</option>
                            <option value="El Jadida">El Jadida</option>
                            <option value="Khouribga">Khouribga</option>
                            <option value="Béni Mellal">Béni Mellal</option>
                            <option value="Khémisset">Khémisset</option>
                            <option value="Nador">Nador</option>
                            <option value="Taza">Taza</option>
                            <option value="Berkane">Berkane</option>
                            <option value="Settat">Settat</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <input type="button" class="mybox case1" value="+" onclick="addBox1()">
                </tr>
                
            </table><hr>
        </div>
        <div id="hob"></div>
        <div>
            <table>
                <tr>
                    <p><h3 style="margin: 10px;"><strong>Experience :</strong></h3></p>        
                    <div width="100%"  >
                        <div class="display" style="margin-left: 0px;">
                        <p >
                            <label  for="date_debut_mois_annee[]"><h5 >Date de début :</h5></label>
                            <select name="date_debut_mois_E" id="date_debut_mois_E" class="text1" >
                                <option value="">-Mois</option>
                                <option value="Jan">Jan</option>
                                <option value="Fev">Fev</option>
                                <option value="Mar">Mar</option>
                                <option value="Avr">Avr</option>
                                <option value="Mai">Mai</option>
                                <option value="jui">jui</option>
                                <option value="juil">juil</option>
                                <option value="Aou">Aou</option>
                                <option value="Sep">Sep</option>
                                <option value="Oct">Oct</option>
                                <option value="Nov">Nov</option>
                                <option value="Dec">Dec</option>
                            </select>
                            <select name="date_debut_annee_E[]" id="date_debut_annee_E" class="text1">
                                <option value="">-Année</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                        </p>
                        <p >
                            <label for="date_fin_mois_annee"><h5>Date de fin :</h5></label>
                            <select  name="date_fin_mois_E" id="date_fin_mois_E" class="text1">
                                <option value="">-Mois</option>
                                <option value="Jan">Jan</option>
                                <option value="Fev">Fev</option>
                                <option value="Mar">Mar</option>
                                <option value="Avr">Avr</option>
                                <option value="Mai">Mai</option>
                                <option value="jui">jui</option>
                                <option value="juil">juil</option>
                                <option value="Aou">Aou</option>
                                <option value="Sep">Sep</option>
                                <option value="Oct">Oct</option>
                                <option value="Nov">Nov</option>
                                <option value="Dec">Dec</option>
                            </select>
                            <select name="date_fin_annee_E[]" id="date_fin_annee_E" class="text1">
                                <option value="">-Année</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                        </p>
                    </div><br>
                    <table class="marg">
                        <tr>
                            <td>
                                <input   type="text" name="titre_experience[]" id="titre_experience" placeholder="Titre d'expérience" size="41px" maxlength="30" class="text">                            
                            </td>
                            <td>
                                <input type="text" id="Nom_societe" name="Nom_societe[]" placeholder="Le nom de société" size="41px" maxlength="30" class="text">
                            </td>
                            <td>
                                <select class="case1" style="width: 105%;height:54px;" name="Ville_E[]" id="Ville">
                                    <option value="">Ville</option>
                                    <option value="Berrechid">Berrechid</option>
                                    <option value="Casablanca">Casablanca</option>
                                    <option value="Salé">Salé</option>
                                    <option value="Tanger">Tanger</option>
                                    <option value="Fès">Fès</option>
                                    <option value="Marrakech">Marrakech</option>
                                    <option value="Safi">Safi</option>
                                    <option value="Meknès">Meknès</option>
                                    <option value="Oujda">Oujda</option>
                                    <option value="Rabat">Rabat</option>
                                    <option value="Témara">Témara</option>
                                    <option value="Agadir">Agadir</option>
                                    <option value="Kénitra">Kénitra</option>
                                    <option value="Tétouan">Tétouan</option>
                                    <option value="Laayoune">Laayoune</option>
                                    <option value="Mohammédia">Mohammédia</option>
                                    <option value="El Jadida">El Jadida</option>
                                    <option value="Khouribga">Khouribga</option>
                                    <option value="Béni Mellal">Béni Mellal</option>
                                    <option value="Khémisset">Khémisset</option>
                                    <option value="Nador">Nador</option>
                                    <option value="Taza">Taza</option>
                                    <option value="Berkane">Berkane</option>
                                    <option value="Settat">Settat</option>
                                  </select>
                            </td>
                        </tr>

                </tr>
                <tr>
                    <input type="button" class="mybox case1" value="+" onclick="addBox2()">
                </tr>
            </table>
            </div><hr>
        </div>
        <div id="hob2"></div>
            <div>
                <label for="page_linkedin"><h3 style="margin: 10px;"><strong>Page linkedIn :</strong></h3></label>
                <input style="margin-left: 50px;" class="text" type="url" name="page_linkedin" id="page_linkedin" size="90px" placeholder="url">
            </div>
         
     </div><br>
     <div style="margin-left: 180px;margin-right: 180px;width: auto;" class="flexi2" >
     <div style="width: 665px;" class="sizepage">
        <h2 align="center"><strong>Mes critères de recherche</strong></h2><hr>
       
        <p >
            <label for="Categories"><h3 style="margin-top: -40px;"><strong>Categories :</strong></h3></label>
            <select name="Categories" id="Categories" class="text2" style="margin-left: 50px;">
                <option value="">choisissez</option>
                <option value="Web dev">Web dev</option>
                <option value="Appweb dev">Appweb dev</option>
                <option value="App mobile">App mobile</option>
            </select>
        
        </p><hr>
        <p>
            <h3 style="margin: 10px;"><strong>Mobilité géographique (régions) :</strong></h3>
            <table id="framework1">
                <tr>
            <td id="framework1"><input type="radio" name="region" value="Agadir" >Agadir</td>
            <td id="framework1"><input type="radio" name="region" value="Dakhla" >Dakhla</td>
            <td id="framework1"><input type="radio" name="region" value="Guelmim" >Guelmim</td>
            <td id="framework1"><input type="radio" name="region" value="Meknès" >Meknès</td>
            <td id="framework1"><input type="radio" name="region" value="Settat">Settat</td>
        </tr>
        <tr>
            <td id="framework1"><input type="radio" name="region" value="Casablanca-Mohammedia" >Casablanca-Mohammedia</td>
            <td id="framework1"><input type="radio" name="region" value="Fès" >Fès </td>
            <td id="framework1"><input type="radio" name="region" value="Oujda" >Oujda </td>
            <td id="framework1"><input type="radio" name="region" value="Marrakech-Safi" >Marrakech-Safi</td>
            <td id="framework1"><input type="radio" name="region" value="Rabat-Salé-Kénitra" >Rabat-Salé-Kénitra</td>
            
        </tr>
        <tr>
            <td id="framework1"><input type="radio" name="region" value="Béni Mellal-Khénifra" >Béni Mellal-Khénifra </td>            
            <td id="framework1"><input type="radio" name="region" value="Laâyoune" >Laâyoune</td>            
            <td id="framework1"><input type="radio" name="region" value="Tanger-Tétouan-Al Hoceïma" >Tanger-Tétouan-Al Hoceïma</td>
            <td id="framework1"><input type="radio" name="region" value="International" >International</td>
        </tr>

        </table>
        </p>
     </div>
    </div><br>
    <div style="margin-left: 180px;margin-right: 180px;" >
        <div class="sizepage">
            <h2 align="center"><strong>Mes compétences</strong></h2><hr>
            <table width="100%" style="margin-top: -60px;">
                <tr>
                    <td width="50%"  >
                       
                            <h3 style="margin-left: 20px;margin-top: -30px;"><strong>Langues parlées :</strong> </h3>
                            
                           <p>
                            <input type="checkbox" name="lang_parle[]" value="Francais" style="margin-left: 70px;">Francais  
                            <select name="lang_parle_niveau[]" class="txt" style="margin-left: 40px;">
                                <option value="">niveau</option>
                                <option value="maternelle">maternelle</option>
                                <option value="courant">courant</option>
                                <option value="bon_niveau">bon niveau</option>
                                <option value="intermediaire">intermédiaire</option>
                                <option value="debutant">débutant</option>                
                            </select>

                            <input type="checkbox" name="lang_parle[]" value="Anglais" style="margin-left: 20px;">Anglais
                            <select name="lang_parle_niveau[]" class="txt" style="margin-left: 40px;">
                                <option value="">niveau</option>
                                <option value="maternelle">maternelle</option>
                                <option value="courant">courant</option>
                                <option value="bon_niveau">bon niveau</option>
                                <option value="intermediaire">intermédiaire</option>
                                <option value="debutant">débutant</option>   
                            </select>

                            <input type="checkbox" name="lang_parle[]" value="Arab"  style="margin-left: 20px;">Arab
                            <select name="lang_parle_niveau[]" class="txt" style="margin-left: 40px;">
                                <option value="">niveau</option>
                                <option value="maternelle">maternelle</option>
                                <option value="courant">courant</option>
                                <option value="bon_niveau">bon niveau</option>
                                <option value="intermediaire">intermédiaire</option>
                                <option value="debutant">débutant</option>  
                                </select> 
                           </p>                    
                    
                       
                    </td>
                </tr><br>
                <tr>
                    <td>
                        <h3 style="margin-left: 20px;"><strong>Language de programmation :</strong></h3>                
                    <table id="framework">
                        <tr>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="Java">Java</td>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="Js">JsavaScript</td>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="C">C</td>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="Python">Python</td>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="C++">C++</td>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="Ruby">Ruby</td>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="C#">C#</td>
                        </tr>
                        <tr> 
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="Html">Html</td>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="Css">Css</td>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="Flutter">Flutter</td>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="Php">Php</td>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="Bash">Bash</td>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="git">git</td>
                            <td id="framework"><input type="checkbox" name="lan_prog[]" value="Sql">Sql</td> 
                        </tr>
                    </table>

                </td>
            </tr><br>
            <tr>

                <td>
                   
                        <h3 style="margin-left: 20px;"><strong>Frameworks :</strong></h3>
                        <p style="margin-left: 20px;">
                            <table id="framework">
                                <tr>
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="Angular">Angular</td>
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="Boostrap">Boostrap</td>
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="Cordova">Cordova</td>
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="Django">Django</td>
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="Express.js">Express.js</td>
                                </tr>
                                <tr> 
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="NativeIOS">NativeIOS</td>
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="React.js">React.js</td>
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="Flutter">Flutter</td>
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="Meteor">Meteor</td>
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="NativeAndroid">NativeAndroid</td>
                                </tr>
                                <tr> 
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="Spring">Spring</td>
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="Vue.js">Vue.js</td>
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="ReactNative">ReactNative</td>
                                    <td id="framework"><input type="checkbox" name="framwo[]" value="RubyOnRails">RubyOnRails</td>
                                </tr>
                            </table>
                            
                            
                        </p>
                    
                </td>
            </tr><br>
            <tr>
                <td>
                   
                        <h3 style="margin-left: 20px;"><strong>Base de données :</strong></h3>
                        <table id="framework">
                            <tr>
                                <td id="framework"><input type="checkbox" name="bdd[]" value="mongoDB">MongoDB</td>
                                <td id="framework"><input type="checkbox" name="bdd[]" value="postgres">Postgres</td>
                                <td id="framework"><input type="checkbox" name="bdd[]" value="oracle">Oracle</td>
                                <td id="framework"><input type="checkbox" name="bdd[]" value="mariadb">Mariadb</td> 
                            </tr>

                        </table>
                </td>
            </tr>
            <tr>
                <td>
                   
                        <h3 style="margin-left: 20px;"><strong>Systeme d'exploitation :</strong></h3>
                        <table id="framework">
                            <tr>
                                <td id="framework"><input type="checkbox" name="sys_eploi[]" value="Linux">Linux</td>
                                <td id="framework"><input type="checkbox" name="sys_eploi[]" value="MacOS">MacOS</td>
                                <td id="framework"><input type="checkbox" name="sys_eploi[]" value="Widnows">Windows</td>
                            </tr>
                        </table>
                        
                    
                </td>
            </tr><br>
        </table>
    </div>
</div><br>
<div>
    <table class="marge" cellspacing="50" >
        <tr>
            <td >
                <input type="submit" value="Enregistrer et continuer" name="soumission" class="button">
            </td>
            <td>
                <input type="reset" value="Effacer tout"  class="button">
            </td>
        </tr>
    </table>


</div><br>
</form>
<script>
            var counter = 1;
            var textBox = "";
            var counter2 = 1;
            var textBox2 = "";
            function addBox1(){
                var div = document.createElement("div");
                div.setAttribute("class","form-group");
                div.setAttribute("id","box_"+counter);
                textBox = '<div width="100%"  ><div class="display" style="margin-left: 0px;"><p><label  for="date_debut_mois_annee"><h5 >Date de début :</h5></label><select name="date_debut_mois_D" id="date_debut_mois_D" class="text1" ><option value="">-Mois</option><option value="Jan">Jan</option><option value="Fev">Fev</option><option value="Mar">Mar</option><option value="Avr">Avr</option><option value="Mai">Mai</option><option value="jui">jui</option><option value="juil">juil</option><option value="Aou">Aou</option><option value="Sep">Sep</option><option value="Oct">Oct</option><option value="Nov">Nov</option><option value="Dec">Dec</option></select><select name="date_debut_annee_D[]" id="date_debut_annee_D" class="text1"><option value="">-Année</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option></select></p><p><label for="date_fin_mois_annee"><h5>Date de fin :</h5></label><select  name="date_fin_mois" id="date_fin_mois_D" class="text1"><option value="">-Mois</option><option value="Jan">Jan</option><option value="Fev">Fev</option><option value="Mar">Mar</option><option value="Avr">Avr</option><option value="Mai">Mai</option><option value="jui">jui</option><option value="juil">juil</option><option value="Aou">Aou</option><option value="Sep">Sep</option><option value="Oct">Oct</option><option value="Nov">Nov</option><option value="Dec">Dec</option></select><select name="date_fin_annee_D[]" id="date_fin_annee_D" class="text1"><option value="">-Année</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option></select></p></div><br><table class="marg"><tr><td><input   type="text" name="titre_formation[]" id="titre_formation" placeholder="Titre de votre formation" size="41px" maxlength="30" class="text"></td><td><input type="text" id="Nom_etablissement" name="Nom_etablissement[]" placeholder="Nom de l école ou de l établissement" size="41px" maxlength="30" class="text"></td><td><select class="case1" style="width: 105%;height:54px;" name="Ville_D[]" id="Ville"><option value="">Ville</option><option value="Casablanca">Casablanca</option><option value="Salé">Salé</option><option value="Tanger">Tanger</option><option value="Fès">Fès</option><option value="Marrakech">Marrakech</option><option value="Safi">Safi</option><option value="Meknès">Meknès</option><option value="Oujda">Oujda</option><option value="Rabat">Rabat</option><option value="Témara">Témara</option><option value="Agadir">Agadir</option><option value="Kénitra">Kénitra</option><option value="Tétouan">Tétouan</option><option value="Laayoune">Laayoune</option><option value="Mohammédia">Mohammédia</option><option value="El Jadida">El Jadida</option><option value="Khouribga">Khouribga</option><option value="Béni Mellal">Béni Mellal</option><option value="Khémisset">Khémisset</option><option value="Nador">Nador</option><option value="Taza">Taza</option><option value="Berkane">Berkane</option><option value="Settat">Settat</option></select></td></tr><tr><input type="button" class="mybox case1" value="-" onclick="removebox1(this)"></tr></table><hr>';
                div.innerHTML = textBox;
                hob.appendChild(div);
                counter++;
            }
            function removebox1(ele){
                ele.parentNode.remove();
            }
            function addBox2(){
                var div = document.createElement("div");
                div.setAttribute("class","form-group");
                div.setAttribute("id","box_"+counter2);
                textBox2 = '<table><tr><div width="100%"  ><div class="display" style="margin-left: 0px;"><p ><label  for="date_debut_mois_annee"><h5 >Date de début :</h5></label><select name="date_debut_mois_E" id="date_debut_mois_E" class="text1" ><option value="">-Mois</option><option value="Jan">Jan</option><option value="Fev">Fev</option><option value="Mar">Mar</option><option value="Avr">Avr</option><option value="Mai">Mai</option><option value="jui">jui</option><option value="juil">juil</option><option value="Aou">Aou</option><option value="Sep">Sep</option><option value="Oct">Oct</option><option value="Nov">Nov</option><option value="Dec">Dec</option></select><select name="date_debut_annee_E" id="date_debut_annee_E" class="text1"><option value="">-Année</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option></select></p><p ><label for="date_fin_mois_annee"><h5>Date de fin :</h5></label><select  name="date_fin_mois_E" id="date_fin_mois_E" class="text1"><option value="">-Mois</option><option value="Jan">Jan</option><option value="Fev">Fev</option><option value="Mar">Mar</option><option value="Avr">Avr</option><option value="Mai">Mai</option><option value="jui">jui</option><option value="juil">juil</option><option value="Aou">Aou</option><option value="Sep">Sep</option><option value="Oct">Oct</option><option value="Nov">Nov</option><option value="Dec">Dec</option></select><select name="date_fin_annee_E" id="date_fin_annee_E" class="text1"><option value="">-Année</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option></select></p></div><br><table class="marg"><tr><td><input   type="text" name="titre_experience" id="titre_experience" placeholder="Titre d expérience" size="41px" maxlength="30" class="text"></td><td><input type="text" id="Nom_societe" name="Nom_societe" placeholder="Le nom de société" size="41px" maxlength="30" class="text"></td><td><select class="case1" style="width: 105%;height:54px;" name="Ville_E" id="Ville"><option value="">Ville</option><option value="Casablanca">Casablanca</option><option value="Salé">Salé</option><option value="Tanger">Tanger</option><option value="Fès">Fès</option><option value="Marrakech">Marrakech</option><option value="Safi">Safi</option><option value="Meknès">Meknès</option><option value="Oujda">Oujda</option><option value="Rabat">Rabat</option><option value="Témara">Témara</option><option value="Agadir">Agadir</option><option value="Kénitra">Kénitra</option><option value="Tétouan">Tétouan</option><option value="Laayoune">Laayoune</option><option value="Mohammédia">Mohammédia</option><option value="El Jadida">El Jadida</option><option value="Khouribga">Khouribga</option><option value="Béni Mellal">Béni Mellal</option><option value="Khémisset">Khémisset</option><option value="Nador">Nador</option><option value="Taza">Taza</option><option value="Berkane">Berkane</option><option value="Settat">Settat</option></select></td></tr><tr><input type="button" class="mybox case1" value="-" onclick="removebox2(this)"></tr></tr></table></div><hr>';
                div.innerHTML = textBox2;
                hob2.appendChild(div);
                counter2++;
            }
            function removebox2(ele){
                ele.parentNode.remove();
            }
        </script>
</body>
</html>
