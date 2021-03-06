<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <img style="min-width: 30px;min-height: 40px;" class="navbar-brand" src="img/logo.png" width="30" height="30" alt="Site logo">
        <a class="navbar-brand" href="index.php">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent, #navbarconnection" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul id="elts_cat" class="navbar-nav">
                <?php
                    include("php/getCategories.php");
                ?>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarconnection">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="localisation.php">Où suis-je ?</a>
                </li>
                <?php
                    // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
                    if(isset($_SESSION["username"])){  ?>
                        <li class="nav-item">
                            <?php
                                switch ($_SESSION['grade']) {
                                    case 1:
                                        ?>
                                        <a class="nav-link" style="color:#53afd4;">

                                        <?php
                                        echo "Utilisateur";
                                    break;
                                    case 2:
                                         ?>
                                        <a class="nav-link" id="btnModo" href="displayAdmin.php" style="color:#1ee653;">
                                        <?php
                                        echo "Moderateur";
                                    break;
                                    case 3:
                                        ?>
                                        <a class="nav-link" id="btnAdmin" href="displayAdmin.php">
                                        <?php
                                        echo "Administrateur";
                                    break;
                                    default:
                                        echo "error";
                                }
                            ?></a>
                        </li>
                        <li class="nav-item"> <span class="nav-link" style="color:white;"> <?php echo $_SESSION['username']; ?> | </span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Déconnexion</a>
                        </li>
                <?php
                    } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Connexion</a>
                        </li>
                    <?php } ?>
            </ul>
        </div>
    </div>
</nav>

