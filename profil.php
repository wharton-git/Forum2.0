<?php session_status() === PHP_SESSION_NONE ? session_start() : null; 
require ('actions/users/showOneUsersProfile.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
    <?php
    include 'includes/script1.php';
    include 'includes/navbar.php'; 
        // var_dump($getHisQuestions);
    ?>

    <?php if(isset($errorMsg)){ echo $errorMsg; } 
    
    if (isset($getHisQuestions)){

        ?>
        <div class="card">
            <div>
                <h2>    <?= $u_nom ; ?>    </h2>
            </div>
            <div>
                <h3><?= $u_prenom  . ' (' . $u_level . ') ' ?> </h3>
            </div>
            <div>
                <h4>   <?= $u_matricule ?>     </h4>
            </div>
        </div>
        <?php 

        while ($question = $getHisQuestions->fetch()){

            ?>

                <div class="card">
                    <div class="card-head">
                        <?= $question['title'];   ?>
                    </div>
                    <div class="card-body">
                        <?= $question['contenu'];   ?>
                    </div>
                    <div class="card-footer">
                        Par <?= $question['pseudo_auth'] . ' le ' . $question['date_pub'] ?>
                    </div>
                </div>

            <?php


        }

    }
    
    
    ?>

<?php include 'includes/script2.php'; ?>

</body>
</html>