<?php  
  class Home extends Controller {
    // Default Method
    public function index() {
      // Store dynamic data for specified pages
      $data["title"] = __CLASS__;

      // Render the specified pages based on the URL
      $this->view("templates/header", $data);
      $this->view("home/index");
      $this->view("templates/footer");
    }
  }
?>