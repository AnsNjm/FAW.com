<?php
include "link1.php";
include_once "includes/database_connect.inc.php";
?>
<title>Liste d'offres</title>
<?php
include "header.php";
$id = $_SESSION["id_recruteur"];
?>


<h1 id="title">Mes Offres</h1>    

<div class="container">

<div class="table_mes_offres">
    <table >
        <tr>
            <th>Titre</th>
            <th>Type</th>
            <th>Description</th>
            <th>Durée</th>
        </tr>
        <?php
            $id = $_GET["proposer"];
            $candidat = $_GET["candidat"];
            $sql = "SELECT * FROM `offres` where `id_recruteur` = '$id';";
            $sth = $cnx->query($sql);
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            if($result){
                foreach($result as $row){?>   
                    <tr>
                        <td><?php echo $row['Titre'] ?></td>
                        <td><?php echo $row['Type'] ?></td>
                        <td><?php echo $row['Description'] ?></td>
                        <td><?php echo $row['Duree'] ?></td>
                        <td><a href="includes/envoyerOffre.php?envoyer=<?php echo $row['Id_offre']; ?>&candidat=<?php echo $candidat; ?>"><button  id="filtrer">Envoyer</button></a></td>
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