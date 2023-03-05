<?php 
    require('actions/question/showAllAction.php');
    require('actions/SecurityAction.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>ACCUEIL</title>
</head>
<body>
    
    <?php 
    include 'includes/script1.php';
    include 'includes/navbar.php';?>

    <br><br>
    <div class="container">
        <form method="GET">
            <div class="from-group row">

            <div class="col-8">
                <input class="form-control" type="search" name="search" >
            </div>
            <div class="col-4">
                <button class="btn btn-success" type="submit">Rechercher</button>
            </div>
            </div>

        </form>
        <br>
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
                        <?= $e['descri'];?>       
                    </div>

                    <div class="card-footer">
                        Publié par <a href="profil.php?id=<?= $e['id_auth']; ?>"><?= $e['pseudo_auth']; ?></a> le <?= $e['date_pub']; ?>
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