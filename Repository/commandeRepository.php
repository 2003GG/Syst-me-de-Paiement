<?php
include_once  "../database/dataconect.php";
include_once "../src/commande.php";

class CommandeRepository {
    private $pdo;
        public function __construct() {
              $this->pdo= new database()->getconection();

    }

       public function creat($commande){
       
        $sql="INSERT INTO commandes(montant_total,statu) VALUES(:montant_total,:statu)";
        $stmt=$this->pdo->prepare($sql);
        $result = $stmt->fetchAll(mode: PDO::FETCH_OBJ);
        $commande=[];
        foreach ($result as $obj) {
            $cm=new Commande($obj->name, $obj->email);
        $cm->setId($obj->id);
        array_push($commande, $cm);
    }
    return $commande;

}
public function findAll(){
  $sql = "SELECT * FROM commandes";

  $stmt= $this->pdo->prepare($sql);
  $stmt->execute();
  $all=$stmt->fetchAll(PDO::FETCH_OBJ);
 $commandes = [];
  foreach ($all as $obj) {
    $commandes = new Clients($obj->name, $obj->email);

  }
  return $commandes;
}
}