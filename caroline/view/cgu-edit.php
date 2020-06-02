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
        <title>CGU</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-admin.php'); ?>
        

        <section id="cgu-edit-page">
        
            <div class="container">
                
                <div class="titre-page">
                    <h1>Modifier les conditions générales d'utilisation</h1>
                </div>
                
                <br/>

                <input class="buttonAjout" type=button onclick=window.location.href=''; value='Modifier' />
                <table>
                    <tr>
                        <td>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita impedit quod corporis qui quidem quasi enim dolorem dolore ut, fugit sunt beatae rem? Dignissimos incidunt sunt temporibus mollitia veniam ratione?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis corrupti cum a eaque hic. Recusandae corrupti dignissimos soluta quia? Blanditiis, rem enim unde ipsa quaerat iure excepturi aspernatur corrupti adipisci?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error eum cum repellat adipisci minus quos quod cupiditate tempora. Saepe quam alias porro temporibus ipsam voluptas quisquam, sint excepturi minima corrupti Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit illo excepturi quibusdam nisi obcaecati nulla, maxime minus incidunt assumenda facilis itaque qui unde. Provident dolore totam placeat animi et error. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, mollitia architecto facilis fuga officiis quod reiciendis accusantium sed cumque. Voluptatibus eaque magni at dolor reprehenderit neque laudantium est incidunt accusantium?
                        </td>
                    </tr>
                </table>
                <div class="clear" style="clear:both"></div>
          
                <br />

                <a href="../view/gestion.php">Retour</a>

            </div>
        </section>

        <br /><br />
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>