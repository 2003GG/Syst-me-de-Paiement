<?php
include "dataconection.php";
include "../src/client.php";
include "../Repository/clientRepository.php";
include "../Repository/commandeRepository.php";


class ConsolePayement
{
    public function run()
    {
        while (true) {
            $this->displayMenu();
            $choix = $this->readuserInput("enter votre choix : ");
            match ($choix) {
                "1" => $this->creatClent(),
                "2" => $this->listeAllClients(),
                "2" => $this->creatCommend(),
                "3"=> $this->listeAllCommandes(),
                "4"=> $this->creatPaiement(),
                "5"=> $this->TraitePaiement(),
                "0" => $this->exitApp(),
            };
        }

    }
    public function displayMenu()
    {
        echo "╔═══════════════════════════════════════════════════════════╗\n";
        echo "║     SYSTÈME DE GESTION DE PAIEMENT - CONSOLE APP          ║\n";
        echo "╚═══════════════════════════════════════════════════════════╝\n\n";
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

    }
    public function readuserInput($prompt)
    {
        $input = readline($prompt);
        $input = trim($input);
        return $input;

    }
    public function creatClent()
    {
       $name = $this->readUserInput(" Entrez le nom du client: ");
        $email = $this->readUserInput("\n Entrez l'email du client: ");

        $client  = new Client($name, $email);

        // passer ce client vers la couche de la base de donnée.

        return $this->clientRepository->create($client);
    }
    public function listeAllClients()
    {
        echo "client list !";

    }
    public function exitApp()
    {
        echo "\n exite ....";
        exit(0);
    }
}