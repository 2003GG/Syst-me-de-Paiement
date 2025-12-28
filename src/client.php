<?php
class Clients
{
   private $nom;
   private $email;
   private $id;
   public function __construct($name, $email)
   {
      $this->nom;
      $this->email;

   }
   public function getNom()
   {
      return $this->nom;
   }

   public function getEmail()
   {
      return $this->email;
   }
   public function setId($id){
      if(!is_numeric($id) || $id <=0){
         echo"Ce Id: " .$this->$id."n'existe pas";
         return;
      }
      return $this->id;
   }
   // public function setNom($nom)
   // {
   //    $this->nom = $nom;
   // }

   // public function setEmail($email)
   // {
   //    $this->email = $email;
   // }

}


// $cl = new clients($nom, $email);
// $cl->addclient();

?>