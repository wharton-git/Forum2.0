<?php 
    require('actions/question/showAllAction.php');
    require('actions/SecurityAction.php');
?>

<!DOCTYPE html>
<html>
<head>
    
<link rel="stylesheet" media="screen" href="./assets/css/bundle.min.css"/>
    <link rel="stylesheet" media="screen" href="./assets/css/aos.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="./assets/css/theme.min.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <title>ACCUEIL</title>
</head>
<body>
    
    <?php 
    include 'includes/script1.php';
    include 'includes/navbar.php';?>

    <br><br>
    <br><br>
    <div class="p-4"></div>
    
    <div class="container">
    <div class="p-4"></div>
        <form method="GET">
            <div class="from-group row">

            <div class="col-8">
                <input class="form-control" type="search" name="search" placeholder="Rechercher une question ...">
            </div>
            <div class="col-4">
                <button class="btn btn-success" type="submit">Rechercher</button>
            </div>
            </div>

        </form>
        <br>

        <?php if(isset($errorMsg)){echo $errorMsg; } ?>

        <?php 
            while($e = $getAllQuestions->fetch()){
                ?>
                <div class="card">
                    <div class="card-header">Titre :
                        <a class="" href="article.php?id=<?= $e['id']; ?>" >
                        <?php echo $e['title']; ?>
                    </a>   
                    </div>
                    <div class="card-body">
                        <?= $e['contenu'];?>       
                    </div>

                    <div class="card-footer">
                        Publié par <a href="profil.php?id=<?= $e['id_auth']; ?>"><?= $e['pseudo_auth']; ?></a> le <?= $e['date_pub']; ?>
                        <a href="article.php?id=<?= $e['id']; ?>">
                        <img src="./assets/ico/reply-arrow copie.png" alt="reply" width="30px">
                        </a>
                    </div>


                </div>
                <br>
                <?php
            }
        
        ?>
    </div>


<?php include 'includes/script2.php'; ?>
</body>


</html>