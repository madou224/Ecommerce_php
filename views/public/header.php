<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

    <title>iphones</title>
    
    <style>
        body {
            background-image: url('../assets/images/IPHONE.jpg');
            background-size: cover;
            background-position: center;
        }
        .navbar-brand img {
            width: 100px;           /* Ajustez la taille du logo selon vos besoins */
            height: auto;
            margin-right: 0px;  
              /* Ajoute un espace entre le logo et le texte */
        }
        
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white  bg-dark"  >
    <div class="container-fluid">
    <img id="image" style="width:40px;height:40px;" data-size="512" class="img-responsive" src="https://cdn.icon-icons.com/icons2/3398/PNG/512/apple_logo_icon_214672.png" title="Icône Apple, logo  Gratuit" alt="Icône apple, logo">

        <a class="navbar-brand text-dark" href="<?= URI . "iphones/home"; ?>">
        </a>    

        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="<?= URI . "iphones/index"; ?>">Boutique</a>
                </li>

                <!--connexion en temps que visiteur  -->

                <?php
                if (!isset($_SESSION['Utilisateur'])) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href=<?= URI . "auths/login"; ?>> Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href=<?= URI . "auths/inscription"; ?>> Inscription</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-white" href=<?= URI . "auths/deconnexion"; ?>>Deconnexion</a>
                    </li> -->

                    <?php
                    
                } else { ?>

                    <!-- connexion en temps que client -->

                    <li class="nav-item">
                        <a class="nav-link text-dark" href=<?= URI . "auths/profil"; ?>>Profil</a>
                    </li>

                    <?php

                     // connexion en temps que admin

                     if ($_SESSION['role'] == 1 ) {
                      ?> 

                    <li class="nav-item">
                    <a class="nav-link text-dark" href="<?= URI . "iphones/admin"; ?>">Liste des iphones</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?= URI . "iphones/admin"; ?>">Gestion des iphones</a>
                </li>

                <?php } ?>

                    <li class="nav-item">
                        <a class="nav-link text-dark" href=<?= URI . "auths/deconnexion"; ?>>Deconnexion</a>
                    </li>

                    <?php } ?>

                <li>
                    <a href="<?= URI . "paniers/index" ?>" class="btn btn-primary bg-dark"><i class="bi bi-cart4"></i>
                        <?=
                        (isset($_SESSION[Panier::NAME])) ?
                            count($_SESSION[Panier::NAME]) : 0;
                        ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
