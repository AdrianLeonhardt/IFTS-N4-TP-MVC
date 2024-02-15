<?php include './view/headerTemplate.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Salida de producto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?controller=outputproducts&action=index">Salida de producto</a></li>
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
          <h3 class="card-title">Salida de producto</h3>

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
                    <th>Producto</th>
                    <th>Cliente</th>
                    <th>Fecha de Salida</th>
                    <th>Cantidad</th>
                    <th>Fecha de Registro</th>
                    <th>Usuario</th>
                    <th>Accion</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($alloutputproducts as $outputproduct) { //recorremos el array de objetos y obtenemos el valor de las propiedades '> ?>
                       <tr>
                       <td><?php echo $outputproduct->id; ?></td>
                       <td><?php echo $outputproduct->idproducts; ?></td>
                       <td><?php echo $outputproduct->idcustomers; ?></td>
                       <td><?php echo date($outputproduct->output_date); ?></td>
                       <td><?php echo $outputproduct->amount; ?></td>
                       <td><?php echo $outputproduct->createdDate; ?></td>
                       <td><?php echo $outputproduct->createUser; ?></td>

                       <td>
                        <a id="delete" href="#" data-id="<?php echo $outputproduct->id; ?>" data-controller="outputproducts" class="btn btn-danger delete"><i class="fa-regular fa-trash-can"></i></a>

                      </td>
                           
                        <?php }?>
                    
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Cliente</th>
                    <th>Fecha de Salida</th>
                    <th>Cantidad</th>
                    <th>Fecha de registro</th>
                    <th>Usuario</th>
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