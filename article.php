<?php
session_status() === PHP_SESSION_NONE ? session_start() : null;
require('actions/question/showArticleContentAction.php'); // replace ou verify
require('actions/question/postAnswerAction.php');
require('actions/question/showAllAnswer.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <title>Article</title>
</head>
<body>
    <?php 
    include 'includes/script1.php';
    include 'includes/navbar.php'; ?>
    
    <div class="container">

        <?php 

            if (isset($errorMsg)){ echo $errorMsg; }
            
            if (isset($questionDate)){
        ?>
            <section class="show-content"></section>
                <h3><?= $questionT;   ?></h3>
                <hr>
                <p><?= $questionC;  ?></p>
                <small>   Publier par <?= '<a href="profil.php?id='.$questionidAuth.'">'.$question_pseudo_author . '</a> ' . $questionDate; ?></small>
            </section>

<div>

<?php

                    
while ($answer = $getAllAnswersOfThisQuestion->fetch()){
    ?>
        <div class="card">
            <div class="card-header">
                <a href="profil.php?id=<?= $answer['id_auteur']; ?>">
                    <?= $answer['nom_auteur']; ?> </a>
            </div>
            <div class="card-body">
                <?= $answer['contenu']; ?>
            </div>
        </div>
        <br><br>
    <?php
}
?>

<?php
}
?>

</div>


            <br>
            <section class="show-answer">
                <form class="form-group" method="POST">
                    <div class="nb-3">
                        <label for="reponse" class="form-label">Réponse :</label>
                        <textarea name="answer" cols="30" rows="10" class="form-control"></textarea>
                        <br>
                        <button class="btn btn-primary" type="submit" name="validate" >Répondre</button>
                    </div>
                </form>


</section>
<?php include 'includes/script2.php'; ?>
</div>
</body>
</html>