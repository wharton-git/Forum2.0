<?php


require('actions/database.php');

$getAllQuestions = $bdd->query('SELECT id, id_auth, title, descri, pseudo_auth, date_pub FROM questions ORDER BY id DESC LIMIT 5');

if(isset($_GET['search']) AND !empty(['search'])){

    $usersSearch = $_GET['search'];

    $getAllQuestions = $bdd->query('SELECT id, id_auth, title, descri, pseudo_auth, date_pub FROM questions WHERE title LIKE "%' . $usersSearch . '%" ORDER BY id DESC');


}
