<?php 
include_once __DIR__ . "/../database/dataconect.php";
class Paiement{
    private $montant;
    private $statu;
    public function __construct($montant,$statu){
        $this->montant=$montant;
        $this->statu= $statu;
    }
   

  public function setId($id){
      if(!is_numeric($id) || $id <=0){
         echo"Ce Id: " .$this->$id."n'existe pas";
         return;
      }

  }

}
?>
 