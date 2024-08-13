<form class="m-5" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_iphone" value="<?= $iphoneDetails->id_iphone ?>">
    <div class="mb-3 text-black">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" value="<?= $iphoneDetails->nom ?>">
    </div>
    <!-- Ajoutez les autres champs du formulaire ici -->
    <div class="mb-3 text-white">
        <label for="prix" class="form-label">Prix</label>
        <input type="text" class="form-control" id="prix" name="prix" value="<?= $iphoneDetails->prix ?>">
    </div>
    <div class="mb-3 text-white">
        <label for="quantite" class="form-label">Quantité</label>
        <input type="number" class="form-control" id="quantite" name="quantite" value="<?= $iphoneDetails->quantite ?>">
    </div>
    <div class="mb-3 text-white">
        <label for="image" class="form-label">Image</label>
        <!-- Assurez-vous que le champ image affiche correctement le chemin de l'image -->
        <img src="<?= URI . $iphoneDetails->image ?>" alt="Image actuelle du laptop">
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3 form-floating">
        <textarea class="form-control" name="courte_description" style="height: 100px" placeholder="Entrer votre courte description ici" id="courte_description"><?= $iphoneDetails->courte_description ?></textarea>
        <label for="courte_description" class="form-label">Courte description</label>
    </div>
    <div class="mb-3 form-floating">
        <textarea class="form-control" name="description" style="height: 100px" placeholder="Entrer votre description ici" id="description"><?= $iphoneDetails->description ?></textarea>
        <label for="description" class="form-label">Description</label>
    </div>
    <input class="btn btn-primary" type="submit" value="Enregistrer les modifications" name="modifier">
</form>




   
