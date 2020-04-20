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
                    <h1>Notifications</h1>
                </div>

                <div id="container">

                <article class="resultTestManquant">
                    <p>Vous avez été invité à faire le test de <strong>réaction à un son</strong>. Cliquez <a href="../view/test-sound-reaction.php">ici</a> pour lancer le test.</p>
                    <p>Vous avez été invité à faire le test de <strong>reproduction de son</strong>. Cliquez <a href="">ici</a> pour lancer le test.</p>
                    <p>Vous avez été invité à faire le test de <strong>réaction à une lumière</strong>. Cliquez <a href="">ici</a> pour lancer le test.</p>

                </article>
                </div>
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>