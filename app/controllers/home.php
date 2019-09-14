<?php

class Home extends Controller {

    //$id được lấy từ paramater từ trang app.php
    public function detail($id){
        $teo = $this->model('SinhVien');

        $SV = $teo->getOne($id);

        // $this->view("home/detail",["SV"=>$SV]);

        $this->view("MasterLayout",[ "View"=> "home/detail",
                                    "SV"=>$SV]);
  
    }
    public function index(){
        //load Model( chứa data hiển thi)
        $teo = $this->model('SinhVien');
        
        //gọi hàm getAll lấy tất cả sinh viên 
        $mangSV = $teo->getAll();

        //load View giao dien can hien thi
        // $this->view("home/index",["Mang"=>$mangSV]);

        $this->view("MasterLayout",[ "View"=> "home/index",
                                    "Mang"=>$mangSV]);

        //echo "HOME".$teo->ID;
    }

    public function xuly($hoten, $namsinh, $tuoi){
        echo "HOME_XULY " . $hoten. $namsinh. $tuoi;
    }
}


?>