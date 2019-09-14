<?php

class SinhVien extends DB{
    public $ID;
    public $HOTEN;
    public $NAMSINH;


    public function getAll()
    {
        $query = "SELECT *
                  FROM sinhvien";
        return mysqli_query($this->conn,$query);//trả về một mảng
    }

    public function getOne($id)
    {
        $query = "SELECT *
                  FROM sinhvien
                  WHERE ID=$id";
        return mysqli_query($this->conn,$query);//trả về một mảng
    }


}

?>