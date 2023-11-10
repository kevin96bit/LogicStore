<div class="sfondo-index">

<div class="container-homepage">
	<div class="box1-alto">
	<!-- CARD1 -->
		<div class="box-card-coltelli">
			<!-- ---------------------TEST BOX COLTELLI------------------------->
					<div class="card">
				<div class="imgBx">
					<img src="./assets/img/coltello.jpg">
				</div>
				<div class="details">
					<h3>Buffalo Knife<br><span>Coltelli professionali</span></h3>
					<h4>Info prodotto</h4>
					<p>"Coltelli professionali, strumenti affidabili per precisione culinaria e prestazioni eccezionali."</p>
					
					<div class="group">
						<!-- FORM DEI COLTELLI PRENDERE DI RIFERIMENTO IL NAME "INVIA-COLTELLI" PER LE VERIFICHE  -->
						<form class="form-coltelli" action="./index.php?page=carrello" method="post" id="coltelli-Id">
							<h3><sup>€</sup>120<small>.25</small></h3>
							<input class="input-card" type="submit" value="AGGIUNGI AL CARRELLO" name="invia-coltelli">		
						</form>
						
						
					</div>
				</div>
			</div>
        
        <!------------------------ TEST BOX PIATTI ------------------------------->
		</div>
		<div class="box-card-piatti">
			<div class="card">
					<div class="imgBx">
						<img src="./assets/img/piatti.jpg">
					</div>
					<div class="details">
						<h3>Set Elina<br><span>Piatti professionali</span></h3>
						<h4>Info prodotto</h4>
						<p>"Piatti professionali, l'eleganza del design incontra la funzionalità in cucina."</p>
						<div class="group">
							<!-- FORM DEI PIATTI PRENDERE DI RIFERIMENTO IL NAME "INVIA-PIATTI" PER LE VERIFICHE  -->
							<form id="form-piatti" action="./index.php?page=carrello" method="post">
								<h3><sup>€</sup>70<small>.00</small></h3>						
								<input class="input-card" type="submit" value="AGGIUNGI AL CARRELLO" name="invia-piatti">								
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
	<div class="box2-basso">
	<!------------------------ TEST BOX POSATE ------------------------------->	
	<div class="box-card-posate">
		<div class="card">
					<div class="imgBx">
						<img src="./assets/img/posate.jpg">
					</div>
					<div class="details">
						<h3>set Golden<br><span>Posate professionali</span></h3>
						<h4>Info prodotto</h4>
						<p>"L'arte della degustazione con strumenti di precisione impeccabile."</p>
						<div class="group">
							<!-- FORM DELLE POSATE PRENDERE DI RIFERIMENTO IL NAME "INVIA-POSATE" PER LE VERIFICHE  -->
							<form id="form-posate" action="./index.php?page=carrello" method="post">
								<h3><sup>€</sup>40<small>.00</small></h3>
								<input class="input-card" type="submit" value="AGGIUNGI AL CARRELLO" name="invia-posate">
							</form>
						</div>
					</div>
				</div>
		</div>
		<!------------------------ TEST BOX BICCHIERI ------------------------------->
		<div class="box-card-bicchieri">
		<div class="card">
				<div class="imgBx">
					<img src="./assets/img/bicchieri.jpg">
				</div>
				<div class="details">
					<h3>Set MaestroSip<br><span>Bicchieri professionali</span></h3>
					<h4>Info prodotto</h4>
					<p>"Il tocco finale per esaltare l'esperienza di degustazione."</p>
					
					<div class="group">
						<!-- FORM DEI BICCHIERI PRENDERE DI RIFERIMENTO IL NAME "INVIA-BICCHIERI" PER LE VERIFICHE  -->
						<form id="form-bicchieri" action="./index.php?page=carrello" method="post">
								<h3><sup>€</sup>45<small>.70</small></h3>
								<input class="input-card" type="submit" value="AGGIUNGI AL CARRELLO" name="invia-bicchieri">	
							</form>
					</div>
				</div>
			</div>
		<!-- FINE CARD  -->
		</div>
	</div>
</div>
</div>
<!-- il cookie-banner è collegato ad una funzione nella riga 76 dello script -->
<div id="cookie-banner" class="cookie-banner">
        <p class="testo-cookie">Questo sito utilizza i cookie. Accetta per migliorare la tua esperienza.</p>
        <!-- funzione accettaCookie riga 83 nello script -->
		<button class="bottone-cookie" onclick="accettaCookie()">Accetta</button>
        <!-- funzione rifiutaCookie riga 90 nello script -->
		<button class="bottone-cookie" onclick="rifiutaCookie()">Rifiuta</button>
    </div>


<script>
    // crea una variabile che prende di riferimento la verifica del nome e restituisce true o false
    // se "nome" è verificato restituisce la stringa true, altrimenti false ( operatori ternari )
    let utenteLoggato = <?php echo isset($_SESSION["nome"]) ? 'true' : 'false'; ?>;
    // se l'utente non è loggato
    if (!utenteLoggato) {
        //prendi di riferimento tutti i "form" e crea un ciclo :
        let formVerifica = document.querySelectorAll("form");
        //se "i" è minore del conteggio dei form allora incrementa di 1 (i++)
        for (let i = 0; i < formVerifica.length; i++) {
            //Per ogni elemento <form> con la classe formVerifica, aggiungo un listener per l'evento submit.
            //  L'evento submit viene attivato quando un utente invia il modulo. lo fa la funzione, 
            // passata come secondo argomento a addEventListener viene eseguita.
             formVerifica[i].addEventListener("submit", function (e) {
                e.preventDefault();
                alert("Per completare i tuoi acquisti devi prima registrarti !");
            });
        }
    }
</script>






  



    
