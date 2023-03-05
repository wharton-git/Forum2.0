<?php
require('actions/database.php');

$getAllMyQuestions = $bdd->prepare('SELECT id, title, descri FROM questions WHERE id_auth = ?');
$getAllMyQuestions->execute(array($_SESSION['matricule']));
