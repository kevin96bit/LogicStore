<?php
// utilizzo il name space creato da composer e aggiungo la cartella "class" alla path 
namespace App\Gestionale\class;

// classe posate
class Posate{
     // creo un array associativo che racchiude come chiave il nome delle posate e come valore il prezzo
   private array $posate =
   [
       "Set Golden" => 40.00
   ];

   public function stampoPosate(): void {
    foreach ($this->posate as $nome => $prezzo) {
      echo "<h1 style='color: #0482b7;'>Prodotto: " . $nome . "<br>". "<hr>".  " Prezzo: &euro;" . number_format($prezzo, 2) . "</h1>";
    }
}
}


?>