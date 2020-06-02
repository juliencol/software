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
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">

                    // Load the Visualization API and the corechart package.
                    google.charts.load('current', {'packages':['corechart']});

                    // Set a callback to run when the Google Visualization API is loaded.
                    google.charts.setOnLoadCallback(drawChartReaction);

                    google.charts.setOnLoadCallback(drawChartReproduction);

                    // Callback that creates and populates a data table,
                    // instantiates the pie chart, passes in the data and
                    // draws it.
                    function drawChartReaction() {

                        // Create the data table.
                        var data = google.visualization.arrayToDataTable([
                            ['Date', 'Temps'],

                            <?php
                            $sql = "SELECT * FROM test_results WHERE test_type = '3'";
                            foreach ($bdd->query($sql) as $graph) {
                                echo '["' . $graph['date'] . '", ' . $graph['score'] .'],';
                            }
                            ?>
                        ]);

                        var options = {
                        title: 'Temps moyen de réaction à son',
                        hAxis: {title: 'Date du test',  titleTextStyle: {color: '#333'}},
                        vAxis: {minValue: 0}

                        };

                        var chart = new google.visualization.AreaChart(document.getElementById('chart_div_reaction'));
                        chart.draw(data, options);
                    }
                    </script>
                    <div id="chart_div_reaction" style="width: 100%; height: 500px;"></div>

                    <div id="bouton">
                        <a href="../view/profile-user.php">Retour</a>	
                    </div>
        

                </div>
                
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>