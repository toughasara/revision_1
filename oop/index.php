<?php

require_once 'test.php';

$agence1 = new Agence('premier', 'Paris');
$agence2 = new Agence('deuxieme', 'Casablanca');

$vehicule1 = new Vehicule(1, "12345", "audi", 14, 350);
$vehicule2 = new Vehicule(2, "92648", "audi", 14, 350);
$vehicule3 = new Vehicule(3, "28047", "audi", 14, 350);
$vehicule4 = new Vehicule(4, "37193", "audi", 14, 350);

$agence1->ajouterVehicule($vehicule1);
$agence1->ajouterVehicule($vehicule2);
$agence2->ajouterVehicule($vehicule3);
$agence2->ajouterVehicule($vehicule4);

$client1 = new Client(23, "Tougha", "Sara", "toughasarah@gmail.com");
$client2 = new Client(26, "Alaoui", "Ilham", "ilhamalaoui@gmail.com");

$agence1->enregistrerClient($client1);
$agence2->enregistrerClient($client2);

$reservation1 = $agence1->faireReservation($client1, $vehicule1, new datenow(), 12);

