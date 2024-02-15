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
          <h3 class="card-title">Lista de Proveedores</h3>
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
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>Codigo Postal</th>
                    <th>Pais</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Accion</th>

                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($allsuppliers as $supplier) { //recorremos el array de objetos y obtenemos el valor de las propiedades ' ?>
                       <tr>
                       <td><?php echo $supplier->id; ?></td>
                       <td><?php echo $supplier->name; ?></td>
                       <td><?php echo $supplier->direction; ?></td>
                       <td><?php echo $supplier->city; ?></td>
                       <td><?php echo $supplier->province; ?></td>
                       <td><?php echo $supplier->cp; ?></td>
                       <td><?php echo $supplier->country; ?></td>
                       <td><?php echo $supplier->telephone; ?></td>
                       <td><?php echo $supplier->email; ?></td>
                       <td>
                       <a id="delete" href="#" data-id="<?php echo $supplier->id; ?>" data-controller="Suppliers" class="btn btn-danger delete"><i class="fa-regular fa-trash-can"></i></a>
                       <a href="index.php?controller=Suppliers&action=supplierUpdate&id=<?php echo $supplier->id; ?>" 
                            data-suppliers_id="<?php echo $supplier->id; ?>" 
                            data-suppliers_name="<?php echo $supplier->name; ?>" 
                            data-suppliers_direction="<?php echo $supplier->direction; ?>" 
                            data-suppliers_city="<?php echo $supplier->city; ?>"
                            data-suppliers_province="<?php echo $supplier->province; ?>" 
                            data-suppliers_cp="<?php echo $supplier->cp; ?>" 
                            data-suppliers_country="<?php echo $supplier->country; ?>" 
                            data-suppliers_telephone="<?php echo $supplier->telephone; ?>" 
                            data-suppliers_email="<?php echo $supplier->email; ?>"  
                        data-controller="Suppliers"class="btn btn-warning update"><i class="fa-regular fa-pen-to-square"></i></a>
                      </td>
                           
                        <?php }?>
                    
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Id</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>Codigo Postal</th>
                    <th>Pais</th>
                    <th>Telefono</th>
                    <th>Email</th>
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