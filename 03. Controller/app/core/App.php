<?php
  Class App {
    // Default variable
    protected $controller = "home",
              $method     = "index",
              $params     = [];

    // Constructor
    public function __construct() {
      $url = $this->parseURL();

      // Check if a controller is specified in the URL
      if(isset($url[0])) {
        // If the controller file exists, set it as the current controller
        if(file_exists("../app/controllers/" . $url[0] . ".php")) {
          $this->controller = $url[0];
          unset($url[0]);
        }
      }

      // Load the controller file
      require_once "../app/controllers/" . $this->controller . ".php";
      // Instantiate the controller
      $this->controller = new $this->controller;

      // Check if a method is specified in the URL
      if(isset($url[1])) {
        // If the method exists in the controller, set it as the current method
        if(method_exists($this->controller, $url[1])) {
          $this->method = $url[1];
          unset($url[1]);
        }
      }

      // Store any remaining URL segments as parameters
      if(!empty($url)) {
        $this->params = array_values($url);
      }

      // Call the specified method on the controller with the parameters
      call_user_func_array([$this->controller, $this->method], $this->params);
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