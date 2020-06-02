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
        <title>Recherche</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-supervisor.php'); ?>
        

        <section id="research-page">

            <div class="container">

                <div class="titre-page">
                    <h1>Page de recherche</h1>
                </div>

                

                <?php 
                    require('../controllers/req-research.php');
                ?>

                <div class="research">     

                    <form method="post" action="">

                        <div class="research-who">
                            <h3>Qui voulez-vous rechercher ?</h3>
                        </div> 
                        
                        <div class="research-bar">
                            <input type="search" name="research" value="<?php if (isset($research)) { echo $research; }?>" placeholder="Rechercher..."/> <?php //récupère la dernire recherche ?>
                        </div>

                        <div class="research-refine">
                            <p> Sexe :
                            <input type="radio" name="gender" value="female" id="female" /><label for="female"> Femme</label>
                            <input type="radio" name="gender" value="male" id="male" /><label for="male"> Homme</label>
                            <input type="radio" name="gender" value="other" id="other" /><label for="other"> Autre</label>
                            </p>

                            <p>Nom de l'entreprise :
                            <input type="text" name="company" />
                            </p>
                        </div>

                        <input type="submit" name="submit_research" value="Rechercher" />

                    </form>
                </div>



                <br /><br />

                <?php 
                if (isset($results) AND !empty($results)) {

                    if($results->rowCount() > 0) {
                        echo '<h3>Résultats de la recherche <em>' . $research . '</em></h3>';
                        echo '<ul>';

                        while ($r = $results->fetch()) { 
                            echo '<li><strong>' . $r['first_name'] . ' ' . $r['last_name'] . '</strong><br />';
                            echo 'Entreprise : ' . $r['company_name'] . '<br />'; 
                            echo 'Numéro employé : ' . $r['employee_number'] . '<br />';
                            echo 'Date de naissance : ' . $r['birthdate'] . " / Sexe : " . $r['gender'] . '<br />';
                            echo 'Email : ' . $r['email'] . '</li><br />';
                        }
                        echo '</ul>';
        
                    } else {
                        echo 'Aucun résultat.<br /><br />';
                    }
                }
                ?>



            </div>
        </section>

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>