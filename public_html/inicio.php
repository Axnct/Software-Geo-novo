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
        <!-- locastyle -->
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
        <!-- fim locastyle -->
        
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script> 
      
  
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
        <div id="relatorios">
            <h2>Últimos Relatórios</h2>
            <table class="table table-hover">
                <thead>
                  <tr class="active">
                    <th style="text-align: center;">#</th>
                    <th style="text-align: center;">Relatório</th>
                    <th style="text-align: center;">Data de criação</th>                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">Relatório 1</td>
                    <td style="text-align: center;">10/10/2014</td>                    
                  </tr>
                  <tr>
                    <td style="text-align: center;" >2</td>
                    <td style="text-align: center;" >Relatório 2</td>
                    <td style="text-align: center;">10/10/2014</td>                   
                  </tr>                 
                  <tr >
                    <td style="text-align: center;">3</td>
                    <td style="text-align: center;">Relatório 1</td>
                    <td style="text-align: center;">10/10/2014</td>                   
                  </tr>                 
                </tbody>
              </table>
            
        </div>
            
            
        <div id="acessos">
            <h2>Últimos Acessos</h2>
            <table class="table table-hover">
                <thead>
                  <tr class="active">
                    <th style="text-align: center;">#</th>
                    <th style="text-align: center;">Usuário</th>
                    <th style="text-align: center;">Data/Hora</th>                    
                    <th style="text-align: center;">Status</th>                    
                  </tr>
                </thead>
                <tbody style="text-align: center;">
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">Cláudio (ADM)</td>
                    <td style="text-align: center;">20/10/2014 - 13:33</td>                    
                    <td style="text-align: center;">Offline</td>                    
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td style="text-align: center;">Yan (ADM)</td>
                    <td style="text-align: center;">20/10/2014 - 12:22</td>                    
                    <td style="text-align: center;">Offline</td>                    
                  </tr>                 
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td style="text-align: center;">Yan (ADM)</td>
                    <td style="text-align: center;">11/10/2014 - 00:25</td>                    
                    <td style="text-align: center;">Offline</td>                    
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td style="text-align: center;">Cláudio (ADM)</td>
                    <td style="text-align: center;">10/10/2014 - 15:59</td>                    
                    <td style="text-align: center;">Offline</td>                    
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td style="text-align: center;">Yan (ADM)</td>
                    <td style="text-align: center;">08/10/2014 - 05:13</td>                    
                    <td style="text-align: center;">Offline</td>                    
                  </tr>
                  <tr>
                    <td style="text-align: center;">6</td>
                    <td style="text-align: center;">Yan (ADM)</td>
                    <td style="text-align: center;">05/10/2014 - 10:24</td>                    
                    <td style="text-align: center;">Offline</td>                    
                  </tr>
                  <tr>
                    <td style="text-align: center;">7</td>
                    <td style="text-align: center;">Cláudio (ADM)</td>
                    <td style="text-align: center;">05/10/2014 - 15:33</td>                    
                    <td style="text-align: center;">Offline</td>                    
                  </tr>
              </table>
        </div>      
        </div>
        
        
        
        <!-- SCRIPT JQUERY -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        
        <!-- Locastyle -->
        <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
	<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </body>
</html>
