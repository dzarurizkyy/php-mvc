<?php  
  class Student extends Controller {
    // Displays the list of all students
    public function index() {
      $data["title"]    = "Students";
      $data["students"] = $this->model("StudentModel")->getAll();

      $this->view("templates/header", $data);
      $this->view("student/index", $data);
      $this->view("templates/footer");
    }

    // Shows details of a specific student
    public function detail($id) {
      $data["title"]    = "Student Detail";
      $data["student"]  = $this->model("StudentModel")->getById($id);

      $this->view("templates/header", $data);
      $this->view("student/detail", $data);
      $this->view("templates/footer");
    }

    // Adds a new student to the database
    public function add() {
      header("Location: " . BASEURL . "/student");

      if($this->model("StudentModel")->add($_POST) > 0) {
        Flasher::setFlash("sucesssfully", "added", "success");
      } else {
        Flasher::setFlash("unsuccessfully", "added", "danger");
      }

      exit;
    }
  }
?>