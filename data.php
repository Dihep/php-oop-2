<?php

include __DIR__ . "/models/prodotto.php";

$prodotti = [
    new Prodotto (
        'Pappa per gatto', 
        500, 
        // L'assegnazione del tag "src" per l'immagine non funziona, 
        // ma non voglio stare a risolverlo ora
        '<?php __DIR__ . "/img/cat-food.jpg"?>', 
        'Cibo per gatti molto appetitoso, con una descrizione molto fantasiosa'
    )
];
