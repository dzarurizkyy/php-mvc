<?php  
  class Home extends Controller {
    // Default Method
    public function index() {
      // Store dynamic data for specified pages
      $data["title"] = __CLASS__;
      $data["name"]  = $this->model("UserModel")->getUser();
      
      // Render the specified pages based on the URL
      $this->view("templates/header", $data);
      $this->view("home/index", $data);
      $this->view("templates/footer");
    }
  }
?>