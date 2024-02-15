<?php include './view/headerTemplate.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?controller=Users&action=index">Usuarios</a></li>
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
          <h3 class="card-title">Crear Nuevo Usuario</h3>

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
        <form method="post" id="updateCustomer">
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" class="form-control" name="name" value="<?php echo $customerById->name; ?>" id="name" placeholder="Ingrese el nombre">
            </div>
            <div class="form-group">
              <label for="name">Apellido</label>
              <input type="text" class="form-control" name="lastname" value="<?php echo $customerById->lastname; ?>" id="lastname" placeholder="Ingrese el apellido">
            </div>

            <div class="form-group">
              <label for="cuit">Cuit</label>
              <input type="number" class="form-control" name="cuit" value="<?php echo $customerById->cuit; ?>" id="cuit" placeholder="Ingrese el cuit">
            </div>
        
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <input type="hidden" name="id" value="<?php echo $customerById->id; ?>">
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