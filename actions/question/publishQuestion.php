<?php
require('actions/database.php');
  if(isset($_POST['validate'])){
    if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])){

      $questionT = htmlspecialchars($_POST['title']);
      $question_description = nl2br(htmlspecialchars($_POST['description']));
      $questionC = nl2br(htmlspecialchars($_POST['content']));
      $question_date = date('d/M/Y');
      $question_id_author = $_SESSION['matricule'];
      $question_pseudo_author = $_SESSION['prenom'];


      $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions(title, descri, contenu, id_auth, pseudo_auth, date_pub)VALUES(?,?,?,?,?,?)');
      $insertQuestionOnWebsite->execute(array(
        $questionT,
        $question_description,
        $questionC,
        $question_id_author,  
        $question_pseudo_author, 
        $question_date
      ));

      
        $successMsg = "votre question a bien ete publier sur le site";


    }else{
        $errorMsg = "Veuillez completer tous les champ...";
    }
}
