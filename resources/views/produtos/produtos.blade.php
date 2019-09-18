<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Project CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/texts.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>EstoqueApp {{$titulo}}</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/favicon_io/favicon-32x32.png" alt=""> <span class="teko-font font-weight-bold text-dark-blue">EstoqueApp</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item  mr-3">
                      <a class="nav-link font-weight-bold" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Produtos <span class="sr-only">(Página atual)</span></a>
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

                                                    <!-- Tabela de produtos -->

      <div class="container">
        <div class="row">
            <div class="offset-1"></div>
                <div class="col-md-10">
                    <div class="card mt-5">
                        <div class="card-header mb-0">
                            <span class="gray-text teko-font font-weight-bold nav-link-text d-block text-center">Produtos</span> 
                            
                        </div>
                        <div class="card-body pt-2">
                            <div class="container">
                                <div class="row justify-content-lg-between">

                                    <button class="btn dark-blue btn-sm font-weight-bold text-white"><i class="fa fa-plus"></i> Adicionar</button>
                                        
                                        <form action="" method="GET">
                                            <div class="class-search d-flex">           
                                                    <div class="input-group input-group-sm ml-2">
                                                        <input type="search" placeholder="Buscar" name="product" id="searchProduct" class="form-control form-control-sm" aria-label="Buscar produto" aria-describedby="my-search">
                                                        <div class="input-group-append input-group-append-sm">
                                                            <span class="input-group-text input-group-text-sm" id="my-search"><i class="fa fa-search d-block" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                </div>         
                            </div>
                            <hr>

                            <table class="table table-sm table-bordered">
                                <thead class="teko-font gray-text text-center">
                                    <th>Produto</th>
                                    <th>Descrição</th>
                                    <th>Preço R$</th>
                                    <th>Quantidade</th>
                                    <th></th>
                                </thead>
                                                                <!-- Listagem de produtos -->
                                <tbody>
                                    <tr>
                                        <td class="text-center font-weight-bold teko-font">Iphone X</td>
                                        <td class="product-description">Iphone X Lançamento, Câmera 8.7mp </td>
                                        <td class="text-right font-weight-bold ubuntu-font">2.799,00</td>
                                        <td class="text-center font-weight-bold ubuntu-font">36</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm"><i class="fa fa-list"></i></button>
                                            <button class="btn btn-sm"><i class="fa fa-wrench"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center font-weight-bold teko-font">Samsumg Galaxy note 7</td>
                                        <td class="product-description">Samsumg galaxy note imprevisible com capa de ouro 8GB de RAM </td>
                                        <td class="text-right font-weight-bold ubuntu-font">1.289,50</td>
                                        <td class="text-center font-weight-bold ubuntu-font">325</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm"><i class="fa fa-list"></i></button>
                                            <button class="btn btn-sm"><i class="fa fa-wrench"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center font-weight-bold teko-font">Fone JBL T110</td>
                                        <td class="product-description">Fone Jbl t110 slim network </td>
                                        <td class="text-right font-weight-bold ubuntu-font">89,90</td>
                                        <td class="text-center font-weight-bold ubuntu-font">12</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm"><i class="fa fa-list"></i></button>
                                            <button class="btn btn-sm"><i class="fa fa-wrench"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center font-weight-bold teko-font">Carregador Turbo Apple</td>
                                        <td class="product-description">Carregador Apple TBX 3.4AMP cabo dobrável </td>
                                        <td class="text-right font-weight-bold ubuntu-font">2.799,00</td>
                                        <td class="text-center font-weight-bold ubuntu-font">6</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm"><i class="fa fa-list"></i></button>
                                            <button class="btn btn-sm"><i class="fa fa-wrench"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                            <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center pagination-sm">
                                      <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                          <span aria-hidden="true">&laquo;</span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                      </li>
                                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                          <span aria-hidden="true">&raquo;</span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </li>
                                    </ul>
                                  </nav>
                        </div>
                    </div>
                </div>
            <div class="offset-1">
              @foreach ($produtos as $produto)
              <ul>
  
                <li>{{$produto['nome']}} Idade: {{$produto['Idade']}}</li><br>
              </ul>
                  
              @endforeach
            </div>
                

       
        </div>
      </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>