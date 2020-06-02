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
        <title>Accueil</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header.php'); ?>
        

        <section id="home-page">

            <div class="container">

                <div class="top-container">
                    <div class="top-container-text">
                        <h1>INFINITES MEASURES</h1>
                        <p>Le système qui vous aide à mesurer vos réflexes !</p>
                    </div>
                </div>

                <div class="middle-container">
                    <div class="middle-container-left">
                        <p>Vous souhaitez consulter vos résultats ? <strong>Connectez-vous !</strong></p>
                        <a href="../view/sign-in.php">Se connecter</a>
                    </div>
                    
                    <div class="middle-container-right">
                        <p>Pas encore de compte chez nous ? <strong>Inscrivez-vous !</strong></p>
                        <a href="<?php echo URLROOT; ?>users/sign_up" class="btn-primary">S'inscrire</a>
                    </div>
                </div>

                
            </div>
        </section>

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>