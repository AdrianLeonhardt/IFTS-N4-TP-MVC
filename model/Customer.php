<?php
class Customer extends EntityBase{
    private $id;
    private $name;
    private $lastname;
    private $cuit;
     
    public function __construct($adapter) {
        $table="customers";
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

    public function getLastname() {
        return $this->lastname;
    }
    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getCuit() {
        return $this->cuit;
    }
    public function setCuit($cuit) {
        $this->cuit = $cuit;
    }
    
 
    public function save(){

            $query="INSERT INTO customers (name, lastname, cuit)
                    VALUES('".$this->name."',
                        '".$this->lastname."',
                        '".$this->cuit."');";
            $save=$this->db()->query($query);
            $response = array($save);
        return array($response);
    }
    // metodo para realizar la actualizaciond e nuestra entidad
    public function update(){

            $query = "UPDATE customers SET 
            name = '".$this->name."',
            lastname = '".$this->lastname."',
            cuit = '".$this->cuit."'
            WHERE (id = '".$this->id."');";
            $save=$this->db()->query($query);
            $response = array($save);
        return array($response);
    }
    public function count(){

        $query = "SELECT COUNT(id) as amount FROM `customers`;";
        $request=$this->db()->query($query);
        while($row = $request->fetch_object()) {
            $resultSet[]=$row;
           }
        return $resultSet;
    }
}
?>