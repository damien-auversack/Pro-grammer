<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
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

                <?php

                    // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
                    if(isset($_SESSION["username"])){  ?>

                        <li class="nav-item">

                                <?php
                            switch ($_SESSION['grade']) {
                                case 1:
                                    ?>
                                    <span class="nav-link" style="color:#53afd4;">
                                    <?php
                                    echo "Utilisateur";
                                break;
                                case 2:
                                     ?>
                                    <span class="nav-link" style="color:#1ee653;">
                                    <?php
                                    echo "Moderateur";
                                break;
                                case 3:
                                    ?>
                                    <span class="nav-link" style="color:#f52035;">
                                    <?php
                                    echo "Administrateur";
                                break;
                                default:
                                    echo "error";
                            }
                            ?>
                            </span>

                        </li>

                        <li class="nav-item" > <span class="nav-link" style="color:white;"> : </span> </li>

                        <li class="nav-item"> <span class="nav-link" style="color:white;"><?php echo $_SESSION['username']; ?></span> </li>

                        <li class="nav-item" > <span class="nav-link" style="color:white;"> | </span> </li>

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

