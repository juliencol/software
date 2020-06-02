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

                <p class="text-explicatif">
                    Test en cours...
                </p>

                <div id="test-doing">
                    <?php 
                    $entered_code = $_POST['code'];
                    $codes = $bdd->query('SELECT code from test_codes WHERE test_type = "3"');

                    while ($c = $codes->fetch()) {

                        if (!empty($entered_code) AND $entered_code == $c['code']) {

                            $action1 = rand(0, 10);
                            $action2 = rand(0, 10);
                            $action3 = rand(0, 10);
                            $action4 = rand(0, 10);
                            $action5 = rand(0, 10);
                            $moyenne = ($action1 + $action2 + $action3 + $action4 + $action5) / 5;
                            //echo $react_moyenne;

                            //////////////////// LES ID ICI À MODIFIER ////////////////////
                            $test_code = 1234;
                            $user_id = 10554;
                            $type_type = 3; 
                            $score = $moyenne;
        
                            $results = $bdd->prepare('INSERT INTO test_results(test_code, user_id, test_type, score) VALUES(:test_code, :user_id, :test_type, :score)');
                            $results->execute(array(
                                    'test_code' => $test_code,
                                    'user_id' => $user_id,
                                    'test_type' => $type_type,
                                    'score' => $score
                                ));  
                        }

                        else {
                            header('location:test-light.php');
                        }
                    }      
                        
                    ?>
                </div>
                <br>
                
                    
                <div id="bouton">
                    <a href="../view/test-light-end.php">Terminer le test</a>	
                </div>
                            
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>