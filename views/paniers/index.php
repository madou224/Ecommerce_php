<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Panier</title>
</head>
<body>

<h1 class="text-center">Gestion Panier</h1>
<table class="table container">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Nom</th>
        <th scope="col">Prix</th>
        <th scope="col">Quantite</th>
        <th scope="col">Courte description</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $cmpt = 1;
    $total = 0;

    foreach ($iphones as $iphone) {
        // Iphone=> [$quantite,$iphone]
        $quantite = $iphone[0];
        $iphone = $iphone[1];
        $total = $total + $iphone->prix;
        ?>
        <tr>
            <th scope="row"><?= $cmpt++; ?></th>
            <td><img height="100px" width="100px" src="<?=
                (isset($iphone->chemin_image)) ? URI . $iphone->chemin_image
                    : URI . "assets/image.jpeg";
                ?>" alt=""></td>
            <td><?= $iphone->nom; ?></td>
            <td><?= $iphone->prix; ?></td>
            <td>
                <input class="quantite-input" data-laptop-id="<?= $iphone->id_iphone; ?>" name="quantite" type="number" min="0" max="<?= $iphone->quantite; ?>"
                       value="<?= $quantite; ?>">
            </td>
            <td><?= $iphone->courte_description; ?></td>
            <td class="row">
                <button class="modifier-btn btn btn-info col"><i class="bi bi-pencil-square"></i></button>
                <a class="supprimer-btn btn btn-danger col" href="<?= URI . "paniers/supprimer/" . $iphone->id_iphone; ?>"><i class="bi bi-trash3"></i></a>
            </td>
        </tr>
        
        <?php
    }
    ?>
    

     
    </tbody>
  
</table>




<script
    src="https://www.paypal.com/sdk/js?client-id=Ae702xhU91hBLmObv77gx7fWoyMxkJ6XIS-EIBGPCAEwsV8JzIlxBxvp_KSH0gDWiWy_kE9OCt0ylDv9&components=buttons"></script>
<script>
    paypal
        .Buttons({
            createOrder: function (data, actions) {
 
                return actions.order.create({
                    purchase_units: [
                        {
                            amount: {
                                value: <?php echo ($total); ?>,
                            },
                        },
                    ],
                });
            },
            onApprove: function (data, actions) {
                return actions.order.capture().then(function (details) {
 
                });
            },
        })
        .render("#paypal-payment-button");
 
</script>
<div id="paypal-payment-button"></div>
</div>

<center>
<?php

echo "Le prix total est de ".$total."$" ;



?>
</center>
</body>
<div id="paypal-payment-button"></div>

</html>
