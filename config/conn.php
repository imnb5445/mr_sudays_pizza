<?php
class database
{
    // Method to establish connection
    public function __construct()
    {

        try {
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
            return $this->conn = $conn;
        } catch (mysqli_sql_exception $e) {
            die("<h1>Connection Failed: " . $e->getMessage() . "</h1>");
        }
    }
}
?>