<?php

use App\Gestionale\class\Bicchieri;
use App\Gestionale\class\Coltelli;
use App\Gestionale\class\Piatti;
use App\Gestionale\class\Posate;

// se la sessione utente è verificata compi queste azioni : 
if (isset($_SESSION["nome"])) {

    //istanzio bicchieri
    $bicchieri=new Bicchieri();
    
    //istanzio coltelli
    $coltelli=new Coltelli();

   //istanzio piatti
    $piatti=new Piatti();

    //istanzio posate
    $posate=new Posate();


}

?>
<div class="sfondo-index">
    <div class="container-carrello">
        <div class="cronologia">
            <div class="testo-cronologia">
                <h1>CRONOLOGIA ORDINI :</h1>
            <hr>
            </div>
            <!--BICCHIERI  -->
            <div class="box1-cronologia">
                <?php
                 if(isset($_POST["invia-bicchieri"])) //invio form bicchieri
                 {
                     $bicchieri->stampoBicchieri();
                     
                    //  $bicchieri->stampaBicchieriDisponibili();
                 }
                ?>
            </div>
            <!--COLTELLI  -->
            <div class="box2-cronologia"> 
                <!-- box testo coltelli -->
                <div class="box-testo-coltelli">
                <?php
                 if(isset($_POST["invia-coltelli"])) //invio form coltelli
                 {
                     $coltelli->stampoColtelli();
                 }
                ?>     
                </div>
                 <div class="box-foto-coltelli">
                    <img src="" alt="" id="coltello-foto-carrello">
                 </div>
            </div>
            <!--PIATTI  -->
            <div class="box3-cronologia">
            <?php
                 if(isset($_POST["invia-piatti"])) //invio form piatti
                 {
                     $piatti->stampoPiatti();
                 }
                ?>
            </div>
            <!--POSATE  -->
            <div class="box4-cronologia">
            <?php
                 if(isset($_POST["invia-posate"])) //invio form posate
                 {
                     $posate->stampoPosate();
                 }
                ?>
            </div>
            
        </div>
    </div>
</div>