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
	<div class ="wrap">
	<section id="entete" role="entete" >
		<div><h4>Voicela</h4>
		<?php
			include("menu.php");
		?>
		</div>
	</section>
		<section id="main" role="main" >
		
			<h2>Présentation</h2>
			<h3>L'idée</h3>
			
			<p class="col2">Le journal <strong>Voicela</strong> est spécialisé dans la diffusion d'informations <em>"people"</em>. Afin de permettre aux lecteurs
			et surtout aux lectrices d'être informés au mieux sur la vie des V.I.P. (<em>Very Important Person</em>).
			</p>
		</section>

		<span id="sl_play" class="sl_command">&nbsp;</span>
		<span id="sl_pause" class="sl_command">&nbsp;</span>
		<span id="sl_i1" class="sl_command sl_i">&nbsp;</span>
		<span id="sl_i2" class="sl_command sl_i">&nbsp;</span>
		<span id="sl_i3" class="sl_command sl_i">&nbsp;</span>
		<span id="sl_i4" class="sl_command sl_i">&nbsp;</span>
		
		<section id="slideshow">
		
			<a class="commands prev commands1" href="#sl_i4" title="Go to last slide">&lt;</a>
			<a class="commands next commands1" href="#sl_i2" title="Go to 2nd slide">&gt;</a>
			<a class="commands prev commands2" href="#sl_i1" title="Go to 1rst slide">&lt;</a>
			<a class="commands next commands2" href="#sl_i3" title="Go to 3rd slide">&gt;</a>
			<a class="commands prev commands3" href="#sl_i2" title="Go to 2nd slide">&lt;</a>
			<a class="commands next commands3" href="#sl_i4" title="Go to 4th slide">&gt;</a>
			<a class="commands prev commands4" href="#sl_i3" title="Go to 3rd slide">&lt;</a>
			<a class="commands next commands4" href="#sl_i1" title="Go to first slide">&gt;</a>
			
			<a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
			<a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
			
			<div class="container">
				<div class="c_slider"></div>
				<div class="slider">
					<figure>
						<img src="img/Django.jpg" alt="" width="640" height="310" />
						<figcaption>Django</figcaption>
					</figure><!--
					--><figure>
						<img src="img/Parker.jpg" alt="" width="640" height="310" />
						<figcaption>Parker</figcaption>
					</figure><!--
					--><figure>
						<img src="img/Transformers3.jpg" alt="" width="640" height="310" />
						<figcaption>Transformers3</figcaption>
					</figure><!--
					--><figure>
						<img src="img/Star_Trek.jpg" alt="" width="640" height="310" />
						<figcaption>Star Trek</figcaption>
					</figure>
				</div>
			</div>
			
			<span id="timeline"></span>
			
			<ul class="dots_commands"><!--
				--><li><a title="Show slide 1" href="#sl_i1">Slide 1</a></li><!--
				--><li><a title="Show slide 2" href="#sl_i2">Slide 2</a></li><!--
				--><li><a title="Show slide 3" href="#sl_i3">Slide 3</a></li><!--
				--><li><a title="Show slide 4" href="#sl_i4">Slide 4</a></li>
			</ul>
			
		</section>
		
		<section id="main" role="main" >
			<h3>Qu'est ce qu'un VIP??</h3>
			<p class="col2">Un VIP est une personne publique connue, voire célèbre très rarement issu du monde des sciences mais grativant plutôt dans la nébuleuse
			du show-biz, des médias, de la mode ou encore de la politique.</p>
			
			<h3>Que peut on faire avec VOICELA?</h3>
			<p class="content">Afin de répondre aux attentes de sa clientèle toujours avide de spéctaculaire VOICELA donne la possibilité de: </p>
			<p>
				<ul class="listpresentation"><!--
					--><li>Connaître les VIP en long et en large grâce à notre base de donnée bien rempli</li><!--
					--><li>Connaître les différents évènements liés à la vie des VIP (Mariage et Divorce)</li><!--
					--><li>De visualiser les photos sur lesquelles apparaît tel ou tel VIP</li><!--
					--><li>Connaître les différentes participations des VIP à des films (Acteurs et Réalisateur)</li>
				</ul>
			</p>

		</section>
		</div>
	<?php include('footer.php'); ?>
</body>
</html>