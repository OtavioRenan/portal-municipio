<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
        <!-- JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>  
    
        <!--Stylo-->
        <link rel="stylesheet" href="{{asset('css/stylo.css')}}" type="text/css">
    </head>

    <body>

        <div class="container-fluid header-stylo">
            <div class="row">
                <div class="col-md-5"></div> <!-- col-sm-4 col-1 --> 
                <div class="col-md-4">
                    <img class="img-responsive" src="{{asset('img/Brasão_do_estado_da_Bahia.svg.png')}}" heigth="30%" width="50%">
                </div> <!-- col-sm-4 col-1 -->
            </div><!-- row -->
        </div><!-- Container -->
        <div class="container-fuild menu-stylo">
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger"> 

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav-scroller py-1 md-2" id="navbarSite">
                <div class="nav d-flex">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link h5" href="/">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle h5" data-toggle="dropdown" id="dropdownMenuLink" href="#">O Município</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"> História</a>
                            <a class="dropdown-item" href="#"> Turismo</a>
                            <a class="dropdown-item" href="#"> Distritos e Povoados</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle h5" data-toggle="dropdown" id="dropdownMenuLink" href="#">Gestão</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Prefeito</a>
                            <a class="dropdown-item" href="#">Vice-Prefeito</a>                        
                            <a class="dropdown-item" href="#">Controladoria</a>
                            <a class="dropdown-item" href="#">Procuradoria</a>                            
                            <a class="dropdown-item dropdown-toggle h5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secretarias</a>                        
                            <div class="dropright">                            
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Secretaria de Planejamento, Gestão e Finanças</a>
                                    <a class="dropdown-item" href="#">Secretaria de Agricultira de Meio Ambiente</a>
                                    <a class="dropdown-item" href="#">Secretaria de Cultura, Turismo e Lazer</a>
                                    <a class="dropdown-item" href="#">Secretaria de Assistência Social</a>
                                    <a class="dropdown-item" href="#">Secretaria de Ifraestrutura</a>
                                    <a class="dropdown-item" href="#">Secretaria de Educação</a>
                                    <a class="dropdown-item" href="#">Gabinete</a>
                                </div>
                            </div>                                            
                        </div>                            
                    </li>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle h5" data-toggle="dropdown" id="dropdownMenuLink" href="#">Conselho</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Conselho Municipal de Assistência Social</a>
                            <a class="dropdown-item" href="#">Conselho Municipal de Saúde</a>	                                       
                        </div>
                    </div>

                    <li class="nav-item">
                        <a class="nav-link h5" href="#">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h5" href="#">Eventos</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle h5" data-toggle="dropdown" id="dropdownSubMenuLinkServicos" href="#">Serviços</a>
                            <div class="dropdown-menu">                                
                                <a class="dropdown-item" href="#">Certidão Municipal</a>
                                <a class="dropdown-item" href="#">Emissão de Dam</a>
                                <a class="dropdown-item" href="#">Contracheque</a>
                                <a class="dropdown-item" href="#">Alvará</a>
                                <a class="dropdown-item" href="#">IPTU</a>    
                            </div>
                    </li>
                    <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle h5" data-toggle="dropdown" id="dropdownSubMenuLinkTransparencia" href="#">Transparência</a>
                            <div class="dropdown-menu">                                
                                <a class="dropdown-item" href="/diariooficial">Diário Oficial</a>
                                <a class="dropdown-item" href="/receita">Receita</a>
                                <a class="dropdown-item" href="/despesa">Despesa</a>
                                <a class="dropdown-item" href="/diaria">Diárias</a>
                                <a class="dropdown-item" href="/folhadepagamento">Folha de Pagamento</a>    
                            </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link h5" href="#">Contato</a>
                    </li>
                </ul>
            </div><!--nav d-flex justify-content-between"--> 
            </div><!-- collapse navbar-collapse nav-scroller py-1 md-2" id="navbarSite -->
            <form class="form-inline">
                <input class="form-control mr-4" type="search" placeholder="Buscar...">
                <button class="btn btn-default" type="submit"> OK </button>                    
            </form>
       </nav>
   </div> 


    @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>
