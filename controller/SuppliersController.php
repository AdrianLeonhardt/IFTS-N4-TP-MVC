<?php
class SuppliersController extends ControllerBase{
    public $connect;
    public $adapter;
    public function __construct() {
        parent::__construct();
        $this->connect=new Connection();
        $this->adapter=$this->connect->connect();
    }
     
    public function index(){
         
        //Creamos el objeto usuario
        $supplier=new Supplier($this->adapter);
         
        //Conseguimos todos los usuarios
        $allsuppliers=$supplier->getAll();
        
        //Cargamos la vista index y le pasamos valores
        $this->view("supplierList",array(
            "allsuppliers"=>$allsuppliers
        ));
    }

    public function supplierForm(){
        $this->view("supplierForm",[]);
    }
     
    public function create(){
        if(isset($_POST["name"])){
            //Creamos un usuario
            $supplier=new Supplier($this->adapter);
            $supplier->setName($_POST["name"]);
            $supplier->setDirection($_POST["direction"]);
            $supplier->setCity($_POST["city"]);
            $supplier->setProvince($_POST["province"]);
            $supplier->setCp($_POST["cp"]);
            $supplier->setCountry($_POST["country"]);
            $supplier->setTelephone($_POST["telephone"]);
            $supplier->setEmail($_POST["email"]);
            $save=$supplier->save();
            
        }
        die(json_encode($save));
    }

    public function supplierUpdate(){
        $id=(int)$_GET["id"];
        //Creamos el objeto usuario
        $supplier=new Supplier($this->adapter);
         
        //Conseguimos todos los usuarios
        $supplierById=$supplier->getById($id);
        //Cargamos la vista index y le pasamos valores
        $this->view("supplierUpdate",array(
            "supplierById"=>$supplierById,
        ));
    }

    public function update(){
        if(isset($_POST["id"])){
            $id=(int)$_POST["id"];
            //Creamos un usuario
            $supplier=new Supplier($this->adapter);
            $supplier->setId($id);
            $supplier->setName($_POST["name"]);
            $supplier->setDirection($_POST["direction"]);
            $supplier->setCity($_POST["city"]);
            $supplier->setProvince($_POST["province"]);
            $supplier->setCp($_POST["cp"]);
            $supplier->setCountry($_POST["country"]);
            $supplier->setTelephone($_POST["telephone"]);
            $supplier->setEmail($_POST["email"]);
            $save=$supplier->update();
            
        }
        die(json_encode($save));
    }

    public function delete(){
        if(isset($_POST["id"])){
            $id=(int)$_POST["id"];
             
            $supplier=new Supplier($this->adapter);
            $response=$supplier->deleteById($id);
        }
        die(json_encode($response));
    }
}
?>