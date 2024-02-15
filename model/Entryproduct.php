<?php
class Entryproduct extends EntityBase{
    private $id;
    private $idproducts;
    private $suppliers_id;
    private $entry_date;
    private $amount;
    private $createDate;
    private $createUser;


     
    public function __construct($adapter) {
        $table="entryproducts";
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
    public function getSuppliers_id() {
        return $this->suppliers_id;
    }
    public function setSuppliers_id($suppliers_id) {
        $this->suppliers_id = $suppliers_id;
    }
    public function getEntry_date() {
        return $this->entry_date;
    }
    public function setEntry_date($entry_date) {
        $this->entry_date = $entry_date;
    }   

    public function getAmount() {
        return $this->amount;
    }
    public function setAmount($amount) {
        $this->amount = $amount;
    }    
    public function getCreateDate() {
        return $this->createDate;
    }
    public function setCreateDate($createDate) {
        $this->createDate = $createDate;
    }
    public function getCreateUser() {
        return $this->createUser;
    }
    public function setCreateUser($createUser) {
        $this->createUser = $createUser;
    }
    
 
    public function entryproductGetAll() {
        $query="SELECT E.id, P.name AS idproducts, S.name AS suppliers_id, entry_date , E.amount, createDate, U.name AS createUser FROM entryproducts E INNER JOIN suppliers S ON E.suppliers_id = S.id INNER JOIN users U ON E.createUser = U.id INNER JOIN products P ON E.idproducts=P.id;";
        $request=$this->db()->query($query);
                while($row = $request->fetch_object()) {
                $resultSet[]=$row;
       }
        return $resultSet;
    }





    public function save(){
        
        $query="INSERT INTO entryproducts (idproducts, suppliers_id, entry_date, amount, createDate, createUser)
                VALUES('".$this->idproducts."',
                       '".$this->suppliers_id."',
                       '".$this->entry_date."',
                       '".$this->amount."',
                       '".$this->createDate."',
                       '".$this->createUser."');";
        $save=$this->db()->query($query);
        $response = array($save);

        $query="UPDATE products SET amount = amount + '".$this->amount."' where id = '" .$this->idproducts."';";
        $save=$this->db()->query($query);

        return array($response);

    }

    public function update(){

        $query = "UPDATE entryproducts SET 
        idproducts = '".$this->idproducts."',
        suppliers_id = '".$this->suppliers_id."',
        entry_date = '".$this->entry_date."',
        amount = '".$this->amount."',
        createDate = '".$this->createDate."',
        createUser = '".$this->createUser."'

        WHERE (id = '".$this->id."');";
        $save=$this->db()->query($query);
        $response = array($save);


    return array($response);
    }
 
         
    // La cantidad de producto de entrada
    public function stock(){
        $query1="SELECT `idproducts`, SUM(`amount`) AS `amount` FROM entryproducts GROUP BY `idproducts`;";
        $request=$this->db()->query($query1);
        while($row = $request->fetch_object()) {
            $resultSet[]=$row;
            }
        return $resultSet;
    }
}
?>