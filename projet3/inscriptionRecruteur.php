<?php
include "links2.php"
?>
    <title>Mon profil entreprise</title>
<?php
include "header2.php"
?>
 <form action="includes/addrecruteur.php" method="post">
      <div style="background-color: #f5f9ff" class="centrer">
        <h1 style="color: black"><strong>Mon espace recruteur</strong></h1>
      </div>
      <br />
      <div style="margin-left: 180px; margin-right: 180px" class="sizepage">
        <h2 align="center"><strong>Mes coordonnées de contact</strong></h2>
        <hr />
        <br />
        <table width="100%">
          <tr>
            <td colspan="2">
              <select
                class="case1"
                style="width: 20%"
                name="civilite"
                id="Civilité"
              >
                <option value="">Civilité</option>
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
              </select>
              <input
                class="case"
                style="width: 39%"
                type="text"
                name="prenom"
                required
                id="Prenom"
                placeholder="Prenom"
              />
              <input
                class="case"
                style="width: 40%"
                type="text"
                name="nom"
                required
                id="Nom"
                placeholder="Nom"
              />
            </td>
          </tr>
          <tr>
            <td width="50%">
              <select
                name="fonction"
                style="width: 100%"
                id="fonction"
                class="case"
                required
              >
                <option value="">Quelle est votre fonction ?</option>
                <option value="Directeur_Général_/_CEO">
                  Directeur Général / CEO
                </option>
                <option value="Directeur_des_Ressources_Humaines">
                  Directeur des Ressources Humaines
                </option>
                <option value="Responsable_des_Ressources_Humaines">
                  Responsable des Ressources Humaines
                </option>
                <option value="Chargé_de_Recrutement">
                  Chargé(e) de Recrutement
                </option>
                <option value="Responsable_des_Achats">
                  Responsable des Achats
                </option>
                <option value="Responsable_des_Opérations">
                  Responsable des Opérations
                </option>
                <option value="Chargé_des_Achats">Chargé(e) des Achats</option>
                <option value="Chef_de_Projet">Chef de Projet</option>
                <option value="Assistant">Assistant(e)</option>
                <option value="Autre">Autre</option>
              </select>
            </td>
            <td>
              <input
                class="case"
                type="text"
                style="width: 100%"
                name="telephone"
                required
                id="telephone"
                placeholder="telephone"
              />
            </td>
          </tr>
          <tr>
            <td>
              <input
                class="case"
                type="email"
                style="width: 100%"
                name="email"
                required
                id="email"
                placeholder="email"
              />
            </td>
            <td>
              <input
                class="case"
                type="password"
                style="width: 100%"
                name="password"
                required
                id="password"
                placeholder="password"
              />
            </td>
          </tr>
        </table>
      </div>
      <br />
      <div style="margin-left: 180px; margin-right: 180px" class="sizepage">
        <h2 align="center"><strong>Mon entreprise</strong></h2>
        <hr />
        <br />
        <table width="100%">
          <tr>
            <td width="50%">
              <input
                class="case"
                type="text"
                style="width: 100%"
                name="societe"
                id="nom_entrprise"
                placeholder="Nom de l'entreprise"
                required
              />
            </td>
            <td>
              <input
                class="case"
                type="text"
                style="width: 100%"
                name="Site_Internet"
                id="Site_Internet"
                placeholder="Site Internet de l'entreprise"
              />
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input
                class="case"
                type="text"
                style="width: 50%"
                name="Adresse"
                id="Adresse"
                placeholder="Adresse"
              />
              <select class="case1" style="width: 24%" name="ville" id="Ville">
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
              <select class="case" style="width: 25%" name="pays" id="pays">
                <option value="">Pays</option>
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
      <br />
      <div>
      <table class="marge" cellspacing="50" >
        <tr>
            <td >
                <input type="submit" value="Enregistrer et continuer" name="save" class="button">
            </td>
            <td>
                <input type="reset" value="Effacer tout"  class="button">
            </td>
        </tr>
    </table>


</div>
    </form>
  </body>
</html>
