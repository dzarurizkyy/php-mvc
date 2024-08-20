<?php  
  class Home extends Controller {
    public function index() {
      $data["title"] = __CLASS__;
      $data["name"]  = $this->model("UserModel")->getUser();
      
      $this->view("templates/header", $data);
      $this->view("home/index", $data);
      $this->view("templates/footer");
    }
  }
?>