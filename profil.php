<?php session_status() === PHP_SESSION_NONE ? session_start() : null; 
require ('actions/users/showOneUsersProfile.php');
require ('actions/securityAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" media="screen" href="./assets/css/bundle.min.css"/>
    <link rel="stylesheet" media="screen" href="./assets/css/aos.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="./assets/css/theme.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <!-- <link rel="stylesheet" href="./assets/css/bootstrap.min.css"> -->
    <title>Document</title>
</head>
<body>
    
    <?php
    include 'includes/script1.php';
    include 'includes/navbar.php'; 
        // var_dump($getHisQuestions);
    ?>
    <div class="p-5"></div>

    <?php if(isset($errorMsg)){ echo $errorMsg; } 
    
    if (isset($getHisQuestions)){

        ?>
        <div class="row">
        <div class="card container col-8">
            <div class="card-header justify-content-between">
                <h2>   <?= $u_nom ; ?>    </h2>
                <hr>
            </div>
            <div class="card-body pb-0">
                <h3><?= $u_prenom   ?> </h3>
            </div>
            <div class="card-footer">
                <h4>   <?= $u_matricule . ' (' . $u_level . ') ' ?>     </h4>
            </div>
        </div>
        </div>
        <?php 

        while ($question = $getHisQuestions->fetch()){

            ?>

                <div class="card container">
                    <div class="card-header">
                    <u>Titre :</u>  <?= $question['title'];   ?> ( Par <?= $question['pseudo_auth'] . ' le ' . $question['date_pub'] ?> )
                    <div class="card-body">
                        <?= $question['contenu'];   ?>
                    </div>
                    <div class="card-footer">
                    voir les réponses <a href="article.php?id=<?= $question['id']; ?>" > ▶▶▶</a>
                    </div>
                </div>

            <?php


        }

    }
    
    
    ?>

<?php include 'includes/script2.php'; ?>

</body>
</html>