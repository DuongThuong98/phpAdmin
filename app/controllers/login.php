<?php

class Login extends Controller {
    public function index(){

        $chuoi = "";
        if(isset($_POST["btnLogin"]))
        {
            $chuoi = "Dang nhap thanh cong";
        }
        else
        {
            $chuoi= "Moi dang nhap";
        }
        $this->view("Login",["chuoi"=>$chuoi]);

    }
}


?>