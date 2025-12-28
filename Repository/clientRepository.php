<?php 
require_once  "../database/dataconect.php";
require_once  "../src/client.php";

class ClientRepository{
    private $pdo;
 
    public function __construct(){
      $this->pdo= new database()->getconection();
   
    }
      public function creat($client)
{      
     
     $sql = "INSERT INTO clients (nom,email) VALUES (:nom ,:email)";
   
    $stmt = $this->pdo->prepare($sql);
            $result = $stmt->fetchAll(mode: PDO::FETCH_OBJ);

    $clients = [];
        foreach ($result as $obj) {

            $cl = new Clients($obj->name, $obj->email);
            $cl->setId($obj->id);
            array_push($clients, $cl);
        }

        return $clients;


}  
  public function getAllClients() {
        $sql = "SELECT * FROM clients";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
}  

}






?>