<?php
  Class App {
    // Constructor
    public function __construct() {
      $url = $this->parseURL();
      var_dump($url);
    }
    
    // Method
    public function parseURL() {
      if (isset($_GET["url"])) {
        // Remove predefined character from the right side
        $url = rtrim($_GET["url"], "/");
        // Remove all illegal characters
        $url = filter_var($url, FILTER_SANITIZE_URL);
        // Breaks a string into an array
        $url = explode("/", $url);
        return $url;
      }
    }
  } 
?>