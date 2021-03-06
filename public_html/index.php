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

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">Navegador muito<strong>antigo</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a>.</p>
        <![endif]-->
        <div class="container">
            <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content" style="margin-top: 120px;">
                  <div class="modal-header">                    
                      <h1 class="text-center"><img src="img/key.png" style="opacity: 0.5;width: 55px;margin-right: 30px;">Acesso Restrito!</h1>
                  </div>
                  <div>
                      <form class="form col-md-12 center-block" style="margin-top: 30px;">
                        <div class="form-group">
                          <input type="text" class="form-control input-lg" placeholder="Usuário">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control input-lg" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <a class="btn btn-primary btn-lg btn-block" href="inicio.php">Acessar</a>                 
                        </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <div class="col-md-12">
                        <span class="pull-right" data-toggle="modal" data-target=".bs-example-modal-sm"><a href="#">Esqueceu sua senha?</a></span>
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content" style="background-color: rgb(241, 241, 241);">                                
                                <form role="form">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                                        <h4 class="modal-title" style="float: left; line-height: 0;">Esqueceu sua senha?</h4>
                                      </div>
                                      <div class="modal-body">                                        
                                          <div class="form-group">
                                            <label for="exampleInputEmail1" style="margin: 12px; float: left;">Insira seu endereço de Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" style="margin-left: 5px; width: 290px;">
                                          </div> 
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-success">Enviar</button>
                                      </div>
                                                                         
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>	
                  </div>
              </div>
              </div>
            </div>
        </div>
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
