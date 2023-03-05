<?php

require('actions/database.php');

if (isset($_POST["validate"])) {

    if(!empty($_POST["title"]) AND !empty($_POST["description"]) AND !empty($_POST["content"])) {

        $newQtitle = htmlspecialchars($_POST['title']);
        $newQdescription = nl2br(htmlspecialchars($_POST['description']));
        $newQcontent = nl2br(htmlspecialchars($_POST['content']));

        $res = "hello";

        $editQuestionOnWebsite = $bdd->prepare('UPDATE questions SET title = ?, descri = ?, contenu = ? WHERE id = ?');
        $editQuestionOnWebsite->execute(array($newQtitle, $newQdescription, $newQcontent, $_GET["id"]));

        header('Location: my-question.php');


}else{
    $errorMsg = "veuillez completer les champs...";
}

}