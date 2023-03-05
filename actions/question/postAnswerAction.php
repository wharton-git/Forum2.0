<?php
// session_start();
require('actions/database.php');

if (isset($_POST['validate'])){

    if (!empty(['answer'])){

        $user_answer = nl2br(htmlspecialchars($_POST['answer']));

        $insertAnswer = $bdd->prepare('INSERT INTO reponses (id_auteur, nom_auteur, id_question, contenu) VALUES (?, ?, ?, ?)');
        $insertAnswer->execute(array($_SESSION['matricule'],$_SESSION['prenom'],$idq, $user_answer));

    }

}