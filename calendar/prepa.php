<?php
$tab_mois=array('','Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');

$tab_jours=array('','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');

$tab_jours_min=array('','Lu','Ma','Me','Je','Ve','Sa','Di');

// récupération de la date d'aujourd'hui au format francais
setlocale(LC_TIME, "french");
$datedujour=(int)(date('j'));
$moisdujour=(int)(date('n'));
$anneedujour=(int)(date('Y'));

if (isset($_GET['m']) && isset($_GET['a'])){
	$mois=$_GET['m'];
	$annee=$_GET['a'];
}else{
	$mois=$moisdujour;
	$annee=$anneedujour;
}
if (isset($_GET['j'])){
	$jour=$_GET['j'];
}else{
	$jour=1;  //Cette variable est celle qui va afficher les jours de la semaine
}

// Calcul du nombre de jours dans chaque mois en prenant compte des années bisextiles.
if (($annee % 4) == 0){
	$nbrjour = array(0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
}else{
	$nbrjour = array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
}

//Récupération du premier jour du mois (1=lundi, 2=mardi ....)
$premierdumois = jddayofweek( cal_to_jd( CAL_GREGORIAN, $mois, 1, $annee) , 0);

// Modification en cas de 0=dimanche pour correspondre a mon tableau
if ($premierdumois == 0){ $premierdumois = 7; }
//echo "<br>";
//echo $premierdumois;

//FONCTION POUR AFFICHER LE MOINS SUIVANT
function mois_suivant($mois,$annee){
	$mois++;	//mois suivant, donc on incrémente de 1
	if($mois==13){	
		$annee++;
		$mois=1;
	}
	return $_SERVER['PHP_SELF']."?m=$mois&a=$annee";
}

//FONCTION POUR AFFICHER LE MOIS PRECEDENT
function mois_precedent($mois,$annee){
	$mois--;
	if($mois==0){
		$annee--;
		$mois=12;
	}
	return $_SERVER['PHP_SELF']."?m=$mois&a=$annee";
}

//FONCTION POUR AFFICHER LE JOUR SUIVANT
function jour_suivant($jour,$mois,$annee){
	$jour++;	//mois suivant, donc on incrémente de 1
	if($jour==$nbrjour[$mois]){	
		$mois++;
		$jour=1;
	}
	return $_SERVER['PHP_SELF']."?j=".$jour."&m=".$mois."&a=".$annee;
}

//FONCTION POUR AFFICHER LE JOUR PRECEDENT
function jour_precedent($jour,$mois,$annee){
	$jour--;
	if($jour==0){
		$mois--;
		$jour=$nbrjour[$mois-1];
	}
	return $_SERVER['PHP_SELF']."?j=".$jour."&m=".$mois."&a=".$annee;
}


$joursmoisavant = $nbrjour[$mois-1] - $premierdumois+2;		//Celle-ci sert à afficher les jours du mois précédent qui apparaissent
$jourmoissuivant = 1; //Et celle-ci les jours du mois suivant
if($mois == 1){
	$joursmoisavant = $nbrjour[$mois+11] - $premierdumois+2; //Si c'est janvier, le mois d'avant n'est pas à 0 mais 31 jours!
}
?>