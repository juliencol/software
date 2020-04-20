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
        <title>Qui sommes-nous</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header.php'); ?>
        

        <section id="presentation-team-page">
        
            <div class="container">
                
                <div class="titre-page">
                    <h1>L'équipe Stimulus</h1>
                </div>

                <div id="presentation-text">
                    <p>STIMULUS est une entreprise composée de six jeunes ingénieurs ambitieux </p>
                </div>

                <div id="membres-team">
                    <div id="first-row">
                        <figure id="paul">
                            <a href="_img/_equipe/paul.jpg"><img src="_img/_equipe/paul_small.jpg" alt ="paul-photo" target ="_blank" title = "Paul" class="paul-photo"/></a>
                            <figcaption>Paul CHANSOU</figcaption>
                        </figure>

                        <figure id="julien">
                            <a href="_img/_equipe/julien.jpg"><img src="_img/_equipe/julien_small.jpg" alt ="julien-photo" target ="_blank" title = "Julien" class="julien-photo"/></a>
                            <figcaption>Julien COLOMBAIN</figcaption>
                        </figure>
                        
                        <figure id="cyprian">
                            <a href="_img/_equipe/cyprian.jpg"><img src="_img/_equipe/cyprian_small.jpg" alt ="cyprian-photo" target ="_blank" title = "Cyprian" class="cyprian-photo"/></a>
                            <figcaption>Cyprian CUNIN</figcaption>
                        </figure>
                    </div>

                    <div id="second-row">
                        <figure id="gabriel">
                            <a href="_img/_equipe/gabriel.png"><img src="_img/_equipe/gabriel_small.png" alt ="gabriel-photo" target ="_blank" title = "Gabriel" class="gabriel-photo"/></a>
                            <figcaption>Gabriel ENRIQUEZ</figcaption>
                        </figure>

                        <figure id="celia">
                            <a href="_img/_equipe/celia.jpg"><img src="_img/_equipe/celia_small.jpg" alt ="celia-photo" target ="_blank" title = "Celia" class="celia-photo"/></a>
                            <figcaption>Célia HOULETTE</figcaption>
                        </figure>

                        <figure id="caroline">
                            <a href="_img/_equipe/caroline.jpg"><img src="_img/_equipe/caroline_small.jpg" alt ="caroline-photo" target ="_blank" title = "Caroline" class="caroline-photo"/></a>
                            <figcaption>Caroline YAN</figcaption>
                        </figure>
                    </div>

                </div>
          
            </div>
        </section>

        <br /><br />
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>