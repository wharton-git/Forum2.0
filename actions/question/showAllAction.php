d<?php


require('actions/database.php');

$getAllQuestions = $bdd->query('SELECT id, id_auth, title, descri, pseudo_auth, date_pub, contenu FROM questions ORDER BY id DESC LIMIT 5');

if(isset($_GET['search']) AND !empty(['search'])){

    $usersSearch = $_GET['search'];

    $getAllQuestions = $bdd->query('SELECT id, id_auth, title, descri, pseudo_auth, date_pub, contenu FROM questions WHERE title LIKE "%' . $usersSearch . '%" ORDER BY id DESC');
    if($getAllQuestions->rowCount() == 0){
        $errorMsg = "<div class='alert alert-warning'><p>Nothing Match ... </p></div>";
    }

}
