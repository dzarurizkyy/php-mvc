<?php 
  Class Controller {
    // To display page correctly with user input
    public function view($view, $data = []) {
      require_once "../app/views/{$view}.php";
    }
  }
?>