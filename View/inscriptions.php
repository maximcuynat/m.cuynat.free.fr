<?php
	session_start();

	@$Username = $_POST['user'];
    @$Password = md5($_POST['password']);
    @$Mail = $_POST['email'];
    @$notif = $_POST['notifications'];
    @$valider = $_POST['valider'];

    if(isset($valider))
    {
    	require_once '../Controller/ManagerUser.php';
    	$user = new ManagerUser();
    	$user->addUser($Username, $Password, $Mail, $notif);
    }


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
		<title>Inscriptions</title>
	</head>
	<body class="bg-asphalt">
		<header>
			<div class="responsive display-flex al-it-center flex-column">
				<?php require_once 'menu.php' ?>
				<div>
					<h1 class="text-white text-center display-5 mb-0 mt-0">Formulaire d'inscriptions</h1>
				</div>
			</div>
		</header>
		<main class="bg-midnightBlue text-white mt-5 p-2 rounded-3 responsive display-flex flex-column al-it-center text-center">

			<!-- Formulaire de conneixon -->
			<form action="" method="post">
				<div><h3 class="fs-3 mb-1">Nom d'utilisateur</h3></div>

				<div><input type="text" name="user" placeholder="Nom d'utilisateur" class="form-control fs-5 mt-0 rounded-2 p-2 text-center" required></div>
				
				<div><h3 class="fs-3 mb-1">Mot de passe</h3></div>
				
				<div>
					<input id="password" type="password" name="password" placeholder="Mot de passe" class="form-control fs-5 mt-0 rounded-2 p-2 text-center my-2">
				</div>

				<div>
					<input id="password" type="password" name="password" placeholder="Valider le mot de passe" class="form-control fs-5 mt-0 rounded-2 p-2 text-center">
					<p onclick="voirMdp()" class="cursor-pointer text-center fs-5 my-2">Voir le mot de passe</p>
				</div>

				<div><h3 class="fs-3 mb-1">Vôtre adresse e-mail</h3></div>
				<div><input type="email" name="email" placeholder="Adresse E-mail" class="form-control fs-5 mt-0 rounded-2 p-2 text-center" required></div>
				
				<div><h2>Notifications ?</h2></div>
				<div><input type="checkbox" name="notifications">Recevoir des notifications des nouvelles publications ?</div>

				<!-- submit -->
				<div><input type="submit" name="valider" value="Se connecter" class="fs-4 rounded-2 p-2 my-4" /></div>
				
				<!-- Affichage du message d'erreur ( commentaire pour Lisa  ^^ yip) -->
                <?php if(!empty($erreur)){ ?>
                <div id="erreur">
                    <!-- Récupérations de la valeur erreur -->
                    <p class="fs-4"><?=$erreur?></p>
                </div>
                <?php } ?>
			</form>
		</main>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/main.js"></script>
</html>