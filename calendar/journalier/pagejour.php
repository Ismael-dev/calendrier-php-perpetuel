<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>Calendrier</title>
		<link href="../css/style.css" rel="stylesheet">
 	</head>
	<body>
	<?php
	require_once ('../prepa.php');
	?>
		
		<main>
			<header>
				<h2>Calendrier Journalier</h2>
				<h4>
					<?php
					echo "Voilà la page du ".$tab_jours[$jour]." ".$jour." ".$tab_mois[$mois]." ".$annee.".";
					?>
				</h4>
			</header>
			<section>
		
		<div class="container">
			<div class="top">
				<span class="left">
					<?php
					echo "<a href='".jour_precedent($jour,$mois,$annee)."'><<</a>";
					?>
				</span>
				<span>
					<?php
					echo "- ".$jour." / ".$mois." / ".$annee." -";
					?>
				</span>
				<span class="right">
					<?php
					echo "<a href='".jour_suivant($jour,$mois,$annee)."'>>></a>";
					?>
				</span>
			</div>
			<br>
			<div class="container">
				<br>
			<a href='../index.php'><input type="button" value="RETOUR"></input></a>

			</div>
			<br>
			
			<?php

			require_once ('calendrier.php');

			?>
			
			</section>
		</main>
	</body>
</html>