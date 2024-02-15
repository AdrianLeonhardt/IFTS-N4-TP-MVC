<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Logistcs System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- uPlot -->
  <link rel="stylesheet" href="plugins/uplot/uPlot.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php?controller=Index&action=index" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Logistcs System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php?controller=Index&action=index" class="d-block"><?php echo $_SESSION["name"]." ". $_SESSION["lastname"]?></a>
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

          <!-- USUARIOS -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-user-group"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=Users&action=index" class="nav-link">
                  <i class="nav-icon far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?controller=Users&action=userForm" class="nav-link">
                  <i class="nav-icon far fa-circle nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- END USUARIOS -->
          <!-- Clientes -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-user"></i>
              <p>
              Clientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=Customers&action=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?controller=Customers&action=customerForm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- END Clientes -->
          <!-- Proveedor -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-users"></i>
              <p>
              Proveedores
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=Suppliers&action=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?controller=Suppliers&action=supplierForm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- END Proveedor -->
          <!-- Producto -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-store"></i>
              <p>
              Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=Products&action=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?controller=Products&action=productForm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- END Productos -->
          <!-- Entrada -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-circle-arrow-up"></i>
              <p>
                Entrada de Cantidades
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=Entryproducts&action=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?controller=Entryproducts&action=entryproductForm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- END Entrada -->
          <!-- Salida -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-circle-arrow-down"></i>
              <p>
                 Salida de Cantidades
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=outputproducts&action=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?controller=outputproducts&action=outputproductForm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- END Salida -->

          <li class="nav-item">
                <a href="index.php?exit=true" class="nav-link">
                  <i class="far fa-solid fa-circle-xmark text-danger"></i>
                  <p>Cerrar Sesion</p>
                </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>