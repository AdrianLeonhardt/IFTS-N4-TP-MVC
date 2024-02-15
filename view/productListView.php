<?php include './view/headerTemplate.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Productos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?controller=Products&action=index">Productos</a></li>
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
          <h3 class="card-title">Lista de Productos</h3>
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
                    <th>Descripcion</th>
                    <th>Cantidad disponible</th>
                    <th>Accion</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($allproducts as $product) { //recorremos el array de objetos y obtenemos el valor de las propiedades ' ?>
                       <tr>
                       <td><?php echo $product->id; ?></td>
                       <td><?php echo $product->name; ?></td>
                       <td><?php echo $product->detail; ?></td>
                       <td><?php echo $product->amount; ?></td>
                       <td>
                        <a id="delete" href="#" data-id="<?php echo $product->id; ?>" data-controller="products" class="btn btn-danger delete"><i class="fa-regular fa-trash-can"></i></a>
                        <a href="index.php?controller=products&action=productUpdate&id=<?php echo $product->id; ?>" data-id="<?php echo $product->id; ?>" data-name="<?php echo $product->name; ?>" data-detail="<?php echo $product->detail; ?>
                        " data-controller="products"class="btn btn-warning update"><i class="fa-regular fa-pen-to-square"></i></a>
                      </td>
                  <?php }?>
                    
                  </tbody>
                  <tfoot>
                  <tr>
                    <<th>Id</th>
                    <th>Producto</th>
                    <th>Descripcion</th>
                    <th>Cantidad disponible</th>
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