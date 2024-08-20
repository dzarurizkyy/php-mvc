<?php  
  class StudentModel {
    // Dynamic Variable
    private $dbh, $stmt;

    // Connect to database
    public function __construct() {
      $dsn = "mysql:host=localhost; dbname=php_basic";
      try {
        $this->dbh = new PDO($dsn, "root", "");
      } catch(PDOExeception $e) {
        die($e->getMessage());
      }
    }

    // To retrieve all student data from the database
    public function getAll() {
      $this->stmt = $this->dbh->prepare("SELECT * FROM student");
      $this->stmt->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }
?>