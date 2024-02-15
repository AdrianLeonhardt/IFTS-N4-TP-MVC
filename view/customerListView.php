<?php include './view/headerTemplate.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Clientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?controller=Users&action=index">Clientes</a></li>
              <li class="breadcrumb-item active">Lista</li>
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
          <h3 class="card-title">Lista de Clientes</h3>
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
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cuit</th>
                    <th>Accion</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($allcustomers as $customer) { //recorremos el array de objetos y obtenemos el valor de las propiedades ' ?>
                       <tr>
                       <td><?php echo $customer->id; ?></td>
                       <td><?php echo $customer->name; ?></td>
                       <td><?php echo $customer->lastname; ?></td>
                       <td><?php echo $customer->cuit; ?></td>
                       <td>
                        <a id="delete" href="#" data-id="<?php echo $customer->id; ?>" data-controller="Customers" class="btn btn-danger delete"><i class="fa-regular fa-trash-can"></i></a>
                        <a href="index.php?controller=Customers&action=customerUpdate&id=<?php echo $customer->id; ?>" data-id="<?php echo $customer->id; ?>" data-name="<?php echo $customer->name; ?>" data-lastname="<?php echo $customer->lastname; ?>" 
                        data-cuit="<?php echo $customer->cuit; ?>" data-controller="Customers"class="btn btn-warning update"><i class="fa-regular fa-pen-to-square"></i></a>
                      </d>
                           
                        <?php }?>
                    
                  </tbody>
                  <tfoot>
                  <tr>
                    <<th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cuit</th>
                    <th>Accion</th>
                  </tr>
                  </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include './view/footerTemplate.php';?>