<?php

 
 include_once 'database_connect.inc.php';

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$Deletboutton =  "DELETE FROM `recruteurs` WHERE Id_rec=$id;";
	$sthD = $cnx->query($Deletboutton);
	$_SESSION['message'] = "Recruteur supprimé!"; 
	echo '<script>alert("vous avez supprimé un candidat ");</script>';
	header("location:../adminsara.php");}

	if (isset($_GET['dell'])) {
		$idCD = $_GET['dell'];
		$DeletbouttonCD =  "DELETE FROM `candidats` WHERE Id_cand = $idCD ;";
		$sthCD = $cnx->query($DeletbouttonCD);
		$_SESSION['message'] = "candidat supprimé!"; 
		echo '<script>alert("vous avez supprimé un candidat ");</script>';
		header("location:../adminsara.php");}
  
	 ?>
