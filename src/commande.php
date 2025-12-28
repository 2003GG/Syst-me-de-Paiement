<?php 
include_once __DIR__ . "/../database/dataconect.php";
class Commande{
    private $montantTotal;
    private $id;
    private $statu;
    private $client;
    public function __construct( $montantTotal, $statu ){
      $this->montantTotal=$montantTotal;
      $this->statu=$statu;
    }
     public function setId($id){
      if(!is_numeric($id) || $id <=0){
         echo"Ce Id: " .$this->$id."n'existe pas";
         return;
      }

  }
}
?>