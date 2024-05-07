<?php


class Customer
{
    private SQLConnection $sqlConnection;
    private PDO $pdo;

    public function __construct(SQLConnection $mysqlConnection)
    {
        $this->sqlConnection = $mysqlConnection;
        $this->pdo = $mysqlConnection->connect();
    }

    public function getCustomers(): array
    {
        $sql = 'SELECT * FROM customers where customerName like "A%"';
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCustomerNames(): array
    {
        $sql = 'SELECT CustomerName FROM customers';
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}