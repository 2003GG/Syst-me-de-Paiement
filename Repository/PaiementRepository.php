<?php 
include_once "../database/dataconect.php";


class PaiementRepository{

       private $pdo;
        public function __construct() {
              $this->pdo= new database()->getconection();

    }

 public function creat($paiement){
       
       
        $sql= "INSERT TABLE paiements(montant,statu_pai)VALUES(:montant,:statu)";
        $stmt=$this->pdo->prepare($sql);
         $result = $stmt->fetchAll(mode: PDO::FETCH_OBJ);
        $paiement=[];
        foreach ($result as $obj) {
            $pai=new paiement($obj->montant, $obj->statu);
        $pai->setId($obj->id);
        array_push($paiement, $pai);
     
    }
    return $paiement;
}

    }