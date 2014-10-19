<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/styles.css" rel="stylesheet">   
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
    <!--         Locastyle -->
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
         

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>        
        
         <!-- add button -->
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
       
        <link rel="stylesheet" type="text/css" href="css/demo.css"/>

	<!-- Dependencies: JQuery and GMaps API should be loaded first -->
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- CSS and JS for our code -->
	<link rel="stylesheet" type="text/css" href="css/jquery-gmaps-latlon-picker.css"/>
	<script src="js/jquery-gmaps-latlon-picker.js"></script>        
        
       
        
        

  </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">Navegador muito<strong>antigo</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a>.</p>
        <![endif]-->
        
        <div class="container">
            <?php
            include ("menu.php");
            ?>
        </div>
        
        <!-- INICIO CONTEUDO DO SITE -->
        <div class="container">         
          
   
            <div id="mapa" style="width: 100%; min-height: 300px; height: 450px;">           
                <div style="border: 2px solid grey; height: 129%;"> <!-- parte do mapa -->
                  <form>
                        <fieldset class="gllpLatlonPicker">
                                    <div class="gllpMap"></div>                               
                                    <div style="height: 125px; background-color: #EDEDED;">
                                        <h4 style="float: left; margin-top: 30px; margin-left: 50px;">Latitude:</h4> <input type="text" class="gllpLatitude form-control" value="-23.4245878" style="width: 20%;float: left;margin-left: 15px;margin-top: 22px;"/><br/>
                                        <h4 style="float: left; margin-left: 20px;">Longitude:</h4> <input type="text" class="gllpLongitude form-control" value="-51.9385272" style="float: inside; margin-left: 480px; width: 225px;"/><br/>
                                        <h4 style="float: left; margin-left: 50px;">Zoom:</h4> <input type="text" class="gllpZoom form-control" value="15" style="float: left; margin-left: 32px; width: 225px;"/>
                                        <input type="button" class="gllpUpdateButton btn btn-default" value="Atualizar Mapa" size="200px" style="float: right; margin-right: 194px; margin-top: -53px;">                                    
                                        <h4 style="float: left; margin-left: 23px;">Nome da Posição:</h4> <input type="text" class="gllpLocationName form-control" size=80 style="float: left; margin-left: 15px; width: 400px;"/><br/>                                    
                                    </div>
                        </fieldset>
                                
                    </form>
                </div>
            </div>            
            
        </div>
        
        
        
        
        <!-- SCRIPT JQUERY -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>        
        <script src="js/main.js"></script>
        <!--          Locastyle -->
        <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
        <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <!-- Fim Locastyle -->
       
    </body>
</html>
