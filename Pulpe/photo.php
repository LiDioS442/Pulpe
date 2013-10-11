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
		<section id="entete" role="entete">
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

				$bdd = connect_db();

				$vip = $_GET['vip'];
				
				if (isset($vip) && $vip != "")
				{
					$reqmov = $bdd->prepare('SELECT idVIP, nomVIP, prenom1 FROM VIP WHERE idVIP ='.$vip);
					$reqmov->execute() or die (print_r($req->errorInfo()));
					$vipexist = $reqmov->fetch(PDO::FETCH_ASSOC);

					if ($vipexist != "") 
					{
						//On récupère les informations du films
						$req= $bdd->prepare('SELECT idPhoto from apparaitre where idVIP='.$vip);
						$req->execute() or die (print_r($req->errorInfo()));
						$ligne = $req->fetch(PDO::FETCH_ASSOC);

						if($ligne==true)
						{
							do
							{
								$req2= $bdd->prepare('SELECT adresse_photo from photo where idPhoto='.$ligne['idPhoto']);
								$req2->execute() or die (print_r($req->errorInfo()));
								$ligne2 = $req2->fetch(PDO::FETCH_ASSOC);
							
								echo '<div id="content">';
								echo '<img src="'.$ligne2['adresse_photo'].'"/>';
								echo '</div>';
								;
							} while($ligne = $req->fetch(PDO::FETCH_ASSOC));
						}
						else
						{
							echo '<div id="content">';
							echo "Il n'y a pas de photo de ".$vipexist['prenom1']." ".$vipexist['nomVIP'];
							echo '</div>';
						}
					}
				}
			?>
		</section>
		<?php include('footer.php'); ?>
	</body>
</html>