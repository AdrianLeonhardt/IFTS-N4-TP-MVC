<?php include './view/headerTemplate.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Panel de Vista Rápida</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Panel de Vista Rápida</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                  <?php foreach($countproducts as $count) { //recorremos el array de objetos y obtenemos el valor de las propiedades ' ?>
                    <h3><?php echo $count->amount; ?></h3>
                  <?php }?>

                <p>Productos Registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="index.php?controller=Products&action=index " class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php foreach($countcustomers as $count) { //recorremos el array de objetos y obtenemos el valor de las propiedades ' ?>
                    <h3><?php echo $count->amount; ?></h3>
                  <?php }?>
                <p>Clientes Registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="index.php?controller=Customers&action=index" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                <?php foreach($countsuppliers as $count) { //recorremos el array de objetos y obtenemos el valor de las propiedades ' ?>
                      <h3><?php echo $count->amount; ?></h3>
                    <?php }?>

                  <p>Proveedores Registrados</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="index.php?controller=Suppliers&action=index" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                  <?php foreach($countusers as $count) { //recorremos el array de objetos y obtenemos el valor de las propiedades ' ?>
                    <h3><?php echo $count->amount; ?></h3>
                  <?php }?>
                    <p>Usuario Registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="index.php?controller=Users&action=index" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <!-- /.card-basasaody -->

           <!-- /.card -->
          <div class="col-lg-12">
              <div class="card-header border-0">
                <h3 class="card-title" style="text-align: center;">Stock de Productos</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Producto</th>
                    <th>Descripcion</th>
                    <th>Cantidad Disponible</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($allproducts as $product) { //recorremos el array de objetos y obtenemos el valor de las propiedades ' ?>
                       <tr>
                       <td>
                       <img src="./dist/img/product.jpg" alt="Product 1" class="img-circle img-size-32 mr-2"><?php echo $product->name; ?></td>
                       <td><?php echo $product->detail; ?></td>
                       <td><?php echo $product->amount; ?></td>
                  <?php }?>
                  </tbody>
                </table>
              </div>
          </div>
            

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content -->

  <!-- /.content-wrapper -->
<?php include './view/footerTemplate.php';?>