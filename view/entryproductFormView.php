<?php include './view/headerTemplate.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Entrada de producto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?controller=Entryproducts&action=index">Entrada de productos</a></li>
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
          <h3 class="card-title">Crear Nueva Entrada</h3>

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
        <form method="post" id="entryproductForm">

          <div class="row">
            <div class="form-group col-8">
              <label for="suppliers_id">Proveedor</label>
              <select class="form-control select2" name="suppliers_id" id="suppliers_id" style="width: 100%;">
                    <option value="" selected="selected" disabled="disabled">Seleccione el proveedor</option>
                    <?php foreach($allsuppliers as $supplier) { ?>
                    <option value="<?php echo $supplier->id; ?>"><?php echo $supplier->name; ?></option>
                    <?php }?>
                </select>
            </div>

            <div class="form-group col-8">
              <label for="idproducts">Producto</label>
              <select class="form-control select2" name="idproducts" id="idproducts" style="width: 100%;">
                    <option value="" selected="selected" disabled="disabled">Seleccione el producto</option>
                    <?php foreach($allproducts as $product) {  ?>
                    <option value="<?php echo $product->id; ?>"><?php echo $product->name; ?><?php echo " ","( cantida: ",$product->amount," ) ",$product->detail; ?></option>
                    <?php }?>
                </select>
            </div>              
            <div class="form-group col-8">
                <label for="amount">Numero</label>
                <input type="number" class="form-control" name="amount" id="amount" placeholder="Ingrese la cantidad">
            </div>
            <div class="form-group col-8">
                <label for="entry_date">Fecha de entrada</label>
                <input type="date" class="form-control" name="entry_date" id="entry_date" placeholder="Ingrese la fecha del vencimiento">
            </div>
          </div>

      
          
        
        <!-- /.card-body -->
        <div class="card-footer">
          <input type="hidden" name="userCreate" value="<?php echo $_SESSION["id"]?>">
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