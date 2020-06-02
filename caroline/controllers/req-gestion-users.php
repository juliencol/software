<?php
$users = $bdd->query('SELECT * FROM users');

//y a un problème avec la fonctionnalité bannir
//il faut que je modifie le while ou les conditions if
if (isset($_GET['ban']) AND !empty($_GET['ban'])) {
    $ban = $_GET['ban'];

    /*
    $banned = $bdd->query('SELECT * FROM banned LIMIT 1');

    $ban_exist = $banned->rowCount();  
    
    while ($data = $users->fetch()) {
        if ($ban == $data['email']) { 
            echo 'L\'adresse ' . $data['email'] . 'a déjà été banni !<br />';
    
        } else {
            $req = $bdd->prepare('INSERT INTO banned(email) VALUES(:email)');
            $req-> execute(array('email' => $ban));
            echo 'L\'adresse <em>' . $ban . '</em> a bien été banni. <br/>';
        }
    }
    echo '<br />';
    */

    while ($data = $users->fetch()) {
        if (isBan($ban)) {
        }

        else {
            $req = $bdd->prepare('INSERT INTO banned(email) VALUES(:email)');
            $req-> execute(array('email' => $ban));
            echo 'L\'adresse <em>' . $ban . '</em> a bien été banni. <br/>';
        }
    }
}
$users->closeCursor();




if (isset($_GET['deban']) AND !empty($_GET['deban'])) {
    $deban = $_GET['deban'];
    $req = $bdd->prepare('DELETE FROM banned WHERE email = ?');
    $req->execute(array($deban));

    echo 'L\'adresse ' . $deban . ' a été débannie. <br /><br />'; 
}




if (isset($_GET['delete']) AND !empty($_GET['delete'])) {
    $delete = $_GET['delete'];

    $req = $bdd->prepare('DELETE FROM users WHERE user_id = ?');
    $req->execute(array($delete));

    echo 'L\'utilisateur a été supprimé. <br /><br />'; 
    //j'arrive pas à faire "L'utilisateur ... a bien été supprimé"
    //comment récupérer le nom de l'utilisateur supprimé ?
}




function isBan($ban) {
    $bdd = new PDO('mysql:host=localhost;dbname=appsiteweb_test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $banned_emails = $bdd->prepare('SELECT * FROM banned WHERE email = ?');
    $banned_emails->execute(array($ban));
    $exist = $banned_emails->rowCount();

    if ($exist != 0) {
        return true; // true = oui c'est ban
    }
}

?>