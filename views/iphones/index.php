<div class="container">
    <img height="200px" width="300px" src="<?= (isset($iphone->chemin_image)) ? URI . $iphone->chemin_image : URI . "assets/images/call.png"; ?>">
    <h1 class="text-center text-dark mb-5 mt-5" style="font-family: 'arial', sans-serif;">Boutique Iphone</h1>
    <h5 class="text-center text-white mb-5 mt-3" style="font-family: 'arial', serif;">"Tous nos modèles d'iPhone comme neuf passent notre inspection en 34 points et sont couverts par une garantie d'un an. Livraison gratuite au Canada."</h5>
    
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="rechercher" placeholder="rechercher iphone" aria-label="Search ">
        <button class="btn btn-success bg-dark" type="submit">rechercher</button>
    </form>

    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
        <?php foreach ($iphones as $iphone): ?>
            <div class="col">
                <div class="card">
                    <img height="400px" width="200px" src="<?= (isset($iphone->chemin_image)) ? URI . $iphone->chemin_image : URI . "assets/image.jpeg"; ?>" class="card-img-top bg-dark" alt="...">
                    <div class="card-body text-white bg-dark">
                        <h5 class="card-title text-center mb-4"><?= $iphone->nom; ?></h5>
                        <p class="card-text"><?= $iphone->courte_description; ?></p>
                        <p class="card-text"><?= $iphone->description; ?></p>
                    </div>
                    <div class="d-flex justify-content-center text-white bg-dark">
                        <h3 class="text-center">Prix : <?= $iphone->prix; ?>$</h3>
                    </div>
                    <a class="btn btn-primary bg-white text-dark" href="<?= URI . "paniers/ajouter/" . $iphone->id_iphone ?>">Ajouter au panier</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
