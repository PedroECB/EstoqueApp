<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon_io/favicon-32x32.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    
    <!-- Project CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/texts.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <title>Informações do produto</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/favicon_io/favicon-32x32.png')}}" alt=""> <span class="teko-font font-weight-bold text-dark-blue">EstoqueApp</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item  mr-3">
                      <a class="nav-link font-weight-bold" href="{{route('produtos.index')}}"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Produtos <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                      <a class="nav-link font-weight-bold" href="#"><i class="fa fa-truck" aria-hidden="true"></i> Fornecedores</a>
                    </li>
                    <li class="nav-item dropdown mr-3">
                      <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i> Minha conta
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item font-weight-bold disabled" href="#">João Ferreira</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-gear"></i> Alterar senha</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-user-plus"></i> Novo colaborador</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Sair</a>
                      </div>
                    </li>
                  </ul>
                </div>
        </div>
      </nav>

                                                    

      <div class="container">
        <div class="row">
            <div class="offset-2"></div>
                <div class="col-md-8">






                                        <!-- Card de cadastro de produtos -->



    <div class="card mt-5">
        <div class="card-header mb-0">
            <span class="gray-text teko-font font-weight-bold nav-link-text d-block text-center">Informações do Produto</span>    
        </div>
        <div class="card-body">
          <table class="table table-sm table-hover table-responsive">
            
            <tr><td class="font-weight-bold">Nome:</td> <td class="font-weight-bold text-info">Motorola One</td></tr>
            <tr><td class="font-weight-bold">Preço:</td> <td class="font-weight-bold text-success ">1.380,00</td></tr>
            <tr><td class="font-weight-bold">Descrição:</td> <td class="">Motorola capa preta Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet natus suscipit, adipisci iste ipsa</td></tr>
            <tr><td class="font-weight-bold">Fornecedor:</td> <td class="">Tel Imports</td></tr>
            <tr><td class="font-weight-bold">Última entrada:</td> <td class="">25/04/2019</td></tr>
            <tr><td class="font-weight-bold">Código de barras:</td> <td class="">487977888</td></tr>
            <tr class="table-info"><td class="font-weight-bold">Quantidade:</td> <td class="font-weight-bold">27</td></tr>

          </table>
          <div class="card-footer d-flex justify-content-between">
              <button class="btn btn-sm btn-info font-weight-bold"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
              <button class="btn btn-sm font-weight-bold"><i class="fa fa-list-alt" aria-hidden="true"></i> Relatório</button>
              <button class="btn btn-sm font-weight-bold" onclick="window.history.back();"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button>
          </div>
        </div>
    </div>









            <div class="offset-2"></div>
        </div>
      </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>