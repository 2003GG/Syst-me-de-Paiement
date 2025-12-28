<?php 
require_once "../Repository/clientRepository.php";
require_once "../Repository/commandeRepository.php";
require_once "../Repository/PaiementRepository.php";

require_once "../src/client.php";

class ConsolePaymentApp
{


    private $clientRepository;
    private $commandeRepository;
    private $paymentRepository;


    public function __construct()
    {
        $this->clientRepository = new ClientRepository();
        $this->commandeRepository = new CommandeRepository();
        $this->paymentRepository = new PaiementRepository();
    }
public function showMenu(){
    echo "┌─────────────────────────────────────────────────────────┐\n";
    echo "│ MENU PRINCIPAL                                          │\n";
    echo "├─────────────────────────────────────────────────────────┤\n";
    echo "│ 1. Créer un client                                      │\n";
    echo "│ 2. Lister les clients                                   │\n";
    echo "│ 3. Créer une commande                                   │\n";
    echo "│ 4. Lister les commandes                                 │\n";
    echo "│ 5. Créer un paiement                                    │\n";
    echo "│ 6. Traiter un paiement                                  │\n";
    echo "│ 7. Consulter le statut d'un paiement                    │\n";
    echo "│ 8. Lister tous les paiements                            │\n";
    echo "│ 0. Quitter                                              │\n";
    echo "└─────────────────────────────────────────────────────────┘\n";
    
    $choise = readline("Votre choix : ");

    match ($choise) {
        "1" => $this->creatClient(),
        "2" => $this->listAllClients(),
        "3" => $this->creatCommande(),
        "4" => $this->listeCommande(),
        "5" => $this->creatPaiement(),
        "0" => exit("Au revoir!\n"),
        default => print("Choix invalide\n")  
    };
}

    public function creatClient(){
    
       $name = $this->readUserInput(" Entrez le nom du client: ");
        $email = $this->readUserInput("\n Entrez l'email du client: ");

        $client  = new Clients($name, $email);
        return $this->$client->ClientRepository->create($client);
    
}
  public function creatCommande(){
    
       $name = $this->readUserInput(" Entrez le nom du client: ");
        $email = $this->readUserInput("\n Entrez l'email du client: ");

        $commande = new Commande($name, $email);
        return $this->$commande->CommandeRepository->create($commande);
    
}
 public function creatPaiement(){
    
       $name = $this->readUserInput(" Entrez le nom du client: ");
        $email = $this->readUserInput("\n Entrez l'email du client: ");

        $paiement = new Paiement($name, $email);
        return $this->$paiement->CommandeRepository->create($paiement);
    
}
 public function readuserInput($prompt)
    {
        $input = readline($prompt);
        $input = trim($input);
        return $input;

    }
}



?>

    
