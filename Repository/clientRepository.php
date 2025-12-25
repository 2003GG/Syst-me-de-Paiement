<?php 
include_once __DIR__ . "/../database/dataconect.php";
include_once __DIR__ . "/../src/client.php";

class Clientrepository {
    private $pdo;
    private $cl;
    public function __construct(){
      $this->pdo= new database()->getconection();
   
    }
      public function setaddclient($cl)
{      
     
       $cl = new clients();
      $email = $this->$cl->email;
      $nom =$this->$cl->nom;
    
   
    
     $sql = "INSERT INTO clients (nom,email) VALUES (:nom ,:email)";
   
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    
   echo "Client added successfully!\n";
   return $cl;

}    
}






?>