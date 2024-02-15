<?php
class ProductsController extends ControllerBase{
    public $connect;
    public $adapter;
    public function __construct() {
        parent::__construct();
        $this->connect=new Connection();
        $this->adapter=$this->connect->connect();
    }
     
    public function index(){
         
        //Creamos el objeto usuario
        $product=new Product($this->adapter);
         
        //Conseguimos todos los usuarios
        $allproducts=$product->getAll();
        
        //Cargamos la vista index y le pasamos valores
        $this->view("productList",array(
            "allproducts"=>$allproducts
        ));
    }

    public function productForm(){
        $this->view("productForm",[]);
    }
     
    public function create(){
        if(isset($_POST["name"])){
            //Creamos un usuario
            $product=new Product($this->adapter);
            $product->setName($_POST["name"]);
            $product->setDetail($_POST["detail"]);
            $save=$product->save();
            
        }
        die(json_encode($save));
    }

    public function productUpdate(){
        $id=(int)$_GET["id"];
        //Creamos el objeto usuario
        $product=new Product($this->adapter);
         
        //Conseguimos todos los usuarios
        $productById=$product->getById($id);
        //Cargamos la vista index y le pasamos valores
        $this->view("productUpdate",array(
            "productById"=>$productById,
        ));
    }

    public function update(){
        if(isset($_POST["id"])){
            $id=(int)$_POST["id"];
            //Creamos un usuario
            $product=new Product($this->adapter);
            $product->setId($id);
            $product->setName($_POST["name"]);
            $product->setDetail($_POST["detail"]);
            $save=$product->update();
            
        }
        die(json_encode($save));
    }

    public function delete(){
        if(isset($_POST["id"])){
            $id=(int)$_POST["id"];
             
            $product=new Product($this->adapter);
            $response=$product->deleteById($id);
        }
        die(json_encode($response));
    }
}
?>