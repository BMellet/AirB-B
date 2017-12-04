<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Projet AirBnB</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet"> 
	<script src="app.js"  type="text/javascript"></script>
</head>
<body>
<header class="liens">
	
		<div>	
			<img id="logo" src="img/logo.png">
		</div>
		<div class="top-btn" ><button>Connexion</button></div>
		<div class="top-btn" ><button>Inscription</button></div>
		<div class="top-btn" ><button>Aide</button></div>
		<div class="top-btn" ><button>Devenir hôte</button></div>
	
</header>
	<h1 id="title">
		<div id="big-title">Airbnb</br></div>
		
		<div id="sub-title">Réservez des <a href="" style="color: inherit; cursor: pointer; text-decoration: none;">logements</a> uniques et vivez là-bas comme des locaux.



		</div>
	</h1>

<div id="div-de-la-searchbar">
	<img id="loupe" src="img/loupe.png">
    <form action="" class="formulaire">
    <input class="champ" type="text" placeholder="Essayer <<Cahors>>"/>
    <input class="bouton" type="button" value="Rechercher" />
	</form>
</div>

<div id="explore">
	<h2>Explorer Airbnb</h2>


	<div class="exploBox">
		<div class="expIn">
			<div class="expBoxImg">
				<img class="expImg" src="img/bedroom1.jpg">
			</div>
			<div class="expBoxText">
				<span class="expText"><b>Logements</b></span>
			</div>			
		</div>
	</div>

	<div class="exploBox">
		<div class="expIn">
			<div class="expBoxImg">
				<img class="expImg" src="img/canoe.png">
			</div>
			<div class="expBoxText">
				<span class="expText"><b>Expériences</b></span>		
			</div>
		</div>
	</div>
	
	<div class="exploBox">
		<div class="expIn">
			<div class="expBoxImg">
				<img class="expImg" src="img/resto.png">
			</div>
			<div class="expBoxText">
				<span class="expText"><b>Restaurants</b></span>		
			</div>
		</div>
	</div>
		
</div>
<div class="experiences">
	<h3><b>Expériences</b></h3>

		<!--<form action="index.php" method="post"> 
		inserer un nom de ville : <input type="text" name="NewVille"><br> 
		<input type="submit" name="bt" value="valider"><br>-->
		<?php
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		
		?>

		<?php 
		$db = mysqli_connect('127.0.0.1','root','Mellet082217','airbnb')
		 or die('Error connecting to MySQL server.');
		
			$query = "SELECT nom_ville FROM ville" ;
			mysqli_query($db, $query) or die('Error querying database.');

			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_array($result); 
		?>
		
	<div class="box">
		<?php while ($row = mysqli_fetch_array($result)){ ?>
		<div class="Ex">
			<img class="photo" src="img/velo.png"><br>

			<div class="expsousphoto"> <?php echo $row['nom_ville']; ?>
			</div>

			<div class="text"><b>Learn to ride a vintage bicycle with the founder of</b>
			</div>

			<div class="prix">116€ par personne
			</div>

			<img class="star" src="img/etoile.png">
			<div class="chiffre">17</div>
		</div>
		<?php } ?>
	</div>


</div>
<div>
		<form action="index.php" method="post"> 
		inserer un nom de ville : <input type="text" name="NewVille"><br> 
		<input type="submit" name="bt" value="valider"><br>

		<?php

			$db = mysqli_connect('127.0.0.1','root','Mellet082217','airbnb')
		    or die('Error connecting to MySQL server.');

			$ville = $_POST['NewVille'];
		 	$bt = $_POST['bt'];

			function inserer($db,$ville)
			   {
			   		$add = "INSERT INTO `ville`(`nom_ville`) VALUES ('$ville')";
					mysqli_query($db, $add);

			   }

		 


			if (isset($bt) )
			{ 
					inserer($db,$ville);
			}  
		?>

</div>

		




	

		

</body>
</html>