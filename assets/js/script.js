//-------------------------TASTO DI RICERCA--------------------- 
// Importo il campo di ricerca e il pulsante di ricerca
const searchInput = document.querySelector('.input-search');
const menuDropdown = document.querySelector('.menu-dropdown'); // Seleziona il menu a tendina
const dropdownList = document.querySelector('.dropdown-list'); // Seleziona la lista dei risultati

// creo un array di oggetti 
const prodotti = [
  { nome: 'Coltelli', prezzo: 120.25 },
  { nome: 'Piatti', prezzo: 70.00 },
  { nome: 'Posate', prezzo: 40.00 },
  { nome: 'Bicchieri', prezzo: 45.70 },
];

// Ascoltatore per il campo di ricerca
// quando l'utente digita all'interno dell'elemento di input associato a searchInput, eseguiRicerca() verrà eseguita.
searchInput.addEventListener('input', () => {
    eseguiRicerca();
});

// Chiudi il menu a tendina quando si fa clic fuori da esso
document.addEventListener('click', (event) => {
    if (!menuDropdown.contains(event.target) && event.target !== searchInput) {
        menuDropdown.style.display = 'none';
    }
});

// Funzione per eseguire la ricerca
function eseguiRicerca() {
    // Otteniamo il termine di ricerca dalla casella di input
    const termineRicerca = searchInput.value.toLowerCase();

    // Filtriamo i prodotti che iniziano con il termine di ricerca
    const prodottiFiltrati = prodotti.filter(prodotto => {
        const nomeProdotto = prodotto.nome.toLowerCase();
        return nomeProdotto.startsWith(termineRicerca);
    });

    // Mostra o nascondi il menu a tendina
    if (termineRicerca) {
        menuDropdown.style.display = 'block';
    } else {
        menuDropdown.style.display = 'none';
    }

    // Aggiorna il menu a tendina con i risultati
    dropdownList.innerHTML = ''; // Puliamo i risultati precedenti

    prodottiFiltrati.forEach((prodotto) => {
        const listItem = document.createElement('li');
        // primo argomento classe e secondo nome della classe
        listItem.setAttribute(`class`,"item-dropDown")
        listItem.textContent = `- ${prodotto.nome}, Prezzo: €${prodotto.prezzo.toFixed(2)}`;
        dropdownList.appendChild(listItem);
        // osserva dopo lezione :
        listItem.addEventListener("click" , ()=>{
            // quando clicchi ti porta su un altra pagina 
            window.location.href= /*percorso via path, parte dalla index*/ "./pages/prodotti.search.php" 
        })
    });
}






// test foto 


  



