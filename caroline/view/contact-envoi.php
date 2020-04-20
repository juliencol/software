<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="_css/header.css" />
    <link rel="stylesheet" href="_css/footer.css" />
    <link rel="stylesheet" href="_css/base.css" />
    <link rel="stylesheet" type="text/css" href="../view/_css/contact_utilisateur_page_envoi_version_mail">
    <title>Contact</title>
</head>
<body>

    <?php include('../view/_templates/header-user.php'); ?>


    <section id="contact-page">
        <div class="container">
            <div class="titre-page">
                <h1>Contact</h1>
            </div>

            <?php 

            if(isset($_POST['expediteur']) AND isset($_POST['objet']) AND isset($_POST['message'])) {

                $expediteur=$_POST['expediteur'];
                $objet=$_POST['objet'];
                $message= nl2br($_POST['message']);
                $destinataire="celia.houlette@yahoo.fr";

                $header="MIME-Version: 1.0\r\n";
                $header.='From:'.$expediteur.'<'.$expediteur.'>'."\n";
                $header.='Content-Type:text/html; charset="uft-8"'."\n";
                $header.='Content-Transfer-Encoding: 8bit';


                mail($destinataire, $objet, $message, $header);
                
                ?>
                
                <div class="vignette">

                    <p>Message envoyé !</p><br/>

                    <a href="../view.profile-user.php">Retourner à mon profil</a>

                </div>

                <?php
            }

            ?>
        </div>
    </section>
    <br/><br/>

    


	<?php include('../view/_templates/footer.php'); ?>

</body>
</html>