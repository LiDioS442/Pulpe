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
		
		<h2>Galerie</h2>
			
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

			$req= $bdd->prepare('SELECT adresse_photo from Photo');
			$req->execute() or die (print_r($req->errorInfo()));
			$ligne = $req->fetch(PDO::FETCH_ASSOC);
			$taille = $req->rowCount();

			echo '<div id="content">';
			echo "<p>".$taille." photos trouvées dans la base de données</p>";
			


			do {
				
				foreach ($ligne as $v) {
					echo '<img src='.$v.' width="300" height="240">';
				}
			} while ($ligne = $req->fetch(PDO::FETCH_ASSOC));
			$bdd=null;
			echo '</div>';
		?>

	</section>
<?php include('footer.php'); ?>
</body>
</html>