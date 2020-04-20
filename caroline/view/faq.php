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
                    <h1>Foire aux questions</h1>
                </div>
                
                <br/>

                <table> 
                    <thead>
                        <tr>
                            <td>
                                Sujet 1
                            </td>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td>Question 1 ?</td>
                    </tr>
                    <tr>
                        <td class="reponse">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad possimus voluptatum provident molestiae quod. Incidunt quod ipsa, sunt nam exercitationem, a soluta sequi quo est praesentium quia deleniti alias numquam?
                        </td>
                    </tr>
                </tbody>
                </table>

                <table> 
                    <thead>
                        <tr>
                            <td>
                            Sujet 2
                            </td>
                        </tr>
                    </thead>
                    <br/>
                    <tbody>
                        <tr>
                            <td>Question 2 ?</td>
                        </tr>
                        <tr>
                            <td class="reponse">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad possimus voluptatum provident molestiae quod. Incidunt quod ipsa, sunt nam exercitationem, a soluta sequi quo est praesentium quia deleniti alias numquam?
                            </td>
                        </tr>
                    </tbody>
                </table>
                    
            </div>
        </section>

        <br /><br />
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>