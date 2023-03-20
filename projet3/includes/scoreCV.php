
<?php
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
