<?php
class OutputproductsController extends ControllerBase{
    public $connect;
    public $adapter;
    public function __construct() {
        parent::__construct();
        $this->connect=new Connection();
        $this->adapter=$this->connect->connect();
    }
     
    public function index(){
         
        //Creamos el objeto usuario
        $outputproduct=new Outputproduct($this->adapter);
         
        //Conseguimos todos los usuarios
        $alloutputproducts=$outputproduct->outputproductGetAll();
        
        //Cargamos la vista index y le pasamos valores
        $this->view("outputproductList",array(
            "alloutputproducts"=>$alloutputproducts,
        ));
    }

    public function outputproductForm(){
        $customer= new Customer($this->adapter);
        $allcustomers = $customer->getAll();
        $product = new Product($this->adapter);
        $allproducts = $product->getAll();

        $this->view("outputproductForm",array(
            "allcustomers"=>$allcustomers,"allproducts"=>$allproducts
        ));
    }
     
    public function create(){
        if(isset($_POST["amount"])){
            //Creamos un usuario
            $outputproduct=new Outputproduct($this->adapter);
            $outputproduct->setIdproducts((int)$_POST["idproducts"]);
            $outputproduct->setIdcustomers((int)$_POST["idcustomers"]);
            $outputproduct->setOutput_date($_POST["output_date"]);
            $outputproduct->setAmount($_POST["amount"]);
            $outputproduct->setCreatedDate(date("Y-m-d",time()));
            $outputproduct->setCreateUser((int)$_POST["userCreate"]);

            $save=$outputproduct->save();
        }
        die(json_encode($save));
    }

 

    public function update(){
        if(isset($_POST["id"])){
            $id=(int)$_POST["id"];
            //Creamos un usuario
            $outputproduct=new Outputproduct($this->adapter);
            $outputproduct->setId($id);
            $outputproduct->setIdproducts((int)$_POST["idproducts"]);
            $outputproduct->setCustomers_id($_POST["customers_id"]);
            $outputproduct->setOutput_date($_POST["output_date"]);
            $outputproduct->setAmount($_POST["amount"]);
            $outputproduct->setCreatedDate(date("Y-m-d",time()));
            $outputproduct->setCreateUser((int)$_POST["userCreate"]);
            $save=$user->update();
            
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