<?php
// utilizzo il name space creato da composer e aggiungo la cartella "class" alla path 
namespace App\Gestionale\class;

// classe piatti
class Piatti
{
   // creo un array associativo che racchiude come chiave il nome dei piatti e come valore il prezzo
   private array $piatti =
   [
       "Set Elina" => 70.00
   ];

   public function stampoPiatti(): void {
    foreach ($this->piatti as $nome => $prezzo) {
        echo "<h1 style='color: #0482b7;'>Prodotto: " . $nome . "<br>". "<hr>".  " Prezzo: &euro;" . number_format($prezzo, 2) . "</h1>";
    }
}

}


?>