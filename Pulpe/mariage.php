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

				$bdd = connect_db();

				$vip = $_GET['vip'];
				
				if (isset($vip) && $vip != "")
				{
					$reqmov = $bdd->prepare('SELECT idVIP FROM VIP WHERE idVIP ='.$vip);
					$reqmov->execute() or die (print_r($req->errorInfo()));
					$vipexist = $reqmov->fetch(PDO::FETCH_ASSOC);

					if ($vipexist != "") 
					{
						//On récupère les informations du films
						$req= $bdd->prepare('SELECT * from VIP where idvip='.$vip);
						$req->execute() or die (print_r($req->errorInfo()));
						$ligne = $req->fetch(PDO::FETCH_ASSOC);

						$newDate = date("d-m-Y", strtotime($ligne["datenaiss"]));

						echo "<h2>Détail du VIP : ".$ligne['prenom1']." ".$ligne['nomVIP']."</h2>";

						echo '<div id="content">';

						echo $ligne['prenom1']." ".$ligne['nomVIP']. " est un ".$ligne['type']." célèbre, il est né le ".$newDate." dans la ville 
						de ".$ligne['lieunaiss']." et est donc " .$ligne['nationalite'].". Ci-Dessous vous pouvez voir ces précédents Mariage(s) et/ou Divorce(s).";

						echo '</div>';

						$req2 = $bdd->prepare('SELECT idVIP, idConjoint, lieuMariage, dateMariage FROM mariage WHERE idVIP='.$vip.' OR idConjoint='.$vip.';');
						$req2->execute() or die (print_r($req->errorInfo()));
						$ligne2 = $req2->fetch(PDO::FETCH_ASSOC);

						if($ligne2==true)
						{
							if($ligne2['idVIP']==$vip)
							{
								$req3 = $bdd->prepare('SELECT nomVIP, prenom1 FROM VIP WHERE idVIP='.$ligne2['idConjoint'].';');
								$req3->execute() or die (print_r($req->errorInfo()));
								$ligne3 = $req3->fetch(PDO::FETCH_ASSOC);
							}
							else
							{
								$req3 = $bdd->prepare('SELECT nomVIP, prenom1 FROM VIP WHERE idVIP='.$ligne2['idVIP'].';');
								$req3->execute() or die (print_r($req->errorInfo()));
								$ligne3 = $req3->fetch(PDO::FETCH_ASSOC);
							}

							$newDateMariage = date("d-m-Y", strtotime($ligne2["dateMariage"]));

							//On l'affiche ensuite sous forme de tableau
							echo "<div id='tabcast'>";
							echo "<table border>";
							echo '<th>Nom</th>';
							echo '<th>Prénom</th>';
							echo '<th>Lieu de Mariage</th>';
							echo '<th>Date du Mariage</th></tr>';
							do
							{
								echo '<tr>';
									echo '<td>'.$ligne3["nomVIP"].'</td>';
									echo '<td>'.$ligne3["prenom1"].'</td>';
									echo '<td>'.$ligne2["lieuMariage"].'</td>';
									echo '<td>'.$newDateMariage.'</td>';
								echo '</tr>';
							} while($ligne2 = $req2->fetch(PDO::FETCH_ASSOC));
							$req2->closeCursor();
							echo '</table>';
							echo "</div>";
						}
						else
						{ 
							echo '<div id="content">';
							echo "<p> n'a jamais été marié</p>";
							echo '</div>';
						}

						$req4 = $bdd->prepare('SELECT exidVIP, idVIP, dateDivorce FROM divorce WHERE idVIP='.$vip.' OR exidVIP='.$vip.';');
						$req4->execute() or die (print_r($req->errorInfo()));
						$ligne4 = $req4->fetch(PDO::FETCH_ASSOC);

						if($ligne4==true)
						{
							if($ligne4['idVIP']==$vip)
							{
								$req5 = $bdd->prepare('SELECT nomVIP, prenom1 FROM VIP WHERE idVIP='.$ligne4['exidVIP'].';');
								$req5->execute() or die (print_r($req->errorInfo()));
								$ligne5 = $req5->fetch(PDO::FETCH_ASSOC);
							}
							else
							{
								$req5 = $bdd->prepare('SELECT nomVIP, prenom1 FROM VIP WHERE idVIP='.$ligne4['idVIP'].';');
								$req5->execute() or die (print_r($req->errorInfo()));
								$ligne5 = $req5->fetch(PDO::FETCH_ASSOC);
							}

							$newDateDivorce = date("d-m-Y", strtotime($ligne4["dateDivorce"]));

							echo "<div id='tabcast'>";
							echo "<table border>";
							echo '<th>Nom</th>';
							echo '<th>Prénom</th>';
							echo '<th>Date du Divorce</th></tr>';
							do
							{
								echo '<tr>';
									echo '<td>'.$ligne5["nomVIP"].'</td>';
									echo '<td>'.$ligne5["prenom1"].'</td>';
									echo '<td>'.$newDateDivorce.'</td>';
								echo '</tr>';
							} while($ligne4 = $req4->fetch(PDO::FETCH_ASSOC));
							$req2->closeCursor();
							echo '</table>';
							echo "</div>";
						}
						else
						{ 
							echo '<div id="content">';
							echo "<p> n'a jamais été divorcé</p>";
							echo '</div>';
						}
					}
				}
			?>
		</section>
		<?php include('footer.php'); ?>
	</body>
</html>