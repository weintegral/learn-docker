<?php

require_once './SQLConnection.php';

class MySQLConnection implements SQLConnection
{
    private $host;
    private $dbName;
    private $username;
    private $password;

    public function __construct($host, $dbName, $username, $password)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect(): ?PDO
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbName};port=3306";
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            return $pdo;
        } catch (PDOException $e) {
            $message = $e->getMessage();
            echo "<h1>Connection failed: $message </h1>";
            return null;
        }
    }
}