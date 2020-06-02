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
        <title>Connexion</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header.php'); ?>
        

        <section id="sign-in-page">

            <div class="container">

                <div class="titre-page">
                    <h1>Connexion</h1>
                </div>

                <div class="who-are-you-section">
                    <p>Vous êtes ?</p>
                    <div class="who_are_you">
                        <a class="btn-primary" href="../view/sign-in-user.php">Utilisateur</a>
                        <a class="btn-primary" href="../view/sign-in-supervisor.php">Gestionnaire</a>
                        <a class="btn-primary" href="../view/sign-in-user.php">Administrateur</a>
                    </div>
                </div>
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>