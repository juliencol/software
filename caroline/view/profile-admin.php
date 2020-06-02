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
        <title>Profil administrateur</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-admin.php'); ?>
        

        <section id="admin-profile-page">

            <div class="container">

                <div class="titre-page">
                    <h1>Profil administrateur</h1>
                </div>

                <div id="container">
                    <section>
                        <aside>
                            <div id="photo"></div>
                            <button>Changer la photo</button>
                        </aside>
                        <article>
                            <h3>ADMINISTRATEUR</h3>
                            <p>Nom : Prénom : </p>
                            <p>Date de naissance : </p>

                            <button>Editer le profil</button>
                        </article>
                    </section>
                    <br/>

                </div>
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>