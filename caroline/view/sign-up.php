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
        <title>Inscription</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header.php'); ?>
        

        <section id="sign-up-page">

            <div class="container">

                <div class="titre-page">
                    <h1>Inscription</h1>
                </div>

                <p>Si vous êtes un <strong>gestionnaire</strong>, cliquez <a href="">ici</a>.</p>

                <?php 
                    if (isset($_POST['submit_sign_up'])) {

                    }
                ?>

                <div class="sign-up-container">
                    <form method="post" action="../view/profile-user.php">
                        <label>Nom : </label>
                        <input type="text" name="last_name" id="last_name" placeholder="Dupont" required />
                        <br />

                        <label>Prénom : </label>
                        <input type="text" name="first_name" id="first_name" placeholder="Jean" required />
                        <br />

                        <label>Sexe : </label>
                        <input type="radio" name="gender" id="female" value="F" required /><label for id="female"> Femme</label>
                        <input type="radio" name="gender" id="male" value="M" required /><label for id="male"> Homme</label>
                        <input type="radio" name="gender" id="other" value="A" required /><label for id="other"> Autre</label>
                        <br /> 

                        <label>Email : </label>
                        <input type="text" name="email" id="email" placeholder="jeandupont@email.com" required />
                        <br />

                        <label>Mot de passe : </label>
                        <input type="password" name="password" id="password" min="8" placeholder="minimum 8 caractères" required />
                        <br />

                        <label>Confirmation mot de passe : </label>
                        <input type="password" name="password2" id="password2" min="8" placeholder="minimum 8 caractères" required />
                        <br />

                        <label>Date de naissance : </label>
                        <input type="date" name="birthdate" id="birthdate" min="1900-01-01" placeholder="1999-01-01" required />
                        <br />

                        <label>Nom de l'entreprise : </label>
                        <input type="text" name="company_name" id="company_name" placeholder="Dupont Corporation" required />
                        <br />

                        <label>Numéro employé : </label>
                        <input type="number" name="employee_number" id="employee_number" maxlength="5" placeholder="12345" required />
                        <br /><br />    

                        <input type="submit" name="submit_sign_up" id="submit_sign_up" value="S'incrire" />
                        
                    </form>
                </div>
                
            </div>
        </section>

        <br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>