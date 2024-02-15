<?php
class Supplier extends EntityBase{
    private $id;
    private $name;
    private $direction;
    private $city;
    private $province;
    private $cp;
    private $country;
    private $telephone;
    private $email;
     
    public function __construct($adapter) {
        $table="suppliers";
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

    public function getDirection() {
        return $this->direction;
    }
    public function setDirection($direction) {
        $this->direction = $direction;
    }

    public function getCity() {
        return $this->city;
    }
    public function setCity($city) {
        $this->city = $city;
    }

    public function getProvince() {
        return $this->province;
    }
    public function setProvince($province) {
        $this->province = $province;
    }

    public function getCp() {
        return $this->cp;
    }
    public function setCp($cp) {
        $this->cp = $cp;
    }

    public function getCountry() {
        return $this->country;
    }
    public function setCountry($country) {
        $this->country = $country;
    }

    public function getTelephone() {
        return $this->telephone;
    }
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    
 
    public function save(){

            $query="INSERT INTO suppliers (name, direction, city, province, cp, country, telephone, email)
                    VALUES('".$this->name."',
                        '".$this->direction."',
                        '".$this->city."',
                        '".$this->province."',
                        '".$this->cp."',
                        '".$this->country."',
                        '".$this->telephone."',
                        '".$this->email."');";
            $save=$this->db()->query($query);
            $response = array($save);
        return array($response);
    }
    // metodo para realizar la actualizaciond e nuestra entidad
    public function update(){

            $query = "UPDATE suppliers SET 
            name = '".$this->name."',
            direction = '".$this->direction."',
            city = '".$this->city."',
            province = '".$this->province."',
            cp = '".$this->cp."',
            country = '".$this->country."',
            telephone = '".$this->telephone."',
            email = '".$this->email."'
            WHERE (id = '".$this->id."');";
            $save=$this->db()->query($query);
            $response = array($save);
        return array($response);
    }
    public function count(){

        $query = "SELECT COUNT(id) as amount FROM `suppliers`;";
        $request=$this->db()->query($query);
        while($row = $request->fetch_object()) {
            $resultSet[]=$row;
           }
        return $resultSet;
    }
}
?>