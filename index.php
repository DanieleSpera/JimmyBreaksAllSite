<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<!-- titolo e metatag/icona -->
	<title>Jimmy Breaks All!</title>
	<link rel="shortcut icon" href="images/jimmyicon.png">
	<meta name ="description" content="Jimmy Breaks All:Compilation di gruppi emergenti di Bergamo. Il progetto organizza concerti nei principali locali della bergamasca. Inoltre supporta tutta la buona musica rock e alternative inedita e originale della provincia"/>
	<meta name="keywords" content="Jimmy breaks all,gruppi emergenti, musica originale, Rock & Roll, Bergamo, Compilation, musica, Le Capre a Sonagli,Isabelle Urla, Antidoto alla Noia,Neurania,Plug,Le Madri Degli Orfani,Alex Snipers"/>
	<link rel="image_src" href="images/logojimmy.png" />
	
<!-- CSS -->
   <link rel="stylesheet" type="text/css" media="screen" href="css/stylereset.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="css/stylehome.css" />
   
<!-- Importa Font -->
   <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<!-- JQuery -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Home page script -->
    <script src="scripts/homepage.js"></script>
</head>

<body>

<div id="content">
<!-- START ------------------------------------------------------------------------------>

<div id="logo">
   <img src="images/logojimmy.png">
</div>

<div id="evidenza">
	<a href="https://www.facebook.com/events/441834995990819/" target=”_blank”><img src="images/copertine/2015-05-09-blackmilk-with-aquadrop.jpg"/></a>
	<div id="evidenzafrase">
		Last Show
	</div>
</div>

<!-- Modulo Menù---------------------------------------- -->
<div id="menu">
   <ul>
     <li id="chisiamo">Chi siamo</li>
     <li>Serate
     	<ul>
        	<li class="serata">Jimmy Night</li>
        	<li class="serata">Galvanite</li>
        	<li class="serata">Black Milk</li>
     	</ul>
     </li>
     <li id="contatti">Info & Contatti</li>
     <li><a href="http://jimmybreaksall.us4.list-manage.com/subscribe?u=ad1e200c6a8b76508fe7222d8&id=8ce44e0734">Mailing List</a></li>
   </ul>
</div>

<!-- Modulo/pop up contatti---------------------------------------- -->
<div id="contacts">
   <div id="contactsimg">
      <img src="images/logojimmy.png">
   </div>
   
   <div id="contactsinfo">
   	<div id="contacticon">
   		<a href="https://www.facebook.com/JimmyBreaksAll"><img src="images/servizio/facebook-icon.png"/></a>
        	<a href="http://www.twitter.com/jimmybreaksall "><img src="images/servizio/twitter-icon.png"/></a>
        	<a href="http://www.bandsintown.com/JimmyBreaksAll!"><img src="images/servizio/bandsintown-icon.png" /></a>
      </div>

      <p>
	      Mail: <a href="mailto:info@jimmybreaksall.com">info@jimmybreaksall.com</a><br/>
	      Cell: 392-2607497 (Daniele)
      </p>
      <p id="closeContactDialog">Premi esc per uscire</p>
   </div>
</div>
<!-- END Modulo contatti---------------------------------------- -->

<!-- Icone Social -->
<div id="socialicon">
   <ol>
	<li><a href="https://www.facebook.com/JimmyBreaksAll"><img src="images/servizio/facebook-icon.png"/></a></li>
        <li><a href="http://www.twitter.com/jimmybreaksall "><img src="images/servizio/twitter-icon.png"/></a></li>
        <li><a href="http://www.bandsintown.com/JimmyBreaksAll!"><img src="images/servizio/bandsintown-icon.png" /></a></li>
   </ol>
</div>

<!-- Box Centrale, contenuto immesso da Script Jquery-->
<div id="boxcentrale">

</div>

<!-- Striscia scorrevole, contenuto aggiornato da Script Jquery-->
<div id="boxbasso">

   <div id="scroller" style="width: 550px; height: 200px; margin: 0 auto;">
       <div class="innerScrollArea">
           <ul>
            <?php
               // prendi da cartella copertine le immagini del 2015
               $files = glob("images/copertine/{2015}*.{jpg,png,gif}", GLOB_BRACE);
               rsort($files);
               foreach($files as $filename) {
                  echo"<li><img src=\"".$filename."\"  width=\"549\" height=\"200\"/></li>";
               }
            ?>
           </ul>
       </div>
   </div>
</div>


<div id="footer">
   <img src="images/servizio/scritta-jimmy-foot.png"/> <br/>
	&copy; 2010-2014 by JimmyBreaksAll. All Rights Reserved. Made in ITALY.
</div>

<!-- END PAGINA ----------------------------------------------------------->
</div>

   <script type="text/javascript" src="scripts/scroller.js"></script> 

</body>

</html>
