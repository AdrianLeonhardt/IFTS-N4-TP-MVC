<?php
class IndexController extends ControllerBase{
    public $connect;
    public $adapter;
    public function __construct() {
        parent::__construct();
        $this->connect=new Connection();
        $this->adapter=$this->connect->connect();
    }
     
    public function index(){
         
        //Creamos el objeto index
        $product=new Product($this->adapter);
        $countproduct=new Product($this->adapter);
        $countuser=new User($this->adapter);
        $countsupplier=new Supplier($this->adapter);
        $countcustomer=new Customer($this->adapter);
        $resta=new Outputproduct($this->adapter);
        $suma=new Entryproduct($this->adapter);

        //Conseguimos todos los usuarios
        $allproducts=$product->getAll();
        $countproducts=$countproduct->count();
        $countusers=$countuser->count();
        $countsuppliers=$countsupplier->count();
        $countcustomers=$countcustomer->count();
        $restaprod=$resta->stock();
        $sumaprod=$suma->stock();

        //Cargamos la vista index y le pasamos valores
        $this->view("index",array(
            "countproducts"=>$countproducts,
            "allproducts"=>$allproducts,
            "countusers"=>$countusers,
            "countsuppliers"=>$countsuppliers,
            "countcustomers"=>$countcustomers,
            "restaprod"=>$restaprod,
            "sumaprod"=>$sumaprod
        ));
       

            

    }
 
}
?>