<?php
// utilizzo il name space creato da composer e aggiungo la cartella "class" alla path 
namespace App\Gestionale\class;

// classe coltelli
class Coltelli {
    
    private array $coltelli = [
        "Buffalo Knife" => 120.25
    ]; 

    public function stampoColtelli(): void {
        foreach ($this->coltelli as $nome => $prezzo) {
            echo "<h1 style='color: #0482b7;'>Prodotto: " . $nome . "<br>". "<hr>".  " Prezzo: &euro;" . number_format($prezzo, 2) . "</h1>";
        }
    }
}



?>