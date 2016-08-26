   <div id="boxfoto">
      <span pag="home"></span>
      
      <!-- Estrai a random immagine da relativa cartella -->
      <?php
         $files = glob("images/foto-home/*.{jpg,png,gif}", GLOB_BRACE);
         
         $file = $files[array_rand($files)];
         echo "<img id=\"boximg\" src=\"".$file."\"/>";
      ?>
   </div>

	<!-- Frase su immagine -->
   <div id="frase">
      Dalla parte della musica emergente
   </div>

	<!-- colonna dx/eventi -->
   <div id="eventi">
      <ol>
        <li>LE NOSTRE SERATE</li>
        <li class="serata">JIMMY NIGHT</li>
        <li class="serata">GALVANITE</li>
        <li class="serata">BLACK MILK</li>
        <!-- <li>Jimmy productions</li> -->
      </ol>
   </div>



