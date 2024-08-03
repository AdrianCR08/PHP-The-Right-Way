<?php

class Connection {
    private $host = "localhost:3308";
    private $db = "portfolio";
    private $user = "root";
    private $pass = "";
    private $chrs = "utf8mb4";
    private $attr;
    private $opts = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    private PDO $connection;

    /**
     * @throws Exception
     */
    public function __construct() {
        $this->attr = "mysql:host={$this->host};dbname={$this->db};charset={$this->chrs}";
        try {
            $this->connection = new PDO($this->attr, $this->user, $this->pass, $this->opts);
        } catch (PDOException $e) {
            throw new Exception("Connection failed: " . $e->getMessage());
        }
    }
    public function executeSQL($sql, $params = []) { // Insert, Delete, Aupdate
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $this->connection->lastInsertId();
        } catch (PDOException $e) {
            throw new Exception("Query failed: " . $e->getMessage());
        }
    }

    public function listAll($sql){
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();




    }
}

?>
