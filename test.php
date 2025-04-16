<?php

// 🎯 Partie 1 – Abstraction & Interfaces

interface ReservableInterface{

    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation;

}

abstract Class Vehicule{
    public $id;
    public $immatriculation;
    public $marque;
    public $modele;
    public $prixJour;
    public $disponible = true;

    public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible){
        $this->id = $id;
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->prixJour = $prixJour;
        $this->disponible = $disponible;
    }

    public function setDisponible($disponible){
        $this->disponible = $disponible;
    }

    public function afficherDetails(){
        echo 'immatriculation :'.$immatriculation;
        echo 'marque :'.$marque;
        echo 'modele :'.$modele;
        echo 'prixJour :'.prixJour;
        echo 'disponible :'.disponible;
    }

    public function calculerPrix(int $jours): float{
        $Prix = $jours*$prixJour;
        return $Prix;
    }

    public function estDisponible(): bool{
        return $disponible;
    }

    abstract function getType(): string

}


🧿 Partie 2 – Héritage et spécialisation

class Voiture extends Vehicule implements ReservableInterface{

    public $nbPortes;
    public $transmission;

    public fucntion __construct($nbPortes, $transmission){
        $this->nbPortes = $nbPortes;
        $this->transmission = $transmission;
    }

    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation{
        return new Reservation(Client $client, DateTime $dateDebut, int $nbJours);
    }

    public function getType(){
        return 'Voiture';
    }

    public function afficherDetails(){
        echo 'nombre porte :'.$nbPortes;
        echo 'transmission :'.$transmission;
    }

}

class Moto extends Vehicule implements ReservableInterface{

    public $cylindree;

    public fucntion __construct($cylindree){
        $this->cylindree = $cylindree;
    }

    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation{
        return new Reservation(Client $client, DateTime $dateDebut, int $nbJours);
    }

    public function getType(){
        return 'Moto';
    }

    public function afficherDetails(){
        echo 'cylindree :'.$cylindree;
    }

}

class Camion extends Vehicule implements ReservableInterface{

    public $capaciteTonnage;

    public fucntion __construct($capaciteTonnage){
        $this->capaciteTonnage = $capaciteTonnage;
    }

    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation{
        return new Reservation(Client $client, DateTime $dateDebut, int $nbJours);
    }

    public function getType(){
        return 'Camion';
    }

    public function afficherDetails(){
        echo 'capacite Tonnage :'.$capaciteTonnage;
    }

}


🧑‍🤝‍🧑 Partie 3 – Client et Personne


abstract class Personne{
    public $nom;
    public $prenom;
    public $email;

    public fucntion __construct($nom, $prenom, $email){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    abstract function afficherProfil();

}

class Client extends Personne{
    public $numeroClient;
    public $reservations[];

    public fucntion __construct($numeroClient, $nom, $prenom, $email){
        parent::__construct($nom, $prenom, $email);
        $this->numeroClient = $numeroClient;
    }

    public function ajouterReservation(Reservation $r){
        return $reservations[] = $r;
    }

    public function afficherProfil(){
        echo 'nom :'.$nom;
        echo 'prenom :'.$prenom;
        echo 'email :'.$email;
        echo 'numeroClient :'.numeroClient;
    }

    public function getHistorique(){
        return $reservations[];
    }
}


🧾 Partie 4 – Agence & Réservation

class Agence{

    public $nom;
    public $ville;
    public $vehicules [];
    public $clients [];

    public fucntion __construct($nom, $ville, $vehicules[], $clients []){
        $this->nom = $nom;
        $this->ville = $ville;
        $this->vehicules  = $vehicules[];
        $this->clients = $clients[];
    }

    public function ajouterVehicule(Vehicule $v){
        return $vehicules[] = $v;
    }

    public function rechercherVehiculeDisponible(string $type){
        foreach($vehicules as $v){
            if($type = $v->getType() && $v->estDisponible()){
                return $v;
            }
        }
        return null;
    }

    public function enregistrerClient(Client $c){
        return $clients[] = $c;
    }

    public function faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours){
        return new Reservation(Client $client, DateTime $dateDebut, int $nbJours);
    }

}


class Reservation{

    public $novehiculem;
    public $client;
    public $dateDebut;
    public $nbJours;
    public $statut;

    public fucntion __construct($vehicule, $client, $dateDebut, $nbJours, $statut){
        $this->vehicule = $vehicule;
        $this->client = $client;
        $this->dateDebut  = $dateDebut;
        $this->nbJours = $nbJours;
        $this->statut = $statut;
    }

    public function calculerMontant(){
        return $this->vehicule->calculerPrix(int $nbJours);
    }

    public function confirmer(){
        $statut = 'confirmer';
        $disponible = false;
        $this->vehicule->setDisponible($disponible);
    }

    public function annuler(){
        $statut = 'annuler';
        $disponible = true;
        $this->vehicule->setDisponible($disponible);
    }

}


🧰 Partie 5 – Trait + Logger

