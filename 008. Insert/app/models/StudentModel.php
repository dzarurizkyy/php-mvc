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

    // To add a new student record to the database
    public function add($data) {
      $this->db->query("INSERT INTO {$this->table} VALUES ('', :name, :npm, :major, :email)");
      $this->db->bind("name", $data["name"]);
      $this->db->bind("npm", $data["npm"]);
      $this->db->bind("major", $data["major"]);
      $this->db->bind("email", $data["email"]);
      $this->db->execute();

      return $this->db->rowCount();
    }
  }
?>