<?php
include "link1.php";
include_once "includes/database_connect.inc.php";
?>
<title>List Candidats</title>
<?php
include "header.php";
?>


<h1 id="title">Liste Candidats</h1>    

<div class="container-candidat">
    <form action="#">
<div class="info filter">
    <h4 id="filterby"><i class="fa-solid fa-filter" style="padding-right: 5px;"></i>Filter By</h4>
    <h5 id="h5">Categories</h5>
    <table class="table_login">
        <tr>
            <td><input class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Developpement Web</h6></td>
        </tr>
        <tr>
            <td><input class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Developpement d'Applications</h6></td>
        </tr>
        <tr>
            <td><input class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Developpement d'Applications Web</h6></td>
        </tr>   
    </table>
    <h5 id="h5">Langages de Programmation</h5>
    <table class="table_login">
        <tr>
            <td><input value="Python" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Python</h6></td>
            <td><input value="Java" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Java</h6></td>
        </tr>
        <tr>
            <td><input value="C" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">C</h6></td>
            <td><input value="C++" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">C++</h6></td>
        </tr>
        <tr>
            <td><input value="HTML" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">HTML</h6></td>
            <td><input value="CSS" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">CSS</h6></td>
        </tr>
        <tr>
            <td><input value="Js" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">JavaScript</h6></td>
            <td><input value="php" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Php</h6></td>
        </tr>
        <tr>
            <td><input value="ruby" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">ruby</h6></td>
            <td><input value="c#" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">C#</h6></td>
        </tr>
        <tr>
            <td><input value="git" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Git</h6></td>
            <td><input value="bash" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">bash</h6></td>
        </tr>      
    </table>
    <h5 id="h5">Frameworks</h5>
    <table class="table_login">
        <tr>
            <td><input value="Angular" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Angular</h6></td>
            <td><input value="Bootstrap" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Bootstrap</h6></td>
        </tr>
        <tr>
            <td><input value="Cordova" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Cordova</h6></td>
            <td><input value="Django" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Django</h6></td>
        </tr>
        <tr>
            <td><input value="Express.js" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Express.js</h6></td>
            <td><input value="NativeIOS" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">NativeIOS</h6></td>
        </tr>
        <tr>
            <td><input value="React.js" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">React.js</h6></td>
            <td><input value="Flutter" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Flutter</h6></td>
        </tr>
        <tr>
            <td><input value="meteor" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Meteor</h6></td>
            <td><input value="NativeAndroid" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">NativeAndroid</h6></td>
        </tr>
        <tr>
            <td><input value="spring" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Spring</h6></td>
            <td><input value="Vue.js" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">Vue.js</h6></td>
        </tr>     
        <tr>
            <td><input value="ReactNative" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">ReactNative</h6></td>
            <td><input value="RubyOnRails" class="checkbox" type="checkbox"></td>
            <td><h6 class="checkbox">RubyOnRails</h6></td>
        </tr>  
    </table>
    
    <button name="filterCands" id="filtrer">Filtrer</button>
</div>
</form>
<div class="table">
    <table>
        <tr>
            <th>Nom</th>
            <th>Categorie</th>
            <th>Description</th>
            <th>Score</th>
        </tr>
        <?php
            $sql = "SELECT * FROM `candidats`,`cv` where candidats.id_cand = cv.id_candidat order by  `Score`;";
            $sth = $cnx->query($sql);
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            if(isset($_SESSION["id_recruteur"])){
            $id = $_SESSION["id_recruteur"];}
            if($result){
                foreach($result as $row){?>   
                    <tr>
                        <td><?php echo "<a href='profil_candidat.php?id=" . $row["Id_cand"] . "'>" . $row["Nom"] . "</a>"; ?></td>
                        <td><?php echo $row['categorie'] ?></td>
                        <td><?php echo $row['Description'] ?></td>
                        <td><?php echo $row['Score'] ?></td>
                        <?php if(isset($_SESSION["id_recruteur"])){ 
                            echo "<td><a href='proposerOffre.php?proposer=" . $id . "&candidat=" . $row["Id_cand"] . "'><button id='filtrer'>Postuler</button></a></td>";
                        }?>
                            
                        
                        
                    </tr>
                <?php
                }
            }
            else{
                echo "<tr style=\"background-color: red;\"><td>No Data Found!</td></tr>";
            }
        ?>
    </table>
</div>
</div>


</body>