<?php  
  class About {
    // Default Method
    public function index($name = "user", $age = 0) {
      $name = ucfirst($name);
      echo "Hi, my name is {$name}. I'm {$age} years old.";
    }

    // Alternative Method
    public function page() {
      echo "about/page";
    }
  }
?>