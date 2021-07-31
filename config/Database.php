<?php
class Database {
    //Database Parameters
    private $host = 'localhost';
    private $dbname = 'firstrestapi';
    private $username = 'Practice';
    private $password = '@Mysqlphp';
    private $conn;

    // Database connection
    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }

        return $this->conn;
    }
}
?>