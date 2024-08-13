<div class="container">
    <div class="text-center mb-4 mt-4  text-dark"  >
        <a class="btn btn-primary bg-dark " href="<?= URI . "iphones/ajouter"; ?>">Ajouter un nouveau Iphone</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Image</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">Quantite</th>
                <th scope="col">Courte description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($iphones as $iphone) { ?>
                <tr>
                    <th scope="row"><?= $iphone->id_iphone; ?></th>
                    <td><img height="100px" width="100px" src="<?= isset($iphone->chemin_image) ? URI . $iphone->chemin_image : URI . "assets/image.jpeg"; ?>" alt=""></td>
                    <td><?= $iphone->nom; ?></td>
                    <td><?= $iphone->prix; ?></td>
                    <td><?= $iphone->quantite; ?></td>
                    <td><?= $iphone->courte_description; ?></td>
                    <td class="row">
                        <a class="btn btn-info col" href="<?= URI . "iphones/modifier/" . $iphone->id_iphone; ?>"><i class="bi bi-pencil-square"></i></a>
                        <a class="btn btn-danger col" href="<?= URI . "iphones/supprimer/" . $iphone->id_iphone; ?>"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
