<?php  
  class Student extends Controller {
    // Default Method
    public function index() {
      // Store dynamic data for specified pages
      $data["title"]    = "Students";
      $data["students"] = $this->model("StudentModel")->getAll();

      // Render the specified pages based on the URL
      $this->view("templates/header", $data);
      $this->view("student/index", $data);
      $this->view("templates/footer");
    }
  }
?>