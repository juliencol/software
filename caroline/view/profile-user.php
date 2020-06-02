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
        <title>Profil utilisateur</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-user.php'); ?>
        

        <section id="user-profile-page">

            <div class="container">

                <div class="titre-page">
                    <h1>Profil utilisateur</h1>
                </div>

                <div id="container">

                    <section>
                        <aside>
                            <div id="photo"></div>
                            <button>Changer la photo</button>
                        </aside>
                        <article>
                            <h3>UTILISATEUR</h3>
                            <p>Nom :  </p>
                            <p> Prénom : </p>
                            <p>Date de naissance : </p>
                            <p>Numéro d'employé : </p>
                            <p>Entreprise : </p>
                            <button>Editer le profil</button>
                        </article>
                    </section>
                    <br/>
                    <h2>Consulter les résultats des tests</h2>
                    <h4><a href="../view/chart-reaction.php">Temps de réaction à une lumière</a></h4>
                    <h4><a href="../view/chart-reproduction.php">Capacité à reproduire un son</a></h4>
                    <h4><a href="../view/chart-light.php">Temps de réaction à une lumière</a></h4>
                </div>
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>