$(function(){

  /*Importa moduli sezione centrale e footer*/	
  $( "#boxcentrale" ).load( "home.php", function(){});
  $( "#boxbasso" ).load( "striscia.php?pag=home",function() {$.getScript("scripts/scroller.js", function(){});});
  
  /*Inizializza finestra di dialogo contatti*/	
  $('#contacts').dialog({
     autoOpen: false,
     modal: true,
     resizable: false,
     width: 280,
     show: {
        effect: "fade",
        duration: 500
     },
     hide: {
        effect: "drop",
        duration: 500
     }
  });
  
  /* Click su logo */
  $("#logo img").click(function(){
    var pag = $("#boxcentrale span").attr('pag');
    if (pag!="home"){
       $( "#boxcentrale" ).load( "home.php", function() {});
       $( "#boxbasso" ).show().load(      									});
    };  
  });
  
  /*nascondi barra finestra di dialogo*/
  $(".ui-dialog-titlebar").hide();
  
  /*Gestione Menù*/
  $("#chisiamo").click(function(){
    $( "#boxcentrale" ).load( "chisiamo.php", function() {});
    $( "#boxbasso" ).hide();
  });
  
  /*Gestione Dialong Contatti*/
  $("#contatti").click(function(){
     $('#contacts').dialog("open");
  });      
  
  $("#closeContactDialog").click(function(){
     $('#contacts').dialog("close");
  });
  
  /* Click evento */
  $(document).on('click', '.serata', function(e) {
  	var ser = $(this).text().toLowerCase().replace(/\s/g,"%20");
  	$( "#boxcentrale" ).load( "eventi.php?pag="+ser, function() {});
  	$( "#boxbasso" ).show().load( 
  		"striscia.php?pag="+ser+" #scroller",
  		function() {$.getScript(
  			"scripts/scroller.js",
  			function(){}
  			)}
  	);
  });
  
/* Fine Gestione Menù */   
 
});
