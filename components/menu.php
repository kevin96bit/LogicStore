<div class="menu">
        <div class="list">
        <?php
            // se la sessione NON è settata stampami queste liste : 
            if(!isset($_SESSION["nome"])):?>
            <a href="./index.php?page=homepage">Homepage</a>
            <a href="./index.php?page=contatti">Contatti</a>
            <a href="./index.php?page=registrati">Registrati</a>
        
        
                    <!-- se la sessione invece è settata stampami queste liste -->
            <?php else: ?>
            <a href="./index.php?page=homepage">Homepage</a>
            <a href="./index.php?page=contatti">Contatti</a>
            <a href="./index.php?page=carrello">Carrello</a>
            <!-- fine if e else -->
            <?php endif ?>
        </div>
        <div>
            <input class="input-search" type="text" class="search-bar" placeholder="Cerca...">
            <button class="search-button">Cerca</button>
            <!-- Aggiungi il menu a tendina sotto il campo di ricerca -->
                <div class="menu-dropdown">
                    <ul class="dropdown-list">
                    <!-- Qui verranno visualizzati i risultati della ricerca -->
                    </ul>
                </div>
            <?php
            // se la sessione è settata stampami queste liste : 
            if(isset($_SESSION["nome"])):?>
            <a href="./index.php?page=logout">Logout</a>
            <?php endif ?>
        </div>
    </div>

    

