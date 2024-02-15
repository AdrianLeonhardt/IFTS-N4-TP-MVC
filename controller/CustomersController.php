<?php
class CustomersController extends ControllerBase{
    public $connect;
    public $adapter;
    public function __construct() {
        parent::__construct();
        $this->connect=new Connection();
        $this->adapter=$this->connect->connect();
    }
     
    public function index(){
         
        //Creamos el objeto usuario
        $customer=new Customer($this->adapter);
         
        //Conseguimos todos los usuarios
        $allcustomers=$customer->getAll();
        
        //Cargamos la vista index y le pasamos valores
        $this->view("customerList",array(
            "allcustomers"=>$allcustomers
        ));
    }

    public function customerForm(){
        $this->view("customerForm",[]);
    }
     
    public function create(){
        if(isset($_POST["name"])){
            //Creamos un usuario
            $customer=new Customer($this->adapter);
            $customer->setName($_POST["name"]);
            $customer->setLastname($_POST["lastname"]);
            $customer->setCuit($_POST["cuit"]);
            $save=$customer->save();
            
        }
        die(json_encode($save));
    }

    public function customerUpdate(){
        $id=(int)$_GET["id"];
        //Creamos el objeto usuario
        $customer=new Customer($this->adapter);
         
        //Conseguimos todos los usuarios
        $customerById=$customer->getById($id);
        //Cargamos la vista index y le pasamos valores
        $this->view("customerUpdate",array(
            "customerById"=>$customerById,
        ));
    }

    public function update(){
        if(isset($_POST["id"])){
            $id=(int)$_POST["id"];
            //Creamos un usuario
            $customer=new Customer($this->adapter);
            $customer->setId($id);
            $customer->setName($_POST["name"]);
            $customer->setLastname($_POST["lastname"]);
            $customer->setCuit($_POST["cuit"]);
            $save=$customer->update();
            
        }
        die(json_encode($save));
    }

    public function delete(){
        if(isset($_POST["id"])){
            $id=(int)$_POST["id"];
             
            $customer=new Customer($this->adapter);
            $response=$customer->deleteById($id);
        }
        die(json_encode($response));
    }
}
?>