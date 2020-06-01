
<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/sign_in.css'; ?> </style>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Stimulus</title>
	<link rel="stylesheet" type="text/css" href="mail.css">
</head>
<body>


<h1>Contact</h1>

	<form method="post" action="envoi_mail_2.php">
		
		<p>
		<label for="expediteur">Expéditeur : indiquez ici votre adresse email </label> <br> <br>
		<input type="email" name="expediteur" id="expediteur" class="contact" required>
		</p>


		<p>
		<label for="objet">Objet : indiquez ici l'objet de votre message </label> <br> <br>
		<input type="text" name="objet" id="objet" class="contact">
		</p>

		<p>
		<label for="message">Votre message : </label> <br> <br>
		<textarea id="message" name="message" class="contact">	</textarea>
		</p>

		<div id="envoyer">
		<input type="submit" name="Envoyer">
		</div>

	</form>

<?php require APPROOT . '/views/inc/footer.php'; ?> 

</body>
</html>

