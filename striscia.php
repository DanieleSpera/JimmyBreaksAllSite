   <div id="scroller" style="width: 550px; height: 200px; margin: 0 auto;">
       <div class="innerScrollArea">
           <ul>
            <?php
            	//recupera variabile Get
               $pag=$_GET['pag'];
               $pag = str_replace(' ', '', $pag);
               // se pagina principale recupera copertine 2015
               if ($pag=="home"){
               	$files = glob("images/copertine/{2015}*.{jpg,png,gif}", GLOB_BRACE);
               }
               else
               {
				//altrimenti recupera copertine collegate ad evento nella relativa cartella
             	$files = glob("images/copertine/*{".$pag."}*.{jpg,png,gif}", GLOB_BRACE);
               }
               rsort($files);
               foreach($files as $filename) {
                  echo"<li><img src=\"".$filename."\"  width=\"549\" height=\"200\"/></li>";
               }
            ?>
           </ul>
       </div>
   </div>