<?php

class Category extends Controller {

    public $ModelCategory;

    function __construct()
    {
        $this->ModelCategory= $this->model("ModelCategory");
    }

    public function list(){
        $mang = $this->ModelCategory->List();
        $this->view("MasterLayout",[ "View"=> "Category/list",
                                    "Mang"=>$mang]);
        
    }

    public function add(){
        if(isset($_POST["btnAdd"]))
        {
            $active=0;
            if(isset($_POST["active"]))
            {
                $active=1;
            }

            
            if($this->ModelCategory->Add($_POST["name"],$_POST["ordering"],$active,$_POST["selectlevel"]))
            {
                header("Location: http://localhost:81/Admin/public/Category/list");
            }
        }

        $levelZero=$this->ModelCategory->listLevelZero();
        $this->view("MasterLayout",[ "View"=> "Category/add",
                                    "levelZero"=>$levelZero]);
    }


    public function edit(){

    }


   

}


?>