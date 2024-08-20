<?php  
  class StudentModel {
    private $db,
            $table = "student";

    // To initialize database connection
    public function __construct() {
      $this->db = new Database;
    }

    // To retrieve all student data from the database
    public function getAll() {
      $this->db->query("SELECT * FROM {$this->table}");
      return $this->db->resultSet();
    }

    // To retrieve student data by ID from the database
    public function getById($id) {
      $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
      $this->db->bind("id", $id);
      return $this->db->single();
    }
  }
?>