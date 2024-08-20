<?php 
  Class Controller {
    // To display the page with given data
    public function view($view, $data = []) {
      require_once "../app/views/{$view}.php";
    }

    // To load and instantiate a model
    public function model($model) {
      require_once "../app/models/{$model}.php";
      return new $model;
    }
  }
?>