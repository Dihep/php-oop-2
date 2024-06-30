<?php

include __DIR__ . "/data.php";

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti per animali</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<h1>I nostri prodotti</h1> 
<div id="containerProdotti">

    <?php foreach ($prodotti as $prodotto) { ?>
        <div class="cardProdotto">
            <?php $prodotto->stampa() ?>
        </div>
    <?php } ?>

</div>

    
</body>
</html>