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
        <title>Résultats tests</title>

        
    </head>

    <body>
        <?php include('../view/_templates/header-user.php'); ?>
        

        <section id="user-profile-page">

            <div class="container">

                <h1 class="page-title">Résultats tests</h1>


                <div class="reaction-container">

                    <h3>Temps de réaction à un son</h3>

                    <section class="sound-reaction">
                        
                    </section>
                </div>


                <div class="react-container">

                    <h3>Capacité à reproduire un son</h1>

                    <section class="sound-reproduction">
                    
                    </section>
                    
                </div>

                
                    

                    
                
            </div>
        </section>

        <br />
        

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>