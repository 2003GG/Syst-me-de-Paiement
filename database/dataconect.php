<?php
class database
{
    private $user = "root";
    private $db = "sPaiement";
    private $host = "localhost";
    private $password = "";
    protected $pdo;
    public function __construct()    
    {
        try {
            $dsn ='mysql:host=' . $this->host . ';dbname=' . $this->db;

            $this->pdo = new PDO($dsn, $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "failed" . $e->getMessage();
        }
    }
    public function getconection(){
            return $this->pdo;
        }

}




?>