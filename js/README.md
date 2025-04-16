TP JS – Système de Gestion de Candidatures d’un Hackathon
⏰ Durée : 3 heures
🎯 Objectifs pédagogiques :
Manipuler les tableaux et objets


Utiliser les fonctions pour structurer la logique


Appliquer les conditions, boucles, et notions de tri, filtrage, recherche


Simuler un mini-système avec une logique métier complète



🧠 Contexte :
Tu dois simuler un système de gestion de candidatures pour un hackathon. Le système doit permettre :
L’ajout de nouvelles candidatures


La validation/rejet des candidatures


La recherche de candidats par nom


Le filtrage par statut


L’affichage des statistiques générales



🔨 Travaux demandés :
Crée un fichier hackathon.js dans lequel tu vas implémenter les fonctions suivantes :
✅ 1. Initialisation (10 min)
Créer un tableau global let candidatures = []
 Chaque élément est un objet comme ceci :

{
  id: 1,
  nom: "Ali Benali",
  age: 20,
  projet: "Application mobile de recyclage",
  statut: "en attente" // ou "validée", "rejetée"
}


🔧 2. Fonctions de base (1h)
ajouterCandidature(nom, age, projet)
 → ajoute une nouvelle candidature avec un id auto-incrémenté et statut = "en attente"


afficherToutesLesCandidatures()
 → affiche toutes les candidatures sous forme lisible dans la console


validerCandidature(id)
 → change le statut d'une candidature en "validée"


rejeterCandidature(id)
 → change le statut en "rejetée"


rechercherCandidat(nom)
 → affiche les candidatures dont le nom contient la recherche (insensible à la casse)



📊 3. Fonctions avancées (1h)


filtrerParStatut(statut)
 → affiche toutes les candidatures selon leur statut : "en attente", "validée", "rejetée"




statistiques()
 → affiche dans la console :

Total des candidatures : X
Validées : Y
Rejetées : Z
En attente : W


trierParNom()
 → trie le tableau candidatures par ordre alphabétique du nom


trierParAge(desc = false)
 → trie les candidats par âge croissant (ou décroissant si desc = true)



🌟 Bonus (facultatif)
topProjets(motCle)
 → affiche les projets contenant un mot-clé donné (ex: "IA", "web", "mobile")


resetSysteme()
 → vide complètement la liste de candidatures



🧪 Exemples de test (à la fin du fichier)


ajouterCandidature("Fatima Zahra", 22, "Plateforme de tutorat");
ajouterCandidature("Mohamed Amine", 19, "Application de dons alimentaires");

validerCandidature(1);
rejeterCandidature(2);

afficherToutesLesCandidatures();
statistiques();
rechercherCandidat("fatima");
filtrerParStatut("validée");
trierParAge();


📌 Contraintes
Utiliser uniquement JavaScript vanilla (ES6+)


Le TP doit pouvoir être exécuté via node hackathon.js


Éviter l’usage de bibliothèques externes


Bien commenter les fonctions

