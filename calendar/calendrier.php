<?php


for($i=1;$i<40;$i++){		
	if($i < $premierdumois){	// Tant que la variable i ne correspond pas au premier jour du mois, on fait des cellules de tableau avec les derniers jours du mois précédent
	echo "<div class=\"jourvide\">$joursmoisavant</div>\n";
	$joursmoisavant++;
	}else{
		if($jour == $datedujour && $mois == $moisdujour && $annee == $anneedujour){ 	//Si la variable $jour correspond à la date d'aujourd'hui, la case est d'une couleur différente
			echo "<div class=\"aujourdhui\"><a href='journalier/pagejour.php?j=".$jour."&m=".$mois."&a=".$annee."'>".$jour."</a></div>\n";
		}else{
			echo "<div class=\"jour\"><a href='journalier/pagejour.php?j=".$jour."&m=".$mois."&a=".$annee."'>".$jour."</a></div>\n";
		}
		$jour++;	//On passe au lendemain 

		/*Si la variable $jour est plus élevée que le nombre de jours du mois,  c'est que c'est la fin du mois! 
			On remplit les cases vides avec les premiers jours des mois suivants
			
			et on met la variable $i à 41 pour sortir de la boucle */
		if($jour > ($nbrjour[$mois])){
			while($i % 7 != 0){
				echo "<div class=\"jourvide\">$jourmoissuivant</div>\n";
				$i++;
				$jourmoissuivant++;
			}
		echo "</div>\n";
		$i=41;
		}
	}

	// Si la variable i correspond à un dimanche (multiple de 7), on passe à la ligne suivante dans le tableau
	if($i % 7 == 0){
		echo "<br>\n";
	}

}
?>