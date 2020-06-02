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
        <title>Test</title>
        
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
                    Ce test dure approximativement 5 minutes. <br> <br>
                    Lorsque vous entendez un son, essayez de le reproduire au mieux possible. Ce test mesure votre capacité à reproduire correctement un son.<br> <br>
                    Lorsque le son produit est identique à celui de référence, on admettra que le score sera égal à 100 points. Si les deux signaux sont différents, le pourcentage de différence entre les deux est ensuite calculé. Vous obtiendrez ainsi un score correspondant à la qualité de reproduction de la note jouée. 

                </p><br />

                <form method="post" action="../view/test-sound-reproduction-doing.php">
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