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
        <title>Notifications utilisateur</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-user.php'); ?>
        

        <section id="user-notifications-page">

            <div class="container">

                <div class="titre-page">
                    <h1>Temps de réaction à un son</h1>
                </div>

                <div id="container">

                <p class="text_explicatif">
                    Test en cours...
                </p>
                    
                <div id="bouton">

                    <a href="../view/test-sound-reaction-end.php">Terminer le test</a>	

                </div>
                            
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>