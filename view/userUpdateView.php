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
        <form method="post" id="updateUser">
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" class="form-control" name="name" value="<?php echo $userById->name; ?>" id="name" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
              <label for="lastname">Apellido</label>
              <input type="text" class="form-control" name="lastname" value="<?php echo $userById->lastname; ?>" id="lastname" placeholder="Ingrese su apellido">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $userById->email; ?>" id="email" placeholder="Ingrese su email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" value="<?php echo $userById->password; ?>" id="password" placeholder="Ingrese su password">
            </div>
        
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <input type="hidden" name="id" value="<?php echo $userById->id; ?>">
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