<?php require('actions/signupAction.php'); ?>
<html>

<head>
  <link href="assets/log.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  
  <link rel="stylesheet" media="screen" href="./assets/css/bundle.min.css"/>
    <link rel="stylesheet" media="screen" href="./assets/css/aos.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="./assets/css/theme.min.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Créer un compte</p>
    <form class="form1" method="POST">
      <?php if(isset($error)){echo '<p style="color: red;font-weight: bold;font-size: 14px;text-align: center;">'.$error.'</p>'; } ?>
      <input class="un " type="text" align="center" placeholder="Matricule" name="matricule">
      <input class="un " type="text" align="center" placeholder="email" name="email">
      <input class="un " type="text" align="center" placeholder="nom" name="nom">
      <input class="un " type="text" align="center" placeholder="prenom" name="prenom">
      <input class="un " type="text" align="center" placeholder="niveau" name="niveau">
      <input class="pass" type="password" align="center" placeholder="Mot de passe" name="mdp">
      <button class="submit" align="center" name="validate">créer</button>
      <p class="forgot" align="center"><a href="login.php">Se connecter</p> 
    </div>
</body>

</html>