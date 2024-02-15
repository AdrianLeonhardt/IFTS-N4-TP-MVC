<?php include './view/headerTemplate.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Proveedores</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?controller=Suppliers&action=index">Proveedores</a></li>
              <li class="breadcrumb-item active">Crear</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Crear Nuevo Proveedor</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <!-- <form action="
          // agregar php inicio de script echo $helper->url("Users","create"); ?>" method="post" id="userForm"> -->
        <form method="post" id="supplierForm">
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
              <label for="direction">Direccion</label>
              <input type="text" class="form-control" name="direction" id="direction" placeholder="Ingrese direccion">
            </div>
            <div class="form-group">
              <label for="city">Ciudad</label>
              <input type="text" class="form-control" name="city" id="city" placeholder="Ingrese ciudad">
            </div>
            <div class="form-group">
              <label for="province">Provincia</label>
              <input type="text" class="form-control" name="province" id="province" placeholder="Ingrese provincia">
            </div>
            <div class="form-group">
              <label for="cp">Codigo Postal</label>
              <input type="number" class="form-control" name="cp" id="cp" placeholder="Ingrese el codigo postal">
            </div>
            <div class="form-group">
              <label for="country">Pais</label>
              <input type="text" class="form-control" name="country" id="country" placeholder="Ingrese el pais">
            </div>
            <div class="form-group">
              <label for="telephone">Telefono</label>
              <input type="number" class="form-control" name="telephone" id="telephone" placeholder="Ingrese el telefono">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Ingrese el email">
            </div>
      
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" value="enviar" class="btn btn-primary">Enviar  <i class="fa-regular fa-paper-plane"></i></button>
        </div>
        <!-- /.card-footer-->
        </form>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include './view/footerTemplate.php';?>