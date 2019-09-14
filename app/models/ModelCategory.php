<?php

class ModelCategory extends DB{
    public $id;
    public $name;
    public $ordering;
    public $active;


    public function List()
    {
        $query = "SELECT * FROM Category";
        return mysqli_query($this->conn,$query);
    }

    public function Add($name,$ordering,$number,$level=0)
    {
        $query = "INSERT INTO Category 
                VALUES(null, '$name',$ordering,$number,$level);";
        
        return mysqli_query($this->conn,$query);
    }

    public function ListLevelZero()
    {
        $query = "SELECT * FROM Category WHERE level=0";
        return mysqli_query($this->conn,$query);
    }

}


?>