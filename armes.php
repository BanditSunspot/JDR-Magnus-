<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title> Magasin d'armes</title>
	<link rel="stylesheet" type="" href="data/css/style.css">
</head>
<body>
	<div class="tab_armes_CaC">
	<?php 
	$iterator = new SplFileObject('data/armes/stand_armesCaC.txt');
	echo '<table class = "Armes">';
	echo '<tr><th colspan = 8 class = title_tab>Armes au Corps à Corps (CàC)</th></tr><tr><th>Nom</th><td class = "cell">Portée</td><td>Dégâts</td><td class = "cell">Type</td><td>Critique</td><td class = "cell">Poids</td><td>Prix</td><td class = "cell">Spécial(s)</td></tr>';
	foreach ($iterator as $line) {
		$arg = explode(",",$line);
		echo '<tr><th>' . $arg[0] . '</th>' . '<td class = "cell">' . $arg[1] . '</td>' . '<td>' . $arg[2] . '</td>' . '<td class = "cell">' . $arg[3] . '</td>' . '<td>' . $arg[4] . '</td>' . '<td class = "cell">' . $arg[5] . '</td>' . '<td>' . $arg[6] . '</td>' . '<td class = "cell">' . $arg[7] . '</td></tr>';
	}
	echo '</table>';
	?>
	</div>

	<div class="tab_armes_Dist">
	<?php 
	$iterator = new SplFileObject('data/armes/stand_armesDist.txt');
	echo '<table class = "Armes">';
	echo '<tr><th colspan = 8 class = title_tab>Armes à Distance (Dist)</th></tr><tr><th>Nom</th><td class = "cell">Portée</td><td>Dégâts</td><td class = "cell">Type</td><td>Critique</td><td class = "cell">Poids</td><td>Prix</td><td class = "cell">Spécial(s)</td></tr>';
	foreach ($iterator as $line) {
		$arg = explode(",",$line);
		echo '<tr><th>' . $arg[0] . '</th>' . '<td class = "cell">' . $arg[1] . '</td>' . '<td>' . $arg[2] . '</td>' . '<td class = "cell">' . $arg[3] . '</td>' . '<td>' . $arg[4] . '</td>' . '<td class = "cell">' . $arg[5] . '</td>' . '<td>' . $arg[6] . '</td>' . '<td class = "cell">' . $arg[7] . '</td></tr>';
	}
	echo '</table>';
	?>
	</div>

	<div class="tab_armes_Mun">
	<?php 
	$iterator = new SplFileObject('data/armes/stand_munition.txt');
	echo '<table class = "Armes">';
	echo '<tr><th colspan = 8 class = title_tab>Munition pour armes à Distance (Mun)</th></tr><tr><th>Nom</th><td class = "cell">Portée</td><td>Dégâts</td><td class = "cell">Type</td><td>Critique</td><td class = "cell">Poids</td><td>Prix</td><td class = "cell">Spécial(s)</td></tr>';
	foreach ($iterator as $line) {
		$arg = explode(",",$line);
		echo '<tr><th>' . $arg[0] . '</th>' . '<td class = "cell">' . $arg[1] . '</td>' . '<td>' . $arg[2] . '</td>' . '<td class = "cell">' . $arg[3] . '</td>' . '<td>' . $arg[4] . '</td>' . '<td class = "cell">' . $arg[5] . '</td>' . '<td>' . $arg[6] . '</td>' . '<td class = "cell">' . $arg[7] . '</td></tr>';
	}
	echo '</table>';
	?>
	</div>
</body>
</html>