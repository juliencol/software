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
                            <p>Nom : Prénom : </p>
                            <p>Date de naissance : </p>
                            <p>Numéro d'employé : </p>
                            <p>Entreprise : </p>
                            <button>Editer le profil</button>
                        </article>
                    </section>
                    <br/>
                    <h3><a href="../view/user-results.php">Consulter les résultats de ses tests</a></h3>
                </div>
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>