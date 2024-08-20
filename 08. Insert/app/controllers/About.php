<?php  
  class About extends Controller {
    public function index($name = "user", $age = 0) {
      $data["title"] = __CLASS__;
      $data["name"]  = $name;
      $data["age"]   = $age;
      
      $this->view("templates/header", $data);
      $this->view("about/index", $data);
      $this->view("templates/footer");
    }

    public function page() {
      $data["title"] = "Page";

      $this->view("templates/header", $data);
      $this->view("about/page");
      $this->view("templates/footer");
    }
  }
?>