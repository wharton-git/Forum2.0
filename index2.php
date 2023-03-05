<?php require('actions/SecurityAction2.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCUEIL</title>
</head>
<body>
    <?php 

    include 'includes/script1.php';
    include 'includes/navbar.php';

    ?>
    <div>
        <a href="login.php">Se Connecter</a>
        <a href="signup.php">Cree un compte</a>
        <a href="publish-question.php">Publier une question</a><br>
    <a href="my-question.php">Question</a>
    </div>
    <?php include 'includes/script2.php'; ?>
</body>
</html>