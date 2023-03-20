<?php
include "header2.php";    

?>
    <title>Candidat</title>
<?php
include "links2.php";
?>
      <div style="background-color: #f5f9ff" class="centrer">
        <h1 style="color: black">
          <strong>Compléter mon profil </strong>
        </h1>
      </div>
      <br />
      <form action="includes/addCandidat.php" method="post" enctype="multipart/form-data">
      <div style="margin-left: 180px; margin-right: 180px" class="sizepage">
        <h2 align="center"><strong>Mes coordonnées</strong></h2>
        <hr />
        <table width="100%">
          <tr>
            <td colspan="2">
              <select style="width: 20%" class="case1" name="Civilité" id="Civilité">
                <option value="">Civilité</option>
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
              </select>
              <input class="case1" style="width: 40%" type="text" name="Prenom" id="Prénom" placeholder="Prénom"/>
              <input class="case1" style="width: 39%" style="width: 350px;" type="text" name="Nom" id="Nom" placeholder="Nom"/>
            </td>
          </tr>
          <tr>
            <td width="50%">
              <input type="email" style="width: 50%;" class="case1" name="email" id="email" placeholder="E-mail" />
              <input type="password" style="width: 49%;" class="case1"  name="password" id="password" placeholder="password"/>
            </td>
            <td>
                <input class="case1" type="date" style="width: 49%;" name="date" id="Date de naissance" placeholder="Date de naissance"/>
              <input class="case1" type="number" style="width: 50%;" name="Telephone" id="Téléphone" placeholder="Téléphone"/>
            </td>
          </tr>
          <tr>
            <td>
              <input class="case1" style="width: 100%;" type="text" name="Adresse" id="Adresse" placeholder="Adresse"/>
            </td>
            <td>
              <select class="case1" style="width: 49%;" name="Ville" id="Ville">
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
              <select class="case1" style="width: 50%;" name="Pays_de_residence" id="Pays_de_résidence">
                <option value="">Pays de résidence</option>
                <option value="Maroc">Maroc</option>
                <option value="France">France</option>
                <option value="Belgique">Belgique</option>
                <option value="États_Unis">États-Unis</option>
                <option value="Canada">Canada</option>
              </select>
            </td>
          </tr>
        </table>
      </div>
    </br>
    <div>
        <table class="marge" cellspacing="50" >
            <tr>
                <td >
                    <input type="submit" value="Enregistrer et continuer" name="continuer" class="button">
                </td>
                <td>
                    <input type="reset" value="Effacer tout"  class="button">
                </td>
            </tr>
        </table>
    
    
    </div><br>
    </form>
  </body>
</html>
