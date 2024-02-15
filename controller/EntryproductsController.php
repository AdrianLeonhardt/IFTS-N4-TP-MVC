<?php
class EntryproductsController extends ControllerBase{
    public $connect;
    public $adapter;
    public function __construct() {
        parent::__construct();
        $this->connect=new Connection();
        $this->adapter=$this->connect->connect();
    }
     
    public function index(){
         
        //Creamos el objeto usuario
        $entryproduct=new Entryproduct($this->adapter);
         
        //Conseguimos todos los usuarios
        $allentryproducts=$entryproduct->entryproductGetAll();
        
        //Cargamos la vista index y le pasamos valores
        $this->view("entryproductList",array(
            "allentryproducts"=>$allentryproducts,
        ));
    }

    public function entryproductForm(){
        $supplier= new Supplier($this->adapter);
        $allsuppliers = $supplier->getAll();
        $product = new Product($this->adapter);
        $allproducts = $product->getAll();

        $this->view("entryproductForm",array(
            "allsuppliers"=>$allsuppliers,
            "allproducts"=>$allproducts
        ));
    }
     
    public function create(){
        if(isset($_POST["amount"])){
            //Creamos un usuario
            $entryproduct=new Entryproduct($this->adapter);
            $entryproduct->setIdproducts((int)$_POST["idproducts"]);
            $entryproduct->setSuppliers_id((int)$_POST["suppliers_id"]);
            $entryproduct->setEntry_date($_POST["entry_date"]);
            $entryproduct->setAmount($_POST["amount"]);
            $entryproduct->setCreateDate(date("Y-m-d",time()));
            $entryproduct->setCreateUser((int)$_POST["userCreate"]);

            $save=$entryproduct->save();
        }
        die(json_encode($save));
    }

 

    public function update(){
        if(isset($_POST["id"])){
            $id=(int)$_POST["id"];
            //Creamos un usuario
            $entryproduct=new Entryproduct($this->adapter);
            $entryproduct->setId($id);
            $entryproduct->setIdproducts((int)$_POST["idproducts"]);
            $entryproduct->setSuppliers_id($_POST["suppliers_id"]);
            $entryproduct->setEntry_date($_POST["entry_date"]);
            $entryproduct->setAmount($_POST["amount"]);
            $entryproduct->setCreateDate(date("Y-m-d",time()));
            $entryproduct->setCreateUser((int)$_POST["CreateUser"]);
            $save=$entryproduct->update();
            
        }
        die(json_encode($save));
    }

    public function delete(){
        if(isset($_POST["id"])){
            $id=(int)$_POST["id"];
             
            $outputproduct=new Outputproduct($this->adapter);
            $response=$outputproduct->deleteById($id);
        }
        die(json_encode($response));
    }

 
}
?>