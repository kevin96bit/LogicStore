<?php
session_start();
// <!-- IMPOSTAZIONE COOKIE 1 GIORNO -->
// verifica l'input della riga 81 input per accetare il cookie
if (isset($_POST['ak'])) 
{
   // Imposta un cookie che scadrà tra 1 giorno.
   //            nome       valore   scadenza
   setcookie('cookieTempo', 'true', strtotime("+1 day"));
   header ("Location: ./index.php");
}
    //secondo if per rifiutare  
    if (isset($_POST['rc'])) 
    {
       // Imposta un cookie che scadrà tra 1 giorno.
       //            nome       valore   scadenza
       setcookie('cookieTempo', 'false', strtotime("+1 day"));
       header ("Location: ./index.php");
    }

//RICHIEDO IL VENDOR GRAZIE AL REQUIRED_ONCE 
require_once "./vendor/autoload.php";
use App\Gestionale\class\Bicchieri;
var_dump(Bicchieri::$bicchieriDisponibili);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300&family=Inter:wght@200;400;900&family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200;300;400;500;600;700&family=Poppins:wght@400;600&family=REM:wght@200;300;400;500;800;900&family=Varela&display=swap" rel="stylesheet">
    <!-- fine test -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>
        <?php 
     if(isset($_GET["page"]))
     {
         echo $_GET["page"];
     }
     // se la richiesta non è settata mi devi includere la home page
     else
     {
        echo "homepage";
     }
    ?> 
    </title>
    </head>
    <body>
    
    <div class="sfondo-index"> 
    
    <!-- includo il menù che è in un file dentro components chiamato header.php -->
    <?php include_once "./components/menu.php" ?>

    <?php include_once "./components/banner.php" ?>
    
    <?php
    //  verifico che la richiesta get sia settata
    if(isset($_GET["page"]))
    {
        include_once "./pages/$_GET[page].php";
    }
    // se la richiesta non è settata mi devi includere la home page
    else
    {
        include_once "./pages/homepage.php";
    }
    ?>

   


</div>
<!-- test banner cookie cliente -->
<!-- se NON è settato il cookie applica la classe "show" altrimenti "none"   -->
                                        <!-- l'uguale nel tag php sostituisce l'echo -->
<div id="cookie-banner" class="cookie-banner <?= isset($_COOKIE["cookieTempo"]) ?  "none" :  "show" ?>">
        <p class="testo-cookie">Questo sito utilizza i cookie. Accetta per migliorare la tua esperienza.</p>
        <form   action ="" method="post">
        <input  type="submit" name="ak"  class="bottone-cookie" >Accetta</input>
        <input  type="submit" name="rc"  class="bottone-cookie" >Rifiuta</input>
        </form>
    </div>



<!-- script del tasto di ricerca  -->
<script src="./assets/js/script.js"></script>
</body>
</html>


    














    