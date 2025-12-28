<?php 
require_once  "../database/dataconect.php";
require_once  "../src/client.php";

class ClientRepository{
    private $pdo;
    private $id;
 
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
public function findById($id){
  $sql = "SELECT * FROM clinets where id = :id";
 try {
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindParam(":id", $id);
  $stmt->execute();
  $row= $stmt->fetch(PDO::FETCH_OBJ);
  if(empty($row)){
    echo"0 utilisateur\n";
    exit();

 }
 $cl=new Clients($row->name, $row->email);
 return $cl;
}
catch (PDOException $e) {
  echo"Failed". $e->getMessage();
}
}
public function findAll(){
  $sql = "SELECT * FROM clients";

  $stmt= $this->pdo->prepare($sql);
  $stmt->execute();
  $all=$stmt->fetchAll(PDO::FETCH_OBJ);
 $clients = [];
  foreach ($all as $obj) {
    $clients = new Clients($obj->name, $obj->email);

  }
  return $clients;
}

       
//   public function getAllClients() {
//         $sql = "SELECT * FROM clients";
//         $stmt = $this->pdo->query($sql);
//         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
// }  

}






?>