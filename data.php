<?php

include __DIR__ . '/models/Prodotto.php';

$categorie = [
    new Categoria (
        'Cane', '<i class="fa-solid fa-dog"></i>'
    ),
    new Categoria (
        'Gatto', '<i class="fa-solid fa-cat"></i>'
    )
];

$prodotti = [
    new Prodotto (
        'Pappa per gatto',
        $categorie[1],
        500, 
        // L'assegnazione del tag "src" per l'immagine non funziona, 
        // ma non voglio stare a risolverlo ora
        '<?php __DIR__ . "/img/cat-food.jpg"?>', 
        'Cibo per gatti molto appetitoso, con una descrizione molto fantasiosa'
    ),
    new Prodotto (
        'Pappa per cani',
        $categorie[0],
        600, 
        // L'assegnazione del tag "src" per l'immagine non funziona, 
        // ma non voglio stare a risolverlo ora
        '<?php __DIR__ . "/img/dog-food.jpg"?>', 
        'Cibo per cani molto appetitoso, con una descrizione molto fantasiosa'
    )
];


