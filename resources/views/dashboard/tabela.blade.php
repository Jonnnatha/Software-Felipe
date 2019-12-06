<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Painel de controle</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css" rel='stylesheet' type='text/css'>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- End layout styles -->
  <link rel="shortcut icon" href="{{asset('img/icons/favicon.ico')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href=""><img src="{{asset('img/logo-felipe.png')}}"alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href=""><img src="{{asset('img/minilogo.png')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                <img src="{{(asset('img/felipe.jpg'))}}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">OfertaJam</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Registro</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Sair </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Menssagens do desenvolvedor</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{asset('img/felipe.jpg')}}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Nova atualização</h6>
                    <p class="text-gray mb-0"> adcionar imagem </p>
                  </div>
                </a>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="index">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{asset('img/felipe.jpg')}}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">OfertaJam</span>
                  <span class="text-secondary text-small">Empresa</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home">
                <span class="menu-title">Painel de controle</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tabela">
                <span class="menu-title">Tabela</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>

          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-table-large"></i>
                </span> Tabela </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Visão global <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row" >
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" style="overflow:auto;">
                    <h4 class="card-title">Tabela das promoções</h4>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>

                            <th> Ação </th>
                          <th> Nome </th>
                          <th> Valor do produto </th>
                          <th> Valor da promoção </th>
                          <th> Imagem </th>
                            <th> Tipo de Oferta </th>
                              <th> Analogia </th>
                          <th> Descrição </th>
                          <th> Data de criação </th>
                        </tr>
                      </thead>
                      <tbody>

@forelse ( $oferta as $category )

  <tr>
                      <td>   {!! Form::open(['route' =>['categories.destroy',$category->id], 'method' => 'DELETE'])!!}
                            {!! Form::submit("Deletar",['class' => 'btn btn-danger']) !!}
                            <button type="button" class="btn btn-info" onclick="atua{{$category->id}}()"><i class="fas fa-edit"></i></button>
                              <button  type="button" class="btn btn-success" onclick="dica{{$category->id}}()"><i class="fas fa-eye"></i></button>
                            {!! Form::close() !!}
          </td>
    <td>
  {{ $category->nome }}
    </td>
    <td> {{ $category->valor_inicial }}</td>
    <td>
    {{ $category->valor_promocao }}
    </td>
    <td> {{ $category->img }} </td>
        <td> {{ $category->valor_final }} </td>
          <td> {{ $category->analogia }}</td>
    <td> {{ $category->notes }}</td>
    <td> {{ $category->created_at }}</td>
  </tr>
  <div class="modal fade bd-example-modal-lg"  id="dicamodal{{$category->id}}"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
          <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Imagem</h4>
                </div>
                <div class="modal-body">
              <img style=" display: block;
    margin-left: auto;
    margin-right: auto;" src='./uploads/<?php //echo $li->img; ?>' width="550" height="390"  />
          </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
              </div>
              </div>
              </div>
              </div>
              <div class="modal fade bd-example-modal-lg"  id="atuamodal{{$category->id}}"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                      <div class="modal-header">
                              <h4 class="modal-title" id="myModalLabel">Imagem</h4>
                            </div>
                            <div class="modal-body">
                            {!! Form::open(['route' =>['categories.update',$category->id], 'method' => 'PUT'])!!}
                                {!! csrf_field() !!}
                                <div class="form-group">
                                  <label for="exampleInputName1">Nome do produto</label>
                                  <input type="text" class="form-control" value="{{ $category->nome }}" name="nome" id="exampleInputName1" placeholder="Nome do produto">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword4">Valor do produto</label>
                                  <input type="number" class="form-control" value="{{ $category->valor_inicial }}" name="valor1" id="exampleInputPassword4" placeholder="Valor do produto">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword4">Valor da promoção</label>
                                  <input type="number" class="form-control" value="{{ $category->valor_promocao }}" name="valor2" id="exampleInputPassword4" placeholder="Valor da promoção">
                                </div>

                                <div class="form-group">
                                  <label for="exampleFormControlSelect1">Analogia</label>
                                  <select  name="analogia" class="form-control form-control-lg" id="exampleFormControlSelect1">
                                      <option value="{{ $category->analogia }}">{{ $category->analogia }}</option>
                                    <option value="Un.">Unidade</option>
                                    <option value="Kg">Quilograma(Kg)</option>

                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>Upload de imagem</label>
                                  <div class="input-group col-xs-12">
                                    <input type="file"  name="img" placeholder="Upload de imagem">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="exampleTextarea1">Descrição</label>
                                  <textarea class="form-control" value="" name="desc" id="exampleTextarea1" rows="4">{{ $category->notes }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-gradient-primary mr-2">Atualizar</button>
                            {!! Form::close() !!}
                      </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          </div>
                          </div>
                          </div>
                          </div>
 @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="" target="_blank">Supermercado</a>. Todos direitos reservados.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Feito a mão e com <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <script src="{{asset('js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('js/Chart.min.js')}}"></script>
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/hoverable-collapse.js')}}"></script>


    <script src="{{asset('js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/todolist.js')}}"></script>
@forelse ( $oferta as $lo )
{{  $som= $lo->id}}
  <script type="text/javascript">
/ function dica{{$som}}() {
  $('#dicamodal{{$som}}').modal();
  }
  </script>
  <script type="text/javascript">
  function atua{{$som}}() {
  $('#atuamodal{{$som}}').modal();
  }
  </script>
 @endforeach
    <!-- End custom js for this page -->
  </body>
</html>
