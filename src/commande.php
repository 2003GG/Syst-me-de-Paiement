<?php 
include_once __DIR__ . "/../database/dataconect.php";
class Commande{
    private $montantTotal;
    private $statu;
    public function __construct( $montantTotal, $statu ){
      $this->montantTotal=$montantTotal;
      $this->statu=$statu;
    }

    public function setMontantTotal(){
        $db=new database();
        $pdo=$db->getconection();
        $sql="INSERT INTO commandes(montant_total,statu) VALUES(:montant_total,:statu)";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(":montant_total",$this->montantTotal);
        $stmt->bindParam(":statu",$this->statu);
        $stmt->execute();
    }
}
$montantTotal=readline("le montan total : ");

echo"Commande reçue\nEn préparation\nEn cours de livraison\nLivrée";
$statu=readline("statu : ");
$cm=new Commande($montantTotal,$statu);
$cm->setMontantTotal();


?>