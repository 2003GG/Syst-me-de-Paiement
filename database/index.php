<?php include_once "../Repository/clientRepository.php";
$Cc = new Clientrepository();

echo"SYSTEME DE PAIEMENT - MENU\n";
echo"==============================\n";
echo"1. Créer un client\n";
echo"2. Créer une commande\n";
echo"3. Payer une commande\n";
echo"4. Afficher les commandes\n";
echo"0. Quitter\n";
echo"------------------------------\n";
$choise=readline("Votre choix :");

switch ($choise){
    case 1:
$nomCreat = readline("Please enter your name: ");
 $emailCreat= readline("Please enter your email: ");
 
//  $Cc->setaddclient($cle);
 $nomCreat=$Cc->setaddclient($cl)->$nom;
 $emailCreat=$Cc->setaddclient($cl)->$email;
        break;
}



?>