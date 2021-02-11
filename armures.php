<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title> Magasin d'armes</title>
	<link rel="stylesheet" type="" href="data/css/style.css">
</head>
<body>
	<div class="tab_armures_légère">
	<?php 
	$iterator = new SplFileObject('data/armures/stand_armuresLeg.txt');
	echo '<table class = "Armures">';
	echo '<tr><th colspan = 8 class = title_tab>Armures légères</th></tr><tr><th>Nom</th><td class = "cell">CA</td><td>Poids</td><td class = "cell">Prix</td><td>Spécial(s)</td></tr>';
	foreach ($iterator as $line) {
		$arg = explode(",",$line);
		echo '<tr><th>' . $arg[0] . '</th>' . '<td class = "cell">' . $arg[1] . '</td>' . '<td>' . $arg[2] . '</td>' . '<td class = "cell">' . $arg[3] . '</td>' . '<td>' . $arg[4] . '</td></tr>';
	}
	echo '</table>';
	?>
	</div>

    
	<div class="tab_armures_inter">
	<?php 
	$iterator = new SplFileObject('data/armures/stand_armuresInt.txt');
	echo '<table class = "Armures">';
	echo '<tr><th colspan = 8 class = title_tab>Armures intermédiaires</th></tr><tr><th>Nom</th><td class = "cell">CA</td><td>Poids</td><td class = "cell">Prix</td><td>Spécial(s)</td></tr>';
	foreach ($iterator as $line) {
		$arg = explode(",",$line);
		echo '<tr><th>' . $arg[0] . '</th>' . '<td class = "cell">' . $arg[1] . '</td>' . '<td>' . $arg[2] . '</td>' . '<td class = "cell">' . $arg[3] . '</td>' . '<td>' . $arg[4] . '</td></tr>';
	}
	echo '</table>';
	?>
	</div>

    
	<div class="tab_armures_lourde">
	<?php 
	$iterator = new SplFileObject('data/armures/stand_armuresLou.txt');
	echo '<table class = "Armures">';
	echo '<tr><th colspan = 8 class = title_tab>Armures lourdes</th></tr><tr><th>Nom</th><td class = "cell">CA</td><td>Poids</td><td class = "cell">Prix</td><td>Spécial(s)</td></tr>';
	foreach ($iterator as $line) {
		$arg = explode(",",$line);
		echo '<tr><th>' . $arg[0] . '</th>' . '<td class = "cell">' . $arg[1] . '</td>' . '<td>' . $arg[2] . '</td>' . '<td class = "cell">' . $arg[3] . '</td>' . '<td>' . $arg[4] . '</td></tr>';
	}
	echo '</table>';
	?>
	</div>

    
	<div class="tab_armures_bouclier">
	<?php 
	$iterator = new SplFileObject('data/armures/stand_armuresBou.txt');
	echo '<table class = "Armures">';
	echo '<tr><th colspan = 8 class = title_tab>Armures (Boucliers)</th></tr><tr><th>Nom</th><td class = "cell">CA</td><td>Poids</td><td class = "cell">Prix</td><td>Spécial(s)</td></tr>';
	foreach ($iterator as $line) {
		$arg = explode(",",$line);
		echo '<tr><th>' . $arg[0] . '</th>' . '<td class = "cell">' . $arg[1] . '</td>' . '<td>' . $arg[2] . '</td>' . '<td class = "cell">' . $arg[3] . '</td>' . '<td>' . $arg[4] . '</td></tr>';
	}
	echo '</table>';
	?>
	</div>
</body>
</html>
