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
        <title>Profil gestionnaire</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-user.php'); ?>
        

        <section id="user-profile-page">

            <div class="container">

                <div class="titre-page">
                    <h1>Résultats tests</h1>
                </div>

                <div id="container">


                    <h3>Temps de réaction à un son</h1>
                    <section>
                        <article class="resultTestManquant">
                            <p>Aucun test n'a été effectué</p>
                        </article>
                    </section>

                    <h3>Capacité à reproduire un son</h1>
                    <section>
                        <aside class="listeTests">
                            <p>Test numéro 0</p>
                            <br><br>
                        </aside>
                        <article class="resultTest">
                            <br><br>
                        </article>
                    </section>

                    <h3>Temps de réaction à une lumière</h1>
                    <section>
                        <aside class="listeTests">
                            <p>Test numéro 0</p>
                            <br><br>
                        </aside>
                        <article class="resultTest">
                            <br><br>
                        </article>
                    </section>
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>