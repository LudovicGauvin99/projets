<?php   session_start();    
	// Détruit toutes les variables de session   
	$_SESSION = array();       
	// Effacer le cookie de session   
	if (ini_get('session.use_cookies')) {
		$params = session_get_cookie_params();
		setcookie(session_name(),'',time() - 4200, $params['path'], $params['domain'], $params['secure'], $params['httponly']);   
	}     
	// Détruit la session   session_destroy(); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>IOT Sun</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
	body {
	background-color: #bdbdbd
	}
	
    .navbar {
    margin-bottom: 0;
    z-index: 9999;
    border: 0;
    font-size: 14px;
    line-height: 1.42857143;
    letter-spacing: 4px;
    border-radius: 0;
	}
	
	.navbar-brand{
	font-size: 30px;
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
	
	.jumbotron{
	background-color: #bdbdbd;
	font-size: 30px;
	text-align: center
	}
	
	a{
	color:black;
	}
	
	
</style>

<body style="font-family:verdana;">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
	<ul class="nav navbar-nav">
		<li><img src="logoIOT.png" width="80"></li>
		<li><a href="accueil.php">accueil</a></li>
		<li><a href="temperature.php">température</a></li>
		<li><a href="vibration.php">vibration</a></li>
		<li><a href="localisation.php">localisation</a></li>
		<li><a href="alerte.php">alertes</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> déconnection </a></li>
	</ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="jumbotron ">
	<p><a href="temperature.php">Température       <img src="thermo.png" width="50"></img></a></p>
	<br>
	<p class="quentin"><a href="vibration.php">Vibration         <img src="vib.png" width="50"></img></a></p>
	<br>
	<p><a href="localisation.php">localisation      <img src="gps.png" width="50"></img></a></p>
	<br>
	<p><a href="alerte.php">alertes      <img src="warning.png" width="50"></img></a></p>
</div>
</div>

 <footer>
 <nav class="nav navbar-default navbar-fixed-bottom">
   <p>site créer par Gauvin Ludovic</p>
 </nav>
</footer>

</body>
</html>