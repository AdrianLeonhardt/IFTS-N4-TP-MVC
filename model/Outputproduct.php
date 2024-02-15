<?php
class Outputproduct extends EntityBase{
    private $id;
    private $idproducts;
    private $idcustomers;
    private $output_date;
    private $amount;
    private $createdDate;
    private $createUser;

     
    public function __construct($adapter) {
        $table="outputproducts";
        parent::__construct($table, $adapter);
    }
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getIdproducts() {
        return $this->idproducts;
    }
    public function setIdproducts($idproducts) {
        $this->idproducts = $idproducts;
    }
    public function getIdcustomers() {
        return $this->idcustomers;
    }
    public function setIdcustomers($idcustomers) {
        $this->idcustomers = $idcustomers;
    }
    public function getOutput_date() {
        return $this->output_date;
    }
    public function setOutput_date($output_date) {
        $this->output_date = $output_date;
    }   

    public function getAmount() {
        return $this->amount;
    }
    public function setAmount($amount) {
        $this->amount = $amount;
    }    
    public function getCreatedDate() {
        return $this->createdDate;
    }
    public function setCreatedDate($createdDate) {
        $this->createdDate = $createdDate;
    }
    public function getCreateUser() {
        return $this->createUser;
    }
    public function setCreateUser($createUser) {
        $this->createUser = $createUser;
    }
    
 
    public function outputproductGetAll() {
        $query="SELECT O.id, P.name AS idproducts, C.name AS idcustomers, output_date , o.amount, createdDate, U.name AS createUser FROM outputproducts O INNER JOIN customers C ON O.idcustomers = C.id INNER JOIN users U ON O.createUser = U.id INNER JOIN products P ON O.idproducts=P.id;";
        $request=$this->db()->query($query);
        while($row = $request->fetch_object()) {
        $resultSet[]=$row;
       }
        return $resultSet;
    }



    //suma select SUM(amount) as contidad from entry;
    // resta SELECT SUM(amount)-5 as cantidad from entry;

    public function save(){
        
        $query="INSERT INTO outputproducts (idproducts, idcustomers, output_date, amount, createdDate, createUser)
                VALUES('".$this->idproducts."',
                       '".$this->idcustomers."',
                       '".$this->output_date."',
                       '".$this->amount."',
                       '".$this->createdDate."',
                       '".$this->createUser."');";
        $save=$this->db()->query($query);
        $response = array($save);
       
        $query="UPDATE products SET amount = amount - '".$this->amount."' where id = '" .$this->idproducts."';";
        $save=$this->db()->query($query);

        return array($response);

    }
    // La cantidad de producto de salida
    public function stock(){
        $query1="SELECT `idproducts`, SUM(`amount`) AS `amount` FROM outputproducts GROUP BY `idproducts`;";
        $request=$this->db()->query($query1);
        while($row = $request->fetch_object()) {
            $resultSet[]=$row;
            }
        return $resultSet;
    }
        
          
}

?>