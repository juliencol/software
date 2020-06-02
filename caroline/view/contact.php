<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="_css/header.css" />
    <link rel="stylesheet" href="_css/footer.css" />
    <link rel="stylesheet" href="_css/base.css" />
    <link rel="stylesheet" type="text/css" href="../view/_css/contact_utilisateur_version_mail.css">
    <title>Contact</title>
</head>
<body>

    <?php include('../view/_templates/header-user.php'); ?>


    <section id="contact-page">
        <div class="container">
            <div class="titre-page">
                <h1>Contact</h1>
            </div>

            <form method="post" action="contact-envoi.php">
                
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
        </div>
    </section>

    


	<?php include('../view/_templates/footer.php'); ?>

</body>
</html>