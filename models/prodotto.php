<?php

include __DIR__ . '/Categoria.php';

class Prodotto {

    public function __construct(
        public string $nome,
        public Categoria $categoria,
        public int $prezzo,
        public string $immagine,
        public string $descrizione
        )
    {
        
    }

    public function stampa () {
        echo '<ul><li class="nomeProdotto"><h2>' . $this->categoria->icona . '  ' . $this->nome . '</h2></li>';
        echo '<li class="prezzoProdotto">$' . $this->prezzo/100 . '</li>';
        echo '<li class="immagineProdotto"><img src="' . $this->immagine . '" alt=""></li>"';
        echo '<li class="descrizioneProdotto">' . $this->descrizione . '</li></ul>';
    }

}