CREATE DATABASE sPaiement;

CREATE Table clients(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30),
    email VARCHAR(30)
);
 CREATE TABLE commandes(
    id int PRIMARY KEY AUTO_INCREMENT,
    montant_total FLOAT,
    client_id INT,
    statu ENUM('Commande reçue','En préparation','En cours de livraison','Livrée'),
    Foreign Key (client_id) REFERENCES clients(id)
 );
 CREATE Table paiements(
    id INT PRIMARY KEY AUTO_INCREMENT,
    montant FLOAT,
    date_paiment DATE,
    commend_id INT,
    statu_pai ENUM("valid","en attent","invalid"),
    Foreign Key (commend_id) REFERENCES commandes(id)
 );
 CREATE TABLE paypal(
   id_paypal INT,
   email VARCHAR(30),
   pass_word VARCHAR(30),
   Foreign Key (id_paypal) REFERENCES paiements(id)
 );
 CREATE TABLE cartbancaire(
   id_cart INT,
   numeroCart VARCHAR(20),
   pass_word VARCHAR(4),
   Foreign Key (id_cart) REFERENCES paiements(id)
 );

CREATE Table virement(
   id_virement INT,
   nom VARCHAR(20),
   Rib VARCHAR(20),
   Foreign Key (id_virement) REFERENCES paiements(id)

);

use sPaiement;
SELECT*FROM clients;
