<?php
// utilizzo il name space creato da composer e aggiungo la cartella "class" alla path 
namespace App\Gestionale\class;

// classe bicchieri
class Bicchieri
{
    // creo un array associativo che racchiude come chiave il nome dei bicchieri e come valore il prezzo
    private array $bicchieri =
    [
        "Set Maestrosip" => 45.70
    ];

    public function stampoBicchieri(): void {
        foreach ($this->bicchieri as $nome => $prezzo) {
            echo "<h1 style='color: #0482b7;'>Prodotto: " . $nome . "<br>". "<hr>".  " Prezzo: &euro;" . number_format($prezzo, 2) . "</h1>";
        }
    }

// test

public static int $bicchieriDisponibili = 10;

public static function stampaBicchieriDisponibili(): void
    {
    // le proprieta statiche anziche il this utilizzano il self 
        echo "<h1>Numero di bicchieri disponibili: " . self::$bicchieriDisponibili . "</h1>";
    }

    public static function getBicchieriDisponibili(): int
    {
        return self::$bicchieriDisponibili;
    }

}



