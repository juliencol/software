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
        <title>FAQ</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-admin.php'); ?>
        

        <section id="faq-edit-page">
        
            <div class="container">
                
                <div class="titre-page">
                    <h1>Modifier la foire aux questions</h1>
                </div>
                
                <br/>
                <a href="../view/faq-add.php">Ajouter une question</a>
                <br /><br />

                <div class="bodyTable">
                    
                    
                    <div class="body">
                    
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
                        <aside class="sidebar">
                            <ul>
                                <li><input class="button" type=button onclick=window.location.href=''; value='Supprimer' /></li>
                                
                                <li><input class="button" type=button onclick=window.location.href=''; value='Modifier' /></li>
                                <li>
                                    <input type="radio" name="visibleQ1" id='visible'checked/>
                                    <label for="vidible">Visible</label>
                                    <input type="radio" name="visibleQ1" id="invisible">
                                    <label for="invisible">Invisible</label>
                                </li>
                            </ul>
                        </aside>
                
                    </div>
                    <br />
                    <div class="body">
                        
                        <table> 
                            <thead>
                                <tr>
                                    <td>
                                    Sujet 2
                                    </td>
                                </tr>
                        </thead>
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
                        <aside class="sidebar">
                            <ul>
                                <li><input class="button" type=button onclick=window.location.href=''; value='Supprimer' /></li>
                                
                                <li><input class="button" type=button onclick=window.location.href=''; value='Modifier' /></li>
                                <li>
                                    <input type="radio" name="visibleQ2" id='visible' checked/>
                                    <label for="vidible">Visible</label>
                                    <input type="radio" name="visibleQ2" id="invisible">
                                    <label for="invisible">Invisible</label>
                                </li>
                            </ul>
                        </aside>
                
                    </div>
                </div>

                <br />

                <a href="../view/gestion.php">Retour</a>

                    
            </div>
        </section>

        <br /><br />
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>