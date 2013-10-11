<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Voicela</title>
		<link rel="stylesheet" type="text/css" href="text.css">
		<link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
		<section id="entete" role="entete" >
			<div><h4>Voicela</h4>
			<?php
				include("menu.php");
			?>
			</div>
		</section>
		<section id="main" role="main" >
			
			<h2>Liste VIP</h2>
				
			<?php

				function connect_db() 
				{
					$host="localhost";
					$user="root";
					$password="";
					$nombase="projet_vip";
					try {
						$bdd=new PDO('mysql:host='.$host.';dbname='.$nombase, $user, $password);
					}
					catch (Exception $e) {
						die('Erreur : '.$e->getMessage());
					}

					$bdd->exec("SET NAMES 'utf8'");
					return $bdd;
				}

				//Connexion à la base de donnée
				$bdd = connect_db();

				$req= $bdd->prepare('SELECT * from VIP' );
				$req->execute() or die (print_r($req->errorInfo()));
				$ligne = $req->fetch(PDO::FETCH_ASSOC);
				$taille = $req->rowCount();

				echo '<div id="content">';
				echo "<p>".$taille." VIP trouvé(es/s) dans la base de données</p>";
				echo '</div>';

				echo "<table border>";
				echo '<tr><th>ID</th>';
				echo '<th>Nom</th>';
				echo '<th>Prénom</th>';
				echo '<th>Nationalité</th>';
				echo '<th>Date de Naissance</th>';
				echo '<th>Lieu de Naissance</th>';
				echo '<th>Sexe</th>';
				echo '<th>Profession</th>';
				echo '<th>Est Marié</th>';
				echo '<th>Détails</th>';
				echo '<th>Photo(s)</th></tr>';

				do {
					if (!empty($ligne["prenom3"]))
						$prenom = $ligne["prenom1"].",".$ligne["prenom2"].",".$ligne["prenom3"];
					elseif (!empty($ligne["prenom2"])) 
						$prenom = $ligne["prenom1"].",".$ligne["prenom2"];
					else
						$prenom = $ligne["prenom1"];

					$newDate = date("d-m-Y", strtotime($ligne["datenaiss"]));

					if($ligne["etatmariage"] == 1)
						$mariage= 'Oui';
					else
						$mariage= 'Non';
					echo '<tr>';
						echo '<td>'.$ligne["idVIP"].'</td>';
						echo '<td>'.$ligne["nomVIP"].'</td>';
						echo '<td>'.$prenom.'</td>';
						echo '<td>'.$ligne["nationalite"].'</td>';
						echo '<td>'.$newDate.'</td>';
						echo '<td>'.$ligne["lieunaiss"].'</td>';
						echo '<td>'.$ligne["sexe"].'</td>';
						echo '<td>'.$ligne["type"].'</td>';
						echo '<td>'.$mariage.'</td>';
						echo "<td><a href='mariage.php?vip=".$ligne['idVIP']."'>Détails</a></td>";
						echo "<td><a href='photo.php?vip=".$ligne['idVIP']."'>Photo(s)</a></td>";
					echo '</tr>';
				} while ($ligne = $req->fetch(PDO::FETCH_ASSOC));
				$bdd=null;
				echo '</table>';
			?>
		</section>
		<?php include('footer.php'); ?>
	</body>
</html>