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
        <title> STIMULUS - gestion - ajout</title>
        
    </head>

    <body>
        <?php include('header.php'); ?>
        

        <section id="add-user-page">
            
            <div id="container">

                <div id="titre">
                    <h1>Gestion des utilisateurs</h1>
                </div>
                <br />

                <div id="add-section">
                    <h3> Ajouter un utilisateur</h3>

                    <?php 
                        include('../controllers/req-add-user.php');
                    ?>
                    
                    <form method="post" action="">
                        <label>Nom : </label>
                        <input type="text" name="last_name" id="last_name" placeholder="Dupont" required />
                        <br />

                        <label>Prénom : </label>
                        <input type="text" name="first_name" id="first_name" placeholder="Jean" required />
                        <br />

                        <label>Sexe : </label>
                        <input type="text" name="gender" id="gender" maxlength="1" placeholder="F/M/A"  required />
                        <br /> 

                        <label>Email : </label>
                        <input type="text" name="email" id="email" placeholder="jeandupont@email.com" required />
                        <br />

                        <label>Mot de passe : </label>
                        <input type="password" name="password" id="password" min="8" placeholder="minimum 8 caractères" required />
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

                        <input type="submit" name="submit_add" id="submit_add" value="Ajouter" />

                    </form>
                </div>

                <br />

                <div id="user-list">
                    <a href="gestion.php">Retour à la liste des utilisateurs</a>
                </div>

            

            </div>
        </section>
        <br />

        
        <?php include('footer.php'); ?>
        

    </body>
    
</html>