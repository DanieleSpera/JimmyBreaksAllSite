   <div id="boxfoto">
      <span pag="eventi"></span>
      
      <!-- Estrai a random immagine da relativa cartella -->
      <?php
      	//prendi variabile GET
      	 $evento = $_GET['pag'];
      	 // Array descrizione di ciascuna serata
      	 $descrizione = array(
      	 	 "jimmy night" => "Contro gli hipsterismi di massa, le Jimmy Night vedono alternarsi sul palco band selezionate e certificate Jimmy, musica di qualità degna degli anni 2000.<br/> A queste si aggiungono anche main event che vedono la partecipazione di guest note a cui vengono affiancati gruppi collaudati della scena locale.<br/> Tra i diversi ospiti Boosta from Subsonica, Fratelli Calafuria, What a Funk e Duff",
      	     "galvanite" => "La serata elettronica/American party della Jimmy Breaks All, in collaborazione con la NosNop e diversi club della bergamasca.</br> Resident della Galvanite Dj Skinny, R3t e Funk Bluster Bros di navigata esperienza per far saltare fino alle 4. </br>Completano la serata maschere,le ragazze della galva e irriverenza. </br> Nella suo main event Galvanite ha anche visto come guest la partecipazione dei Belzebass.",
      	     "black milk" => "Serata in collaborazione con l'Amigdala Theatre di Trezzo d'Adda ricalca le ultime tendenze Trap e le unisce alla Dance Hall, alla Dubstep e alle diverse sonorità dalla musica black contemporanea.<br/> Resident della serata DbTrex Crew, R3t e Degenere. <br/> Ha inoltre coinvolto nella seconda serata Aquadrop dj milanese sostenuto e suonato tra gli altri da Skrillex e Diplo<br/>A ottobre l'apertura della nuova stagione con nuove guest dal cuore nero!",
			);
      	 
      	 // recupera immagine collegata ad evento e inserisci il tag img
         $files = glob("images/eventi/{".$evento."}*.{jpg,png,gif}", GLOB_BRACE);
         $file = $files[array_rand($files)];
         echo "<img id=\"boximg\" src=\"".$file."\"/>";
         
      ?>
   </div>

   <div id="frase">

   </div>

   <div id="eventi">
      <ol>
        <li><?php echo strtoupper($evento); ?></li>
        <li style="line-height: 25px; font-style: italic;"><?php echo ($descrizione[$evento]); ?>  </li>
      </ol>
   </div>



