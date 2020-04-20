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
        <title>Test</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-user.php'); ?>
        

        <section class="test-page">

            <div class="container">

                <div class="titre-page">
                    <h1>Temps de réaction à un son</h1>
                </div>

                <div id="container">

                <div id="bouton">
	
                    <p><a href="../view/user-results">Voir les résultats</a></p>

                    <br><br><br>

                    <p><a href="../view/profile-user.php">Retour au profil </a></p>

                </div>
                                
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>