<?php

class App{

    protected $controller= "home";
    protected $method="index";
    protected $params=[];


    public function __construct()
    {
       // echo "App contruct".$_GET["url"];  
       $url = $this->checkURL();
       //print_r($url); 

       //nếu tồn tại thì require
      if(file_exists("../app/controllers/".$url[0].".php"))
      {
        $this->controller= $url[0];
        unset($url[0]);
      }

      //KIỂM TRA CONTROLEER ĐĂNG NHẬP BẰNG SESSION

      
      require_once("../app/controllers/".$this->controller.".php");
      $this->controller= new $this->controller;//tạo mới controller từ chuỗi 
     
      //xử lý method
      if(isset($url[1]))
      {
          if(method_exists($this->controller,$url[1]))//kiển tra xem method có tồn tại ko
          {
            $this->method= $url[1];
            unset($url[1]);
          }
      }

      //xu lý params
      $this->params = $url ? array_values($url) : [];

      //chạy hàm bằng một hàm 
      call_user_func_array([$this->controller,$this->method],$this->params);

    }

    public function checkURL()
    {
        if(isset($_GET["url"])){
          //echo $_GET["url"];
          return explode("/",filter_var(trim($_GET["url"])));//tách chuỗi dữa vào "/"
        }
    }

}

?>