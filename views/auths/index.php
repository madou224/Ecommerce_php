<table class="table container">
<h1 class="text-center">Iphone Disponible</h1>
    <thead>
    <tr>
        <th scope="col">N</th>
        <th scope="col">Image</th>
        <th scope="col">Nom</th>
        <th scope="col">Prix</th>
        <th scope="col">Quantite</th>
        <th scope="col">Courte description</th>

    </tr>
    </thead>
    <tbody>
    <?php
    $cmpt = 1;
    foreach ($iphones as $iphone) {
        ?>
        <tr>
            <th scope="row"><?= $cmpt++; ?></th>
            <td><img height="100px" width="100px" src="<?=
                (isset($iphone->chemin_image)) ? URI . $iphone->chemin_image
                    : URI . "assets/image.jpeg";

                ?>" alt="">

            </td>
            <?php echo $iphone->id_iphone ?>
            <td><?= $iphone->nom; ?></td>
            <td><?= $iphone->prix; ?></td>
            <td><?= $iphone->quantite; ?></td>
            <td><?= $iphone->courte_description; ?></td>
            <td><a class="btn btn-primary" href="<?= URI."paniers/ajouter/".$iphone->iphone ?>" >Ajouter au panier</a></td>
        </tr>
        <?php
    }

    ?>

    </tbody>
</table>

