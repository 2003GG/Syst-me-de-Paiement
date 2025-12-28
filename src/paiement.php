<?php 

class Paiement{
    private $montant;
    private $statu;

    public const STATU_VALID = "valid";
    public const STATU_EN_ATTENT="en attent";
    const STATU_NOT_VALID = "invalide";
    public function __construct($montant,$statu=self::STATU_EN_ATTENT){
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
 