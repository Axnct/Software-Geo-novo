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
        <!-- Fim Locastyle -->

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
			<div style="text-align: -webkit-center;">
				<button data-toggle="modal" href="#myModal" class="btn btn-success ico-user " href="#" style="margin-bottom: 5px;">Adicionar Usuário</button>
                                                                       

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" style="max-width: 400px;">
                                                    <div class="modal-content">
                                                            <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    <h4 class="modal-title" id="myModalLabel">Novo Usuário</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form role="form">
                                                                    <fieldset>
                                                                            <div class="form-group">
                                                                                    <label for="exampleInputEmail1" style="float: left;">Nome</label>
                                                                                    <input class="form-control" placeholder="Insira seu nome aqui">
                                                                                    <p class="help-block">O Nome será usado para efetuar o login.</p>
                                                                                    <label for="exampleInputEmail1" style="float: left;">Email</label>
                                                                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Insira seu nome aqui">
                                                                            </div>
<!--                                                                            <div class="form-group">
                                                                                    <label for="exampleSelect">Tipo de Acesso</label>
                                                                                    <select id="exampleSelect" class="form-control">
                                                                                            <option value="">Administrador</option>
                                                                                            <option value="">Pesquisador</option>
                                                                                    </select>
                                                                            </div>-->
                                                                            <div class="form-group">
                                                                                    <label for="exampleInputPassword1" style="float: left;">Senha</label>
                                                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                                                                                    <label for="exampleInputPassword1" style="float: left; margin-top: 3px;">Confirmar Senha</label>
                                                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                                                                            </div>
                                                                    </fieldset>          
                                                                </form>     
                                                            </div>
                                                            <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                                    <button type="button" class="btn btn-success">Salvar usuário</button>
                                                            </div>
                                                    </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
			</div>
		
            <div class="ls-list" style="background-color: white;">
                    <header class="ls-list-header">
                            <div class="ls-group-actions" style="margin-bottom: 5px; margin-right: 5px;">
                                    <!-- Button trigger modal -->
                                     <a data-toggle="modal" href="#myModal1" class="btn btn-primary ico-cog">Editar</a>   
                            </div>                       
                            <div class="ls-list-title ico-user">
                                    <a href="">Claudio</a>                              
                            </div>
                    </header>
                    <div class="ls-list-content ">
                            <div class="col-xs-6 col-md-6">
                                    <strong class="ls-list-label">Status</strong>
                                    Offline
                            </div>
                            <div class="col-xs-6 col-md-6">
                                    <strong class="ls-list-label">Último acesso</strong>
                                    03/08/2014 - 13:11
                            </div>
                    </div>
            </div>
            <div class="ls-list" style="background-color: white;">
                    <header class="ls-list-header">
                            <div class="ls-group-actions" style="margin-bottom: 5px; margin-right: 5px;">
                                    <!-- Button trigger modal -->
                                     <a data-toggle="modal" href="#myModal1" class="btn btn-primary ico-cog">Editar</a>
                            </div>                      
                            <div class="ls-list-title ico-user">
                                    <a href="">Amanda</a>                              
                            </div>
                    </header>
                    <div class="ls-list-content ">
                            <div class="col-xs-6 col-md-6">
                                    <strong class="ls-list-label">Status</strong>
                                    Offline
                            </div>
                            <div class="col-xs-6 col-md-6">
                                    <strong class="ls-list-label">Último acesso</strong>
                                    03/08/2014 - 13:11
                            </div>
                    </div>
            </div>
            <div class="ls-list" style="background-color: white;">
                    <header class="ls-list-header">
                            <div class="ls-group-actions" style="margin-bottom: 5px; margin-right: 5px;">
                                    <!-- Button trigger modal -->
                                     <a data-toggle="modal" href="#myModal1" class="btn btn-primary ico-cog">Editar</a>
                            </div>                         
                            <div class="ls-list-title ico-user">
                                    <a href="">Yan</a>                              
                            </div>
                    </header>
                    <div class="ls-list-content ">
                            <div class="col-xs-6 col-md-6">
                                    <strong class="ls-list-label">Status</strong>
                                    Offline
                            </div>
                            <div class="col-xs-6 col-md-6">
                                    <strong class="ls-list-label">Último acesso</strong>
                                    03/08/2014 - 13:11
                            </div>
                    </div>
            </div>
            <div class="ls-list" style="background-color: white;">
                    <header class="ls-list-header">
                            <div class="ls-group-actions" style="margin-bottom: 5px; margin-right: 5px;">
                                    <!-- Button trigger modal -->
                                     <a data-toggle="modal" href="#myModal1" class="btn btn-primary ico-cog">Editar</a>
                            </div>                         
                            <div class="ls-list-title ico-user">
                                    <a href="">Usuário1234</a>                              
                            </div>
                    </header>
                    <div class="ls-list-content ">
                            <div class="col-xs-6 col-md-6">
                                    <strong class="ls-list-label">Status</strong>
                                    Offline
                            </div>
                            <div class="col-xs-6 col-md-6">
                                    <strong class="ls-list-label">Último acesso</strong>
                                    03/08/2014 - 13:11
                            </div>
                    </div>
            </div>
            

            <!-- Modal -->
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                    <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Título do Modal</h4>
                                    </div>
                                    <div class="modal-body">
                                                          <div class="modal-body">
                                                                <form role="form">
                                                                    <fieldset>
                                                                            <div class="form-group">
                                                                                    <label for="exampleInputEmail1">Nome</label>
                                                                                    <input class="ls-form-text" placeholder="Insira seu nome aqui">
                                                                                    <p class="help-block">O Nome será usado para efetuar o login.</p>
                                                                                    <label for="exampleInputEmail1">Email</label>
                                                                                    <input type="email" class="ls-form-text" id="exampleInputEmail1" placeholder="Insira seu nome aqui">
                                                                            </div>
<!--                                                                            <div class="form-group">
                                                                                    <label for="exampleSelect">Tipo de Acesso</label>
                                                                                    <select id="exampleSelect" class="form-control">
                                                                                            <option value="">Administrador</option>
                                                                                            <option value="">Pesquisador</option>
                                                                                    </select>
                                                                            </div>-->
                                                                            <div class="form-group">
                                                                                    <label for="exampleInputPassword1">Senha</label>
                                                                                    <input type="password" class="ls-form-text" id="exampleInputPassword1" placeholder="Senha">
                                                                                    <label for="exampleInputPassword1">Confirmar Senha</label>
                                                                                    <input type="password" class="ls-form-text'" id="exampleInputPassword1" placeholder="Senha">
                                                                            </div>
                                                                    </fieldset>          
                                                                </form>     
                                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon-icon glyphicon-remove">Desabilitar Usuário</span></button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-success">Salvar</button>
                                    </div>
                            </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        

        <!-- SCRIPT JQUERY -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        
            <!--         Locastyle -->
        <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
	<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        
    </body>
</html>