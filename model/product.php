<?php
class Product extends EntityBase{
    private $id;
    private $name;
    private $detail;
    private $amount;

    private $idproducts;

    public function __construct($adapter) {
        $table="products";
        parent::__construct($table, $adapter);
    }
     
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
     
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

    public function getDetail() {
        return $this->detail;
    }
    public function setDetail($detail) {
        $this->detail = $detail;
    }
    
    public function getAmount() {
        return $this->amount;
    }
    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function getIdproducts() {
        return $this->amount;
    }
    public function setIdproducts($idproducts) {
        $this->idproducts = $idproducts;
    }
 
    public function save(){

            $query="INSERT INTO products (name, detail)
                    VALUES( '".$this->name."',
                            '".$this->detail."');";
            $save=$this->db()->query($query);
            $response = array($save);
        return array($response);
    }
    // metodo para realizar la actualizaciond e nuestra entidad
    public function update(){

            $query = "UPDATE products SET
            name = '".$this->name."',
            detail = '".$this->detail."'
            WHERE (id = '".$this->id."');";
            $save=$this->db()->query($query);
            $response = array($save);
        return array($response);
    }
    
    public function count(){

        $query = "SELECT COUNT(id) as amount FROM `products`;";
        $request=$this->db()->query($query);
        while($row = $request->fetch_object()) {
            $resultSet[]=$row;
           }
        return $resultSet;
    }
    public function saveStock(){
        $query = "UPDATE products SET amount = '.$this->amount.' WHERE (id = '.$this->idproducts.');";
        $save=$this->db()->query($query);
        $response = array($save);
        return array($response);
    
    }
    
}
?>