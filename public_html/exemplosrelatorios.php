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
        
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
         

       

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
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
            
          <div id="relatorios">        
                <div style="border: 2px solid grey;"> <!-- parte do mapa -->                     
                    <img ondrop="drop(event)" ondragover="allowDrop(event)" style="opacity: 1; width: 100%;" src="img/mapa.jpg">
                </div>
              
                 <!-- Drag and Drop -->
                        <style>
                        #div1
                        {float:left; width:35px; height:35px; margin:10px;padding:10px;}
                        </style>
                        <script>
                        function allowDrop(ev) {
                            ev.preventDefault();
                        }

                        function drag(ev) {
                            ev.dataTransfer.setData("text/html", ev.target.id);
                        }

                        function drop(ev) {
                            ev.preventDefault();
                            var data = ev.dataTransfer.getData("text/html");
                            ev.target.appendChild(document.getElementById(data));
                        }
                        </script>                      
                        

                        <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <img src="img/push.png" draggable="true" ondragstart="drag(event)" id="drag1" width="32" height="32" style="opacity: 1; margin-top: 25px; margin-left: 20px;">
                        </div>
                        
                        <div style="margin-top: 20px;">
                            <div class="form-group" style="width: 380px; margin-left: 90px;">
                                <label for="exampleInputEmail1" style="font-size: large;">Referências</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Insira o nome da referência">
                                    <p class="help-block" style="font-size: initial;">Clique e arraste o ícone para o mapa no local desejado.</p>
                            </div>
                            
                        </div>
                        
                        <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <img src="img/push.png" draggable="true" ondragstart="drag(event)" id="drag1" width="32" height="32" style="opacity: 1; margin-left: 20px;">
                        </div>
                        
                        <div style="margin-top: 20px;">
                            <div class="form-group" style="width: 380px; margin-left: 90px;">                                
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Insira o nome da referência">
                                    <p class="help-block" style="font-size: initial;">Clique e arraste o ícone para o mapa no local desejado.</p>
                            </div>
                            
                        </div>

                       
              
         </div>            
            
            
            
        <div id="acessos">
            <table width="90%" align = center border="2px"  bordercolor="#808080" style="margin-top: 20px;"> 
               <tbody>
                    <th width=100%>                    
                    Relatório
                    </th>

                      <tr> 
                           <td width="100%">                                
                                O perpetrador se encontrava a nordeste do Shopping Aspen Park ,<br>
                                 como indica no mapa da geolocalização .<br />
                               O perpetrador ficou no mesmo local aproximadamente durante 2 horas,
                                provavelmente a espera de sua  vítima.<br />
                                Que trabalha nas localizações próximas de onde ele se encontrava. <br/>
                               A Seguir temos uma amostra da geolocalização  de onde ele se encontrava. <br/>
                               etc...<br />
                               (...)</td>
                      </tr>              
               </tbody>             
            </table> 
            
            <div class="btn-group btn-group-justified" style="margin-top: 50px;">
                <button type="button" class="btn btn-default btn-lg" style="width: 120px;">
                       <span class="glyphicon glyphicon-print"></span> Imprimir
                </button>
                <button type="button" class="btn btn-default btn-lg" style="width: 120px;">
                       <span class="glyphicon glyphicon-cog"></span> Editar
                </button>
                <button type="button" class="btn btn-default btn-lg" style="width: 120px;">
                       <span class="glyphicon glyphicon-remove"></span> Excluir
                </button>
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
