<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title></title> 
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <!-- locastyle -->
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
        <!-- fim locastyle -->
        <!-- Redu Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap-redu.css">
<!--        <link rel="stylesheet" href="css/docs.css">-->
        <link rel="stylesheet" href="docs/assets/css/vendor/google-code-prettify.min.css">
        <script src="js/vendor/modernizr.js"></script>
<!--        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
        
    </head>
    <body style="padding-top: 0px;">
        <!--[if lt IE 7]>
            <p class="browsehappy">Navegador muito<strong>antigo</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a>.</p>
        <![endif]-->
        
        <div class="container"> <!-- menu -->
            <?php
            include ("menu.php");
            ?>
        </div>
        
        <!-- INICIO CONTEUDO DO SITE -->
        <div class="container">            
            <div class="form-group">
                   <nav class="navbar navbar-default" role="navigation">
                     <div class="container-fluid">
                       <!-- Brand and toggle get grouped for better mobile display -->
                       <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                         </button>
                         <a class="navbar-brand" href="#">Brand</a>
                       </div>

                       <!-- Collect the nav links, forms, and other content for toggling -->
                       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                         <ul class="nav navbar-nav">
                           <li class="active"><a href="#">Link</a></li>
                           <li><a href="#">Link</a></li>
                           <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                             <ul class="dropdown-menu" role="menu">
                               <li><a href="#">Action</a></li>
                               <li><a href="#">Another action</a></li>
                               <li><a href="#">Something else here</a></li>
                               <li class="divider"></li>
                               <li><a href="#">Separated link</a></li>
                               <li class="divider"></li>
                               <li><a href="#">One more separated link</a></li>
                             </ul>
                           </li>
                         </ul>
                         <form class="navbar-form navbar-left" role="search">
                           <div class="form-group">
                             <input type="text" class="form-control" placeholder="Search">
                           </div>
                           <button type="submit" class="btn btn-default">Submit</button>
                         </form>
                         <ul class="nav navbar-nav navbar-right">
                           <li><a href="#">Link</a></li>
                           <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                           </li>
                         </ul>
                       </div><!-- /.navbar-collapse -->
                     </div><!-- /.container-fluid -->
                   </nav>
        	
            </div>
           
        </div>
        
       <div class="container">
            <div id="relatorios" style="overflow: auto; width: 100%; max-height: 200px;">
                 <h1>RELATÓRIOS</h1>
                            <div class="span16">
                             <table class="table-with-borderradius table-with-link">

                                     <thead>
                                             <tr class="active"> 
                                             <td><b>Nome da Busca</b></td>
                                             <td><b>Data <b></td>
                                             </tr>
                                     </head>

                                     <tbody>
                                             <tr> 
                                             <td><a href ="exemplosrelatorios.html">Relatório 1</a></td>
                                             <td>01/03/2014 14:53:45</td>

                                     </tr>

                                     <tr class="active"> 
                                         <td><a href="#">Relatório 2</a></td>
                                             <td>01/03/2014 08:22:45</td>

                                     </tr>
                                     
                                     </tbody>  
                             </table>
                            </div>

                </div>          
            
       </div>
        
        
        
        
        <!-- SCRIPT JQUERY -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
	
        <!-- locastyle -->
		<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
		<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <!-- Redu Bootstrap -->
        <script src="js/vendor/rails.js"></script>
        <script src="docs/assets/js/vendor/google-code-prettify.min.js"></script>
        <script src="docs/assets/js/vendor/bootstrap-scrollspy.min.js"></script>
        <script src="js/vendor/jquery.tokeninput.js"></script>
        <script src="js/vendor/jquery.autosize.min.js"></script>
        <script src="js/vendor/placeholder-polyfill.min.js"></script>
        <script src="js/bootstrap-redu.js"></script>
        <script src="http://use.typekit.com/lpo4rgu.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
    
    </body>
</html>