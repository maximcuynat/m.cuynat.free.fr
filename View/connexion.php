<?php
	session_start();

	@$login = $_POST['login'];
    @$pass = $_POST['pass'];
    @$valider = $_POST['valider'];
    $erreur = "";

     if(isset($valider)){
     	// Demmande de connexion
     	if ($login == "") {
     		$erreur = $erreur." Utilisateur invalide ! ";
     	}
     	if ($pass == "") {
     		$erreur = $erreur." Mot de passe invalide ! ";
     	}
     }


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
		<title>Connexion</title>
	</head>
	<body class="bg-asphalt">
		<header>
			<div class="responsive display-flex al-it-center flex-column">
				<?php require_once 'menu.php' ?>
				<div>
					<h1 class="text-white text-center display-5 mb-0 mt-0">Connexion à votre espace personel</h1>
				</div>
			</div>
		</header>
		<main class="bg-midnightBlue text-white mt-5 p-2 rounded-3 responsive display-flex flex-column al-it-center text-center">

			<!-- Formulaire de conneixon -->
			<form action="" method="post">
				<div><h3 class="fs-3 mb-1">Nom d'utilisateur</h3></div>
				<div><input type="text" name="user" placeholder="Username" class="form-control fs-5 mt-0 rounded-2 p-2 text-center"></div>
				<div><h3 class="fs-3 mb-1">Mot de passe</h3></div>
				<div>
					<input id="password" type="password" name="password" placeholder="Password" class="form-control fs-5 mt-0 rounded-2 p-2 text-center">
					<p onclick="voirMdp()" class="cursor-pointer text-center fs-5 my-3 mt-1">Voir le mot de passe</p>
				</div>
				<div><input type="submit" name="valider" value="Se connecter" class="fs-4 rounded-2 p-2" /></div>
				
				<!-- Affichage du message d'erreur ( commentaire pour Lisa  ^^ yip) -->
                <?php if(!empty($erreur)){ ?>
                <div id="erreur">
                    <!-- Récupérations de la valeur erreur -->
                    <p class="fs-4"><?=$erreur?></p>
                </div>
                <?php } ?>
			</form>
			<div><h5><a href="inscriptions.php" class="fs-5" id="voirMdp">Je n'ai pas de compte !</a></h5></div>
		</main>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/main.js"></script>
</html>