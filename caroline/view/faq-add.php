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
        <title> Stimulus - FAQ</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-admin.php'); ?>
        

        <section id="faq-page">
        
            <div class="container">
                
                <div class="titre-page">
                    <h1>Modifier la foire aux questions</h1>
                </div>
                
                <h3>Ajouter une question</h3>

                <form class="form" action="FAQ_adminGestion.html">
                    <div class="form">
                    <div>
                        <input type="text" name="Sujet" id="sujet" placeholder="Sujet">
                    </div>
                    <div>
                        <input type="text" name="Question" id="question" placeholder="Question">
                    </div>
                    <div>
                        <textarea name="message" id="message" cols="100" rows="20" placeholder="Message"></textarea>
                    </div>
                    </div>
                    <input type="submit" value="Enregistrer">
                </form>

                <br />

                <a href="../view/faq-edit.php">Retour</a>

            </div>
        </section>

        <br /><br />
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>