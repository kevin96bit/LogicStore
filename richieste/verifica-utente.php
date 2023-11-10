<?php
session_start();

if (isset($_POST["bottone-invia"]))
{
    $nome_utente=$_POST["nome"];
    $cognome_utente=$_POST["cognome"];
    $email_utente=$_POST["email"];
    $password_utente=$_POST["password"];

    $_SESSION["nome"] = $nome_utente;
    $_SESSION["cognome"] = $cognome_utente;
    $_SESSION["email"] = $email_utente;
    $_SESSION["password"] = $password_utente;

   // se tutte le sessioni create sono verificate  
   if (
    isset($_SESSION["nome"])
    &&
    isset($_SESSION["cognome"])
    &&
    isset($_SESSION["email"])
    &&
    isset($_SESSION["password"])
        )
        // mandami nella pagina di benvenuto
        {
            header("Location: ../pages/benvenuto.php");
    
    
        }




}





?>