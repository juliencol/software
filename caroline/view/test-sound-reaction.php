<?php 
    include('../modele/connexion.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="_css/header.css" />
        <link rel="stylesheet" href="_css/footer.css" />
        <link rel="stylesheet" href="_csTestNotifications utilisateur</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-user.php'); ?>
        

        <section class="test-page">

            <div class="container">

                <div class="titre-page">
                    <h1>Temps de réaction à un son</h1>
                </div>

                <div id="container">

                <p class="text_explicatif">
                    Ce test dure approximativement 2 minutes. <br> <br>
                    Lorsque vous entendez un son, appuyez sur le bouton qui se trouve devant vous. <br> <br>
                    Il s'agit d'un test de rapidité. Plus vous êtes rapide à appuyer sur le bouton, plus votre score sera élevé. <br> <br>
                    Cependant, prenez garde à ne pas appuyer trop tôt. Si vous appuyez avant que le son ne se fasse entendre, vous devrez recommencer. 

                </p><br />

                <form method="post" action="../view/test-sound-reaction-doing.php">
                    <label>Veuillez rentrer le code du test : </label>
                    <input type="text" name="code" placeholder="Ex : 6248" maxlength="4"></p> 

                    <input type="submit" value="Commencer le test">
                </form> 
                    
                <form method="post" action="../view/user-notification.php"> 
                    <input type="submit" value="Retour" >
                </form>
    
                </form>
                
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>