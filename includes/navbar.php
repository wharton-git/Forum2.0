<header class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a class="navbar-brand pe-sm-3" href="#"><img src="assets/ico/logologo copie.png" alt="" width="80px"></span>Geek Hive</a>
        <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
            <input class="form-check-input" type="checkbox" id="theme-mode">
            <label class="form-check-label" for="theme-mode"><img class="ai-moon fs-lg" src="assets/ico/symbole-de-temps-soleil copie.png" width="20px"></label>
            <label class="form-check-label" for="theme-mode"><img class="ai-moon fs-lg" src="assets/ico/lune.png" width="20px"></label>
        </div><a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="actions/logoutAction.php"></i>Log OUT !</a>
        <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
        <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
            <li class="nav-item "><a class="nav-link" href="index.php">Home</a>
            
            
            </li>
            <li class="nav-item "><a class="nav-link" href="index1.php" >Questions</a>
            </li>
            <li class="nav-item "><a class="nav-link" href="publish-question.php">Publish a Question</a></li>
            <li class="nav-item dropdown"><a class="nav-link" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Account</a>
                <ul class="dropdown-menu">
                                    
            </li>
            <li class="nav-item"><a class="nav-link" href="profil.php?id=<?=$_SESSION['matricule'] ?>">My Profil</a></li>
            <li class="nav-item"><a class="nav-link" href="my-question.php">My Questions</a></li>
            <li class="nav-item"><a class="nav-link" href="actions/logoutAction.php">Log Out !</a></li>
            </ul>
            
        </nav>
        </div>
    </header>
    