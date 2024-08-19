<?php  
  class About extends Controller {
    // Default Method
    public function index($name = "user", $age = 0) {
      // Store dynamic data for specified pages
      $data["title"] = __CLASS__;
      $data["name"]  = $name;
      $data["age"]   = $age;
      
      // Render the specified pages based on the URL
      $this->view("templates/header", $data);
      $this->view("about/index", $data);
      $this->view("templates/footer");
    }

    // Alternative Method
    public function page() {
      // Store dynamic data for specified pages
      $data["title"] = "Page";

      // Render the specified pages based on the URL
      $this->view("templates/header", $data);
      $this->view("about/page");
      $this->view("templates/footer");
    }
  }
?>