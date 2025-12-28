<?php 
require_once "../src/client.php";
require_once __DIR__ . '/../src/client.php';
require_once "../src/paiement.php";
require_once __DIR__ . '/../src/client.php';
require_once __DIR__ . '/../Repository/clientRepository.php';
require_once "../Repository/commandeRepository.php";
require_once "../Repository/PaiementRepository.php";




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
    
       $montantTotal = $this->readUserInput(" Entrez le montant total de commande: ");
       $statu = $this->readUserInput("\n Entrez le statu de commande : ");

        $commande = new Commande( $montantTotal, $statu );
        return $this->$commande->CommandeRepository->create($commande);
    
}
 public function creatPaiement(){
    
       $montant = $this->readUserInput(" Entrez le montant : ");
        $statu = $this->readUserInput("\n Entrez statu de paiement: ");

        $paiement = new Paiement($montant, $statu);
        return $this->$paiement->CommandeRepository->create($paiement);
    
}
public function listAllClients(){
     $clients = $this->clientRepository->findAll();

        if (empty($clients)) {

            echo "\n Aucun client n'est présent a ce moment !\n";
            return;
        }

        printf("%-5s  %-30s  %-50s\n", "ID", "Name", "Email");

        foreach ($clients as $client) {
            printf("%-5s  %-30s  %-50s \n", $client->id, $client->name, $client->email);
        }
}
public function listeCommande(){}

 public function readuserInput($prompt)
    {
        $input = readline($prompt);
        $input = trim($input);
        return $input;

    }
}



?>

    
