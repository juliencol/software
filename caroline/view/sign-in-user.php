<?php 
    include('../modele/connexion.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="_css/header.css" />
        <link rel="stylesheet" href="_css/footer.css" />
        <link rel="stylesheet" href="_css/base.css" />
        <title>Connexion gestionnaire</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header.php'); ?>
        

        <section id="sign-in-page">

            <div class="container">

                <div class="titre-page">
                    <h1>Connexion</h1>
                </div>

                <h3>Se connecter en tant que utilisateur </h3>


                <div class="sign-in-supervisor">
                    <form action="profile-user.php" method="post">
                    <div class="under-container">

                        <label for="email_connection">Adresse email : </strong></label>
                        <input type="text" name="email_connection" id="email_connection" required>

                        <label for="password-connection">Mot de passe : </strong></label>
                        <input type="password" name="password-connection" id="password-connection" required>

                        <input type="submit" class="connection-btn" name="connection-btn" value="Connexion">
                    
                    </form>
                </div>
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>