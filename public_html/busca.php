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
       

        <script>

           $(document).ready(function() {
             var max_fields      = 10; //maximum input boxes allowed
             var wrapper         = $(".input_fields_wrap"); //Fields wrapper
             var add_button      = $(".add_field_button"); //Add button ID

             var x = 1; //initlal text box count
             $(add_button).click(function(e){ //on add input button click
                 e.preventDefault();
                 if(x < max_fields){ //max input box allowed
                     x++; //text box increment
                     $(wrapper).append('<tr><td><input name="id" value="2" type="checkbox"></td><td> <div><input class="form-control input-lg" type="text" placeholder="-23.4467767" style="border: 1px solid grey;"></div></td><td> <div><input class="form-control input-lg" type="text" placeholder="-51.9137259" name="mytext[]" style="border: 1px solid grey;"></div></td><td> <div><input class="form-control input-lg" type="text" placeholder="120º" name="mytext[]" style="border: 1px solid grey;"></div></td><td><select name="select-simples" class="ls-select"><option value="1km">1km</option><option value="2km">2km</option><option value="3km">3km</option><option value="5km">5km</option></select></td></tr>'); //add input box
                 }
             });

             $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                 e.preventDefault(); $(this).parent('div').remove(); x--;
             })
         });

        </script>        

<!-- Fim button -->

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
            
            
            <div id="buscar">
                
                <!-- Button trigger modal -->
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Inserir Dados</a>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Realizar Busca</h4>
                                        </div>
                                        <div class="modal-body">
                                                <div class="add_field_button">
                                    <button type="button" class="btn btn-primary" style="float: right; margin: 5px; background: cadetblue;">Acrescentar</button>        
                                    </div>
                                       <form action="/servidor/salvar" method="post" disabled="" class="ls-form-text">
                                            <input type="hidden" name="token" value="ehOCabraMesmo">
                                            <div class="well well-sm clearfix ls-table-group-actions">
                                                    <p class="d-inline-block">
                                                            <strong class="counterChecks">0</strong>
                                                            <span class="counterChecksStr">item selecionado</span>
                                                    </p>
                                                    <div class="actions pull-right">                                       
                                                            <button type="button" class="btn btn-default">
                                                                    <a href="#" class="remove_field">Excluir</a>
                                                            </button>
                                                    </div>
                                            </div>
                                            <table class="table ls-table">
                                                    <thead>
                                                            <tr>
                                                                    <th class="txt-center"><input type="checkbox"></th>
                                                                    <th class="ls-nowrap col-xs-3">Longitude</th>
                                                                    <th class="hidden-xs">Latitude</th>
                                                                    <th class="hidden-xs">Azimute</th>
                                                                    <th class="hidden-xs">Raio</th>
                                                            </tr>
                                                    </thead>
                                                    <tbody class="input_fields_wrap">                                
                                                            <tr>
                                                                    <td><input name="id" value="1" type="checkbox"></td>
                                                                    <td> <div><input class="form-control input-lg" type="text" placeholder="-23.4467767" name="mytext[]" style="border: 1px solid grey;"></div></td>
                                                                    <td> <div><input class="form-control input-lg" type="text" placeholder="-51.9137259" name="mytext[]" style="border: 1px solid grey;"></div></td>
                                                                    <td> <div><input class="form-control input-lg" type="text" placeholder="120º" style="border: 1px solid grey;"></div></td>                                                                                              
                                                                    <td>
                                                                        <select name="select-simples" class="ls-select">
                                                                                <option value="1km">1km</option>
                                                                                <option value="2km">2km</option>
                                                                                <option value="3km">3km</option>
                                                                                <option value="5km">5km</option>
                                                                        </select>                                                 
                                                                   </td>
                                                            </tr>                                                                            
                                                    </tbody>
                                            </table>
                                    </form>
                                        </div>
                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary">Buscar</button>
                                        </div>
                                </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                    

             <button type="button" class="btn btn-success btn-lg">Buscar</button>

             <a data-toggle="modal" href="#myModal" class="btn btn-primary">Salvar Busca</a>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Salvar relatório</h4>
                                        </div>
                                        <div class="modal-body">
                                                <form role="form">
                                                    <fieldset>
                                                            <div class="form-group">
                                                                    <label>Nome do relatório</label>
                                                                    <input class="form-control" placeholder="Insira o nome do relatório">
                                                                    <label>Descrição</label>
                                                                    <textarea class="form-control" rows="3"></textarea>                                                                 
                                                            </div>
                                                    </fieldset>
                                                </form>
                                        </div>
                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-success">Salvar</button>
                                        </div>
                                </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->  

            </div>
            
            <div id="mapa" style="width: 100%; min-height: 300px; height: 450px;">           
                <div style="border: 2px solid grey;"> <!-- parte do mapa -->
                    <img style="opacity: 1; width: 100%;" src="img/mapa.jpg">
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
