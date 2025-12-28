<?php 
class Commande{
    private $montantTotal;
    private $id;
    private $statu;
    private $client;

    public const STATU_RECUE="Commande reçue";
     public const STATUS_EN_PREPARATION  = "En préparation"; 
    public const STATUS_EN_COURS  = "En cours de livraison";
    public const STATUS_LIVRE  = "Livrée";
    public function __construct( $montantTotal, $statu=self:: STATUS_EN_PREPARATION){
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