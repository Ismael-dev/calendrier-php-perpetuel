<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>Calendrier</title>
		<link href="css/style.css" rel="stylesheet">
 	</head>
	<body>
	<?php
	require_once ('prepa.php');
	?>
		
		<main>
			<header>
				<h2>Calendrier</h2>
				<h4>
					<?php
					echo "Nous sommes le ".$tab_jours[$datedujour]." ".$datedujour." ".$tab_mois[$moisdujour]." ".$anneedujour.".";
					?>
				</h4>
			</header>
			<section>
		
		<div class="container">
			<div class="top">
				<span class="left">
					<?php
					echo "<a href='".mois_precedent($mois,$annee)."'><<</a>";
					?>
				</span>
				<span>
					<?php
					echo $tab_mois[$mois]." ".$annee;
					?>
				</span>
				<span class="right">
					<?php
					echo "<a href='".mois_suivant($mois,$annee)."'>>></a>";
					?>
				</span>
			</div>
			<br>
			<div class="container">
				<div class="journom">
					<?php
					echo $tab_jours_min[1];				
					?>
				</div>
				<div class="journom">
					<?php
					echo $tab_jours_min[2];
					?>
				</div>
				<div class="journom">
					<?php
					echo $tab_jours_min[3];
					?>
				</div>
				<div class="journom">
					<?php
					echo $tab_jours_min[4];
					?>
				</div>
				<div class="journom">
					<?php
					echo $tab_jours_min[5];
					?>
				</div>
				<div class="journom">
					<?php
					echo $tab_jours_min[6];
					?>
				</div>
				<div class="journom">
					<?php
					echo $tab_jours_min[7];
					?>
				</div>
			</div>
			<br>
				<div class='cadrecalendrier'>
				<?php

				require_once ('calendrier.php');

				?>
				</div>
			<br>			

			</section>
		</main>
	</body>
</html>