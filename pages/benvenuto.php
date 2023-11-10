<?php
session_start();
if(isset($_SESSION["nome"])):
?>
<div class="sfondo-benvenuto">
<h1>Grazie  <?php echo ucfirst($_SESSION["nome"]);?> per esserti iscritto</h1>
<button><a href="../index.php">Ritorna alla Homepage</a></button>

<button><a href="../index.php?page=carrello">Vai al carrello</a></button>

</div>
<!-- altrimenti -->
<?php else: ?> 
    <h1>Non hai i permessi per accedere a questa area</h1>
    <button><a href="../index.php?page=registrati">Registrati ora</a></button>
    <!-- } -->
    <?php endif ?>