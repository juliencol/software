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
        <title> STIMULUS - Messagerie</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-admin.php'); ?>
        

        <section id="messagerie-page">
        
            <div class="container">
                
                <div class="titre-page">
                    <h1>Messagerie</h1>
                </div>

                <div id="messagerie-section">
                    <p>Vous n'avez de pas messages. </p>
                </div>

                
          
            </div>
        </section>

        <br /><br />
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>