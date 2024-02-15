<?php
class User extends EntityBase{
    private $id;
    private $name;
    private $lastname;
    private $email;
    private $password;
     
    public function __construct($adapter) {
        $table="users";
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
 
    public function getEmail() {
        return $this->email;
    }
 
    public function setEmail($email) {
        $this->email = $email;
    }
 
    public function getPassword() {
        return $this->password;
    }
 
    public function setPassword($password) {
        $this->password = $password;
    }
 
    public function save(){
            // El cost es el parametro que define cuantas iteraciones va a tener nuestro hash
            $options = array(
                'cost' => 12
            );
            //Encriptamos el password 
            $pass_hashed = password_hash($this->password, PASSWORD_DEFAULT, $options);
            $query="INSERT INTO users (name, lastname, email, password)
                    VALUES('".$this->name."',
                        '".$this->lastname."',
                        '".$this->email."',
                        '".$pass_hashed."');";
            $save=$this->db()->query($query);
            $response = array($save);
        return array($response);
    }
    // metodo para realizar la actualizaciond e nuestra entidad
    public function update(){
            $options = array(
                'cost' => 12
            );
            $result = $this->getById($this->id);
            if($result->password != $this->password) {
                $pass_hashed = password_hash($this->password, PASSWORD_DEFAULT, $options);
            } else {
                $pass_hashed = $this->password;
            }
            $query = "UPDATE users SET 
            name = '".$this->name."',
            lastname = '".$this->lastname."',
            email = '".$this->email."',
            password = '".$pass_hashed."'
            WHERE (id = '".$this->id."');";
            $save=$this->db()->query($query);
            $response = array($save);
        return array($response);
    }
    public function count(){

        $query = "SELECT COUNT(id) as amount FROM `users`;";
        $request=$this->db()->query($query);
        while($row = $request->fetch_object()) {
            $resultSet[]=$row;
           }
        return $resultSet;
    }
}
?>