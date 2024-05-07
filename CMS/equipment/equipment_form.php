<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Technomac | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.min.css">

  <style>
    /* Estilos para cada item da lista */
        .list-group-item {
            background-color: #f8f9fa; /* Cor de fundo */
            border: 1px solid #dee2e6; /* Borda */
            margin-bottom: 10px; /* Margem inferior entre os itens */
        }

        /* Estilos para os títulos dos itens */
        .list-group-item strong {
            color: #007bff; /* Cor do texto do título */
        }

        /* Estilos para os detalhes dos itens */
        .list-group-item span {
            color: #6c757d; /* Cor do texto dos detalhes */
        }

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../assets/img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Technomac</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="../principal.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt" style="color: #ff851b;"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../page_config.php" class="nav-link">
              <i class="nav-icon fas fa-th" style="color: #ff851b;"></i>
              <p>
                Page Configue
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../category/indexForm.php" class="nav-link">
              <i class="nav-icon fas fa-copy" style="color: #ff851b;"></i>
              <p>
                Categories
                <span class="badge badge-info right">6</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../equipment/equipament_search.php" class="nav-link" style="background-color: #ff851b; color:black;">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Equipments
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree" style="color: #ff851b;"></i>
              <p>
                Members
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree" style="color: #ff851b;"></i>
              <p>
                Brands
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope" style="color: #ff851b;"></i>
              <p>
                Mailbox & Social Media
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="mailbox/mailbox.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mailbox/compose.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mailbox/read-mail.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mailbox/whatsaap.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>WhatsApp</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-gear"></i>
              <p>
                Configure
                <i class="fas fa-angle-left right"></i>
              </p>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="principal.php">Home</a></li>
              <li class="breadcrumb-item active">Register Equipments</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="float-right">
                    <a href="equipament_search.php" type="button" class="btn btn-dark" style="color: black; background:#ff851b;">
                        <i class="fas fa-user-plus" style="color: black;"></i> List Equipments
                    </a>
                </div>
            </div>
        </div>
        <div class="card card-orange">
            <div class="card-header">
                <div class="card-title">New Equipment</div>
            </div>
            <div class="card-body">
                <form action="create_equipment.php" method="post" enctype="multipart/form-data" id="Form_equipment">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Nome:</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nome do equipamento" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="brand">Marca:</label>
                                <input type="text" name="brand" id="brand" class="form-control" placeholder="Marca do equipamento" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="model">Modelo:</label>
                                <input type="text" name="model" id="model" class="form-control" placeholder="Modelo do equipamento" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
        <label for="year">Ano:</label>
        <input type="text" name="year" id="year" class="form-control" placeholder="Ano do equipamento" required>
    </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
        <label for="price">Preço:</label>
        <input type="text" name="price" id="price" class="form-control" placeholder="Preço do equipamento" required>
    </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
        <label for="weight">Peso:</label>
        <input type="text" name="weight" id="weight" class="form-control" placeholder="Peso do equipamento">
    </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
        <label for="power">Potência:</label>
        <input type="text" name="power" id="power" class="form-control" placeholder="Potência do equipamento">
    </div>
                        </div>
                    </div>
    
    
    
    
    
    
    <div class="form-group">
        <label for="bucket_capacity">Capacidade do balde padrão:</label>
        <input type="text" name="bucket_capacity" id="bucket_capacity" class="form-control" placeholder="Capacidade do balde padrão">
    </div>
    <div class="form-group">
        <label for="bucket_width">Largura do balde padrão:</label>
        <input type="text" name="bucket_width" id="bucket_width" class="form-control" placeholder="Largura do balde padrão">
    </div>
    <!-- Adicione mais campos conforme necessário -->
    <div class="form-group">
        <label for="image">Imagem:</label>
        <input type="file" name="image" id="image" class="form-control-file" required>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://kapa28.ao">Kapa Empresa</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../assets/plugins/moment/moment.min.js"></script>
<script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function(){
    // Intercepta o envio do formulário
    $('#Form_equipment').submit(function(event){
        // Previne o envio padrão do formulário
        event.preventDefault();
        
        // Serializa os dados do formulário em formato de string
        var formData = new FormData($(this)[0]);
        
        // Envia os dados usando AJAX
        $.ajax({
            type: 'POST',  // Método da requisição (POST)
            url: 'create_equipment.php',  // URL do script PHP que irá processar os dados
            data: formData,  // Os dados do formulário
            contentType: false,  // Não definimos o tipo de conteúdo, pois estamos usando FormData
            processData: false,  // Não processamos os dados, pois estamos usando FormData
            success: function(response){
                // Manipula a resposta do servidor, se necessário
                console.log(response);
                alert('Formulário enviado com sucesso!');
            },
            error: function(){
                // Manipula erros de requisição, se necessário
                alert('Ocorreu um erro ao enviar o formulário.');
            }
        });
    });
});

</script>

</body>
</html>