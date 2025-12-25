<?php 
include_once __DIR__ . "/../database/dataconect.php";
class Paiement{
    private $montant;
    private $statu;
    public function __construct($montant,$statu){
        $this->montant=$montant;
        $this->statu= $statu;
    }
    public function setpaiement(){
        $db=new database();
        $conect= $db->getconection();
        $sql= "INSERT TABLE paiements(montant,statu_pai)VALUES(:montant,:statu)";
        $result=$conect->prepare($sql);
        $result->bindParam(":montat",$this->montant);
        $result->bindParam(":statu",$this->statu);

    }
}
$montant=readline("montant : ");
echo"valide\n";
echo"en attent\n";
echo"invalid\n";

$statu=readline("statu : ");
$pi=new Paiement($montant,$statu);
$pi->setpaiement();


?>
 