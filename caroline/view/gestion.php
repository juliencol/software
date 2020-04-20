<?php 
    require('../modele/connexion.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="_css/header.css" />
        <link rel="stylesheet" href="_css/footer.css" />
        <link rel="stylesheet" href="_css/base.css" />
        <title> STIMULUS - gestion</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-admin.php'); ?>
        
        <section id="gestion-page">
            
            <div class="container">

                <div class="titre-page">
                    <h1>Gestions</h1>
                </div>
                <br />

                <h2> <a href="../view/gestion-users.php">Gestion des utilisateurs</a> </h2>
                <h2> <a href="../view/faq-edit.php">Gestion de la Foire Aux Questions</a> </h2>
                <h2> <a href="../view/cgu-edit.php">Gestion des Conditions Générales d'Utilisation</a> </h2>

            </div>
        </section>

        <?php include('../view/_templates/footer.php'); ?>
        
    </body>
    
</html>