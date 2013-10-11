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

			//On regarde quel film a été choisis par l'utilisateur	
			$bdd = connect_db();

			$film = $_GET['film'];
			

			if (isset($film) && $film != "")
			{
				$reqmov = $bdd->prepare('SELECT idFilm FROM Film WHERE idFilm ='.$film);
				$reqmov->execute() or die (print_r($req->errorInfo()));
				$filmexist = $reqmov->fetch(PDO::FETCH_ASSOC);

				if ($filmexist != "") {

					//On récupère les informations du films
					$req= $bdd->prepare('SELECT * from Film where idFilm='.$film);
					$req->execute() or die (print_r($req->errorInfo()));
					$ligne = $req->fetch(PDO::FETCH_ASSOC);

					$newDate = date("d-m-Y", strtotime($ligne["dateFilm"]));

					echo '<div id="content">';
					echo '<img src="img/'.$ligne['titreFilm'].'.jpg"/>';
					echo '</div>';
					echo "<h2>Détail du film : ".$ligne['titreFilm']."</h2>";

					echo '<div id="content">';
					echo "Date de sortie : ".$newDate."</br>";
					echo "Réalisé par : ".$ligne['réalisateur']."</br>";
					echo '</div>';

					echo "<h2>Casting du film</h2>";

					$req->closeCursor();			

					//On récupère les actors du films
					$req2 = $bdd->prepare('SELECT NomVIP, Prenom1 from Casting, VIP where Casting.idFilm='.$film.' and Casting.idVIP=VIP.idVIP;');
					$req2->execute() or die (print_r($req->errorInfo()));
					$ligne2 = $req2->fetch(PDO::FETCH_ASSOC);
					
					//On l'affiche ensuite sous forme de tableau
					echo "<div id='tabcast'>";
					echo "<table border>";
					echo '<tr><th>Nom</th>';
					echo '<th>Prenom</th></tr>';
					do
					{
						echo '<tr>';
						foreach ($ligne2 as $v) {
							echo "<td>".$v."</td>";
							echo "\n";

						}
						echo '</tr>';
					} while($ligne2 = $req2->fetch(PDO::FETCH_ASSOC));
					$req2->closeCursor();
					echo '</table>';
					echo "</div>";
				}
			}
		?>
	</section>
<?php include('footer.php'); ?>
</body>
</html>