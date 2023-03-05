<?php

require ('actions/database.php');

$getAllAnswersOfThisQuestion = $bdd-> prepare('SELECT * FROM reponses WHERE id_question = ?');
$getAllAnswersOfThisQuestion->execute(array($idq));