<?php
session_start();
if(isset($_POST["soumission"])){
    $niveau_etude = $_POST["niveau_etude"];
    $date_debut_annee_D = $_POST["date_debut_annee_D"];
    $date_fin_annee_D = $_POST["date_fin_annee_D"];
    $titre_formation = $_POST["titre_formation"];
    $Nom_etablissement = $_POST["Nom_etablissement"];
    $Ville_D = $_POST["Ville_D"];
    $description_cv = $_POST["description_cv"];
    $date_debut_annee_E = $_POST["date_debut_annee_E"];
    $date_fin_annee_E = $_POST["date_fin_annee_E"];
    $titre_experience = $_POST["titre_experience"];
    $Nom_societe = $_POST["Nom_societe"];
    $Ville_E = $_POST["Ville_E"];
    $Categories = $_POST["Categories"];
    $lang_parle = $_POST["lang_parle"];
    $lang_parle_niveau = $_POST["lang_parle_niveau"];
    $lan_prog = $_POST["lan_prog"];
    $framwo = $_POST["framwo"];
    $bdd = $_POST["bdd"];
    $sys_eploi = $_POST["sys_eploi"];
    $page_linkedin = $_POST["page_linkedin"];
    $photo = $_POST["photo"];

    $id_cd= $_SESSION["id_candidat"];
    
    

    require_once 'database_connect.inc.php';
    if(!empty($niveau_etude) || !empty ($photo) || !empty($description_cv) || !empty($Categories) || !empty($lang_parle) || !empty($lang_parle_niveau) || !empty($lan_prog)){
    $sql1 = "INSERT INTO `cv`(`Description`, `Photo`,`categorie`,`NiveauEtude`,`Id_candidat`,`LinkedIn`) VALUES ('$description_cv','$photo','$Categories','$niveau_etude','$id_cd','$page_linkedin');";
    $sth = $cnx->query($sql1);
    $getCV = "SELECT id_cv FROM `cv` where id_candidat = '$id_cd'";    
    $sthCV = $cnx->query($getCV);
    $id_cv = $sthCV->fetchColumn();
    foreach($framwo as $framwork){
        $sql4 = "INSERT INTO `frameworks`(`NomFramework`,`Id_candidat`,`Id_cv`) VALUES ('$framwork','$id_cd', '$id_cv');";
        $fr = $cnx->query($sql4);
    }
    foreach($bdd as $database){
        $sql8 = "INSERT INTO `base_de_donnees`(`NomBdd`,`Id_candidat`,`Id_cv`) VALUES ('$database','$id_cd', '$id_cv');";
        $sth8 = $cnx->query($sql8);
    }
    
    foreach($lan_prog as $prog){
        $sql5 = "INSERT INTO `langages_de_programmation`(`Langage`,`Id_candidat`,`Id_cv`) VALUES ('$prog','$id_cd', '$id_cv');";
        $sth = $cnx->query($sql5);
    }
    foreach($sys_eploi as $exploit){
        $sql6 = "INSERT INTO `systeme_d'exploitaion`(`NomSystemeExploitation`,`Id_candidat`,`Id_cv`) VALUES ('$exploit','$id_cd', '$id_cv');";
        $sth = $cnx->query($sql6);
    }
    $query = "INSERT INTO langues (`Langue`,`Niveau`,`Id_candidat`,`Id_cv`) VALUES (:lang_name, :lang_level,'$id_cd', '$id_cv')";
    $stmt = $cnx->prepare($query);
    
    // loop through the selected languages and their levels
    foreach ($lang_parle as $index => $lang) {
        // bind the values to the placeholders
        $stmt->bindParam(':lang_name', $lang, PDO::PARAM_STR);
        $stmt->bindParam(':lang_level', $lang_parle_niveau[$index], PDO::PARAM_STR);
        
        // execute the query
        $stmt->execute();
    }
  

        for ($i = 0; $i < count($titre_formation); $i++) {
            $date_debut_annee_D = $date_debut_annee_D[$i];
            $date_fin_annee_D = $date_fin_annee_D[$i];
            $titre_formation_value = $titre_formation[$i];
            $Nom_etablissement_value = $Nom_etablissement[$i];
            $Ville_D_value = $Ville_D[$i];
        
            $formations = "INSERT INTO `formations`(`Diplome`, `Etablissement`, `Ville`, `AnneeDebut`, `AnneeFin`, `Id_candidat`, `Id_cv`)
                           VALUES ('$titre_formation_value', '$Nom_etablissement_value', '$Ville_D_value', '$date_debut_annee_D', '$date_fin_annee_D', '$id_cd', '$id_cv')";
            $sth = $cnx->query($formations);
        }

    for($i = 0; $i < count($titre_experience); $i++){
        $date_debut_annee_E = $date_debut_annee_E[$i];
        $date_fin_annee_E = $date_fin_annee_E[$i];
        $titre_experience_value = $titre_experience[$i];
        $Nom_societe_value = $Nom_societe[$i];
        $Ville_E_value =$Ville_D[$i];

        $experiences = "INSERT INTO `experiences`(`Poste`, `Societe`, `Ville`, `AnneeDebut`, `AnneeFin`, `Id_candidat`,`Id_cv`)
                       VALUES('$titre_experience_value', '$Nom_societe_value', '$Ville_E_value', '$date_debut_annee_E', '$date_fin_annee_E', '$id_cd', '$id_cv')";
        $sth = $cnx->query($experiences);   
    }


    //Calcul Du Score
    if($sth){
        $msg = "<script>alert(\"Votre inscription a été effecuté avec succes.\")</script>";
        echo $msg;
        $idcd = $_SESSION["id_candidat"];
        echo $idcd;
$sqlfram = "SELECT NomFramework FROM frameworks where frameworks.Id_candidat = '$idcd';";
$exec = $cnx->query($sqlfram);
$framework = $exec->fetchAll();

$sqlprog = "SELECT Langage FROM langages_de_programmation where langages_de_programmation.Id_candidat = '$idcd';";
$exec = $cnx->query($sqlprog);
$prog = $exec->fetchAll();

$sqlcv = "SELECT Categorie FROM `cv` WHERE Id_candidat = $idcd";
$exec = $cnx->query($sqlcv);
$categorie = $exec->fetchColumn();

$sqlexp = "SELECT Poste FROM `experiences` WHERE Id_candidat = $idcd";
$exec = $cnx->query($sqlexp);
$exp = $exec->fetchColumn();
echo $categorie;
$score = 0;
if($categorie == "Web dev"){
	foreach ($prog as $row) {

		if($row["Langage"] == "Html" || $row["Langage"] =="Css" || $row["Langage"] == "Js" || $row["Langage"] == "Php" || $row["Langage"] == "Sql"){
			$score += 3;
		} 
		if($row["Langage"] == "Ruby" || $row["Langage"] =="Python" || $row["Langage"] == "C++"){
			$score += 2;
        
		}
		if($row["Langage"] == "Java" || $row["Langage"] == "git" || $row["Langage"] =="C" || $row["Langage"] == "Bash" || $row["Langage"] == "C#"){
			$score += 1;
		}
    }
		foreach ($framework as $row) {
		if($row["NomFramework"] == "Bootstrap"){
			$score += 3;
		}
		
		if($row["NomFramework"] == "Angular" || $row["NomFramework"] == "Express.js" || $row["NomFramework"] == "React.js" || $row["NomFramework"] == "Flutter"){
			$score +=2;
		}
		
		if($row["NomFramework"] == "Cordova" || $row["NomFramework"] == "NAtvieIOS" || $row["NomFramework"] == "Django" || $row["NomFramework"] == "ReactNative" ||
		 $row["NomFramework"] == "RubyOnRails" || $row["NomFramework"] == "NativeAndroid" || $row["NomFramework"] == "Vue.js" || $row["NomFramework"] == "Spring" || 
		 $row["NomFramework"] == "Meteor" ){
			$score += 1;
		}}
		// tableau experience
        if(isset($exp)){
            $score += 1;
    }


}
else if($categorie == "Appweb dev"){
	foreach ($prog as $row) {
		if($row["Langage"] == "Python" || $row["Langage"] == "Java" || $row["Langage"] == "Js" || $row["Langage"] == "Ruby" || $row["Langage"] == "C#"){
			$score += 3;
		}
		if($row["Langage"] == "C++" ||  $row["Langage"] == "Php" || $row["Langage"] == "Sql" || $row["Langage"] == "Html"){
			$score += 2;
		}
		if($row["Langage"] == "Css" ||  $row["langage"] == "git" || $row["langage"] == "C" || $row["langage"] == "Bash"   ){
			$score += 1;
		}}
		foreach($framework as $row){

		if($row["NomFramework"] == "NAtvieIOS" || $row["NomFramework"] == "NativeAndroid" || $row["NomFramework"] == "ReactNative" || $row["NomFramework"] == "Cordova" 
		|| $row["NomFramework"] == "Flutter" || $row["NomFramework"] == "Spring"){
			$score += 3;
		}
		
		if($row["NomFramework"] == "Django"  || $row["NomFramework"] == "bootstrap" || $row["NomFramework"] == "Angular" || $row["NomFramework"] == "Express.js" || 
		$row["NomFramework"] == "React.js" || $row["NomFramework"] == "RubyOnRails"  || $row["NomFramework"] == "Vue.js"  || $row["NomFramework"] == "Meteor" ){
			$score += 1;
		}
	}

		// tableau experience

			if(isset($exp)){
				$score += 1;
        }

}
else if ($categorie == "App mobile"){
	foreach ($prog as $row) {
		if($row["Langage"] == "Html" || $row["Langage"] == "Css" || $row["Langage"] == "Js" || $row["Langage"] == "Php" || $row["Langage"] == "Sql"  ||
		$row["Langage"] == "Ruby" ){
		   $score += 3 ;
	   }  
	   if($row["Langage"] == "Python"){
		$score += 2;
		}
		if( $row["Langage"] == "C++" || $row["langage"] == "Java" || $row["langage"] == "git" || $row["langage"] == "C" || $row["langage"] == "Bash" || $row["langage"] == "C#" ){
			$score += 1 ;
		}  }
	if($row["NomFramework"] == "Django"  || $row["NomFramework"] == "React.js" || 
		 $row["NomFramework"] == "RubyOnRails"  || $row["NomFramework"] == "Vue.js" ){
			$score += 3;
		}

		if( $row["NomFramework"] == "Express.js" || $row["NomFramework"] == "Meteor" || $row["NomFramework"] == "Spring"){
			$score += 2;
		}

		foreach ($framework as $row) {
		if($row["NomFramework"] == "Cordova" || $row["NomFramework"] == "NAtvieIOS"  || $row["NomFramework"] == "ReactNative"  || 
		$row["NomFramework"] == "NativeAndroid" || $row["NomFramework"] == "Bootstrap" ||
		  $row["NomFramework"] == "Angular"  || $row["NomFramework"] == "Flutter" ){
			$score += 1;
		}}

        if(isset($exp)){
            $score += 1;
    }

}
$sqlscore = "UPDATE `cv` SET `Score` = '$score' WHERE `Id_cv` = '$id_cv'";
$cnx->query($sqlscore);
header("location: ../index.php");
    }
    else{
        $msg = "<p>Reesayer votre inscription</p>";
        echo $msg;
        header("location: ../inscriptionCandidat.php");
    }
}}
?>