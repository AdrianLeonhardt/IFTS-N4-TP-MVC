<?php include './view/headerTemplate.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Producto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?controller=Productos&action=index">Producto</a></li>
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
          <h3 class="card-title">Crear Nuevo Producto</h3>

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
        <form method="post" id="productForm">
            <div class="form-group">
              <label for="name">Producto</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese el producto">
            </div>
            <div class="form-group">
              <label for="detail">Descripcion</label>
              <input type="text" class="form-control" name="detail" id="detail" placeholder="Ingrese la Descripcion">
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