<?php 
session_start();
 $messageEtat=  ""; 
 if (isset($_POST['utilisateur']) && isset($_POST['mdp']) )  {
	 $host = '192.168.0.250'; 
	 $user = 'adminIot'; 
	 $password = 'bonjour'; 
	 $base = 'iotsun'; 
	 $connexion = mysqli_connect('192.168.0.250', $user, $password, $base); 
	 if ($connexion) {  
		$login = $_POST['utilisateur'];  
		$motDePasse = ($_POST['mdp']);  
		$requete = 'SELECT uti_log, uti_mdp FROM utilisateur WHERE uti_log="'.$login.'" AND uti_mdp = "'.$motDePasse.'"';  
		if (($resultat = mysqli_query($connexion,$requete))) {   
			$nombreLigne = mysqli_num_rows($resultat);   
			if ($nombreLigne == 0)  {   
				$messageEtat = "La connexion a  échoué !";    
			} 
			else {    
				$ligne=mysqli_fetch_assoc($resultat);                  
				$_SESSION['utilisateurValide'] = 1;    
				$messageEtat = "La connexion a réussi.";  
			}   mysqli_free_result($resultat);  
		}   mysqli_close($connexion); 
	 } else $messageEtat = "Entrez vos identifiants.";  
	}  
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>IOT Sun</title>
  <meta charset="utf-8">
  <?php 
	if (isset($_SESSION['utilisateurValide'])) {   
		if ($_SESSION['utilisateurValide'] == 1) {     
			echo '<meta http-equiv="refresh" content="2; URL=accueil.php">';
		}   
	} 
 ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
	body {
	background-color: #bdbdbd
	}
	
	.jumbotron{
	background-color: #fff;
	width: 50%;
	margin:auto;
	}

    .navbar {
    margin-bottom: 0;
    z-index: 9999;
    border: 0;
    font-size: 30px;
    line-height: 1.42857143;
    letter-spacing: 4px;
    border-radius: 0;
	}
	
	.navbar-brand{
	font-size: 30px;
	}
	
	h1{
	text-align: center;
	}
	
	.navbar-default {
    margin-bottom: 0;
	background-color: transparent;
    z-index: 9999;
    border: 0;
    font-size: 14px;
    line-height: 1.42857143;
    letter-spacing: 4px;
    border-radius: 0;
	}	
	
	.entrée{
		width: 50%;
	}
</style>

<body style="font-family:verdana;">
<nav class="navbar navbar-inverse">
	<ul class="nav navbar-nav">
		<li><img src="logoIOT.png" width="80"></li>
	</ul>
</nav>

<form action="index.php" method="post">
<h1>Bienvenue sur IOT SUN</h1>
<div class="container"> 
  <br><br>
	<div class="jumbotron text-center">
		<div class="form-group">
			<p>Nom d'utilisateur:</p>
			<input type="text" class="entrée" name="utilisateur">
			<br><br>
			<p>mot de passe:</p>
			<input type="password" class="entrée" name="mdp" >
			<br><br>
			<input class="btn btn-default" type="submit" name="connecter" value="connecter">
		</div>
	</div>
</div>
<p class="center"><?php echo $messageEtat; ?></p>
</form>

 <footer>
 <nav class="nav navbar-default navbar-fixed-bottom">
   <p>site créer par Gauvin Ludovic</p>
 </nav>
</footer>

</body>
</html>