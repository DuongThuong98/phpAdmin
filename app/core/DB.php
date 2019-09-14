<?php
class DB{
    public $conn;//để public để cho mọi nguoi727 lấy về connect được
    private $server = "localhost";
    private $username = "root";
    private $passworod = '';
    private $db = 'bookstore';//db name

    function __construct()
    {
        $this->conn= mysqli_connect($this->server,$this->username,$this->passworod);
        mysqli_select_db($this->conn,$this->db);
        mysqli_query($this->conn,"SET NAMES 'utf8");
    }


    }

?>