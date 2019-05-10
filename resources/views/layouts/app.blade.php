<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <!-- Título -->
  <title> @yield('title') </title>

  <!-- jQuery -->
  <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>


  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Sweet Alert 2 -->
  <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">

  <!-- Styles -->

  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="{{ asset('theme/plugins/font-awesome/css/font-awesome.min.css') }}"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('theme/css/adminlte.min.css') }}">

  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('theme/plugins/iCheck/flat/blue.css') }}">

  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('theme/plugins/morris/morris.css') }}">

  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('theme/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">

  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('theme/plugins/datepicker/datepicker3.css') }}">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('theme/plugins/daterangepicker/daterangepicker-bs3.css') }}">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

  <!-- Google Font: Source Sans Pro -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700') }}" rel="stylesheet">



  <!-- Scripts -->
<!-- <script src="{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script> -->

  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}"/>
  <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>

  <!-- jQuery Mask-->
  <script src="{{ asset('js/jquery.mask.js') }}"></script>

  <!-- jQuery Mask Money-->
  <script src="{{ asset('js/jquery.maskMoney.js') }}"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('https://code.jquery.com/ui/1.12.1/jquery-ui.min.js') }}"></script>

  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <!-- Bootstrap 4 -->
  <script src="{{ asset('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Morris.js charts -->
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}"></script>

  <script src="{{ asset('theme/plugins/morris/morris.min.js') }}"></script>

  <!-- Sparkline -->
  <script src="{{ asset('theme/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

  <!-- jvectormap -->
  <script src="{{ asset('theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ asset('theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

{{--  <!-- jQuery Knob Chart -->--}}
{{--  <script src="{{ asset('plugins/knob/jquery.knob.js') }}"></script>--}}

  <!-- daterangepicker -->
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') }}"></script>
  <script src="{{ asset('theme/plugins/daterangepicker/daterangepicker.js') }}"></script>

  <!-- datepicker -->
  <script src="{{ asset('theme/plugins/datepicker/bootstrap-datepicker.js') }}"></script>

  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{ asset('theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

  <!-- Slimscroll -->
  <script src="{{ asset('theme/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>

  <!-- FastClick -->
  <script src="{{ asset('theme/plugins/fastclick/fastclick.js') }}"></script>

  <!-- AdminLTE App -->
  <script src="{{ asset('theme/js/adminlte.js')}}"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('theme/js/pages/dashboard.js') }}"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('theme/js/demo.js') }}"></script>

</head>




<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-danger navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>


    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      @if(Auth::guest())
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-sign-in-alt"></i> Login </a>
        </li>
      @elseif(Auth::check())
        <li class="nav-item active">
          <a class="nav-link" href="#sair" data-toggle="modal"> <i class="fas fa-sign-out-alt"></i> {{Auth::user()->nome}} </a>
        </li>
      @endif
    </ul>
  </nav>
  <!-- /.navbar -->




  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link bg-danger">
      <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-light"> JSystem </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-header"> Menu </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-cog"></i>
              <p>
                Parâmetros do sistema
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('comandas.index') }}" class="nav-link">
                  <i class="fas fa-receipt"></i>
                  <p> Comanda </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('grupos.index') }}" class="nav-link">
                  <i class="fas fa-box"></i>
                  <p> Grupos </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('categorias.index') }}" class="nav-link">
                  <i class="fas fa-boxes"></i>
                  <p> Categorias </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('produtos.index') }}" class="nav-link">
                  <i class="fas fa-tag"></i>
                  <p> Produtos </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header"> Caixa </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-dollar-sign"></i>
              <p>
                Pagamentos
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fas fa-scroll"></i>
                  <p> Comanda </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="fas fa-chair"></i>
                  <p> Mesa </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-beer"></i>
                  <p> Balcão </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-cash-register"></i>
              <p>
                Sangria
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fas fa-key"></i>
                  <p> Abrir Caixa </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="fas fa-angle-double-up"></i>
                  <p> Suplemento </p>
                </a>
              </li>

            </ul>
          </li>

          @if(Auth::user()->perfil == 'administrador')
            <li class="nav-header"> Relatórios </li>

            <li class="nav-item">
              <a href="{{ route('relatorios.funcionarios') }}" class="nav-link">
                <i class="fas fa-users"></i>
                <p> Funcionários </p>
              </a>
            </li>
          @endif

          <li class="nav-header"> Conta </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-user"></i>
              <p> Perfil </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#sair" data-toggle="modal" class="nav-link">
              <i class="fas fa-power-off"></i>
              <p> Sair </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Header (Page header) -->

    <!--  SUBSTITUIDO POR BREADCRUMB -->
    <!-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> @yield('header') </h1>
          </div>
        </div>
      </div>
    </div> -->


    @include('alerts.success_toast')
    @include('alerts.success')
    @include('alerts.error')

    <!-- Main content -->
    <section class="content">

      <h5> {{ Breadcrumbs::render() }} </h5>

      @yield('content')

    </section>
        </div>
      </div>


    </section>
  </div>


  <footer class="main-footer">

    <div class="text-center">
      <strong>Copyright &copy; 2018-2019 Jegue's Bar System  .</strong>
      Todos os direitos reservados.
    </div>

    <div class="float-right d-none d-sm-inline-block">
      <b> Version </b> 2.0.0
    </div>

  </footer>




  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Modal Sair -->
<div class="modal fade" id="sair" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Deseja realmente sair? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('logout') }}" method="post">
        {{ csrf_field() }}
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"> Fechar </button>
        <button type="submit" class="btn btn-primary"> Sair </button>
      </div>
    </form>
    </div>
  </div>
</div>

</body>
</html>
