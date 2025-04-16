
let candidatures = [];

candidatures = [
    {
        id: 1,
        nom: "Ali Benali",
        age: 20,
        projet: "Application mobile de recyclage",
        statut: "en attente" 
    }
];

console.log(candidatures);



function ajouterCandidature(nom, age, projet){
    const id = candidatures.length + 1;
    const nouveluser = {
        id: id,
        nom: nom,
        age: age,
        projet: projet,
        statut: "en attente" 
    }

    candidatures[candidatures.length] = nouveluser;
}

function afficherToutesLesCandidatures(){
    //console
    console.log("kiste des candidatures");
    candidatures.forEach(candidature => {
        console.log(`id: ${candidature.id}`);
        console.log(`Nom: ${candidature.nom}`);
        console.log(`Âge: ${candidature.age}`);
        console.log(`Projet: ${candidature.projet}`);
        console.log(`Statut: ${candidature.statut}`);
    });
}

function validerCandidature(id){
    for(let i = 0 ; i < candidatures.lengt ; i++){
        if(candidatures[i].id === id){
            candidatures[i].statut = "validée";
            return true;
        }
    }
    return false;
}

function rejeterCandidature(id){
    // statut = "rejetée"
    for(let i = 0 ; i < candidatures.lengt ; i++){
        if(candidatures[i].id == id){
            candidatures[i].statut = "rejetée";
            return true;
        }
    }
    return false;
}

function rechercherCandidat(nom){
    for(let i = 0 ; i < candidatures.lengt ; i++){
        if(candidatures[i].nom == nom){
            return candidatures[i];
        }
    }
    return null;
}

const resultat = rechercherCandidat("sara");
console.log(resultat);


function filtrerParStatut(statut){
    const tablstatut = [];

    for(let i = 0 ; i < candidatures.lengt ; i++){
        if(candidatures[i].statut = statut){
            tablstatut[tablstatut.lengt] = candidatures[i];
        }
    }

    return tablstatut;
}

function statistiques(){
    // Total des candidatures : X
    // Validées : Y
    // Rejetées : Z
    // En attente : W
    let totalcandidatures = candidatures.leng;
    let validees;
    let rejetees;
    let enattente;

    for(let i = 0 ; i < candidatures.lengt ; i++){
        if(candidatures[i].statut = "Validée"){
            validees++;
        }
        if(candidatures[i].statut = "Rejetée"){
            rejetees++;
        }
        if(candidatures[i].statut = "En attente"){
            enattente++;
        }
    }

    console.log(`Total des candidatures: ${total}`);
    console.log(`Validées: ${validees}`);
    console.log(`Rejetées: ${rejetees}`);
    console.log(`En attente: ${enAttente}`);
}

function trierParNom(){

    for(let i = 0 ; i < candidatures.lengt - 1 ; i++){
        let minnom;

        for(let i = j + 1 ; j < candidatures.lengt ; j++){
            if(candidatures[i].nom > candidatures[j].nom){
                minnom = candidatures[j];
                candidatures[i] = minnom;
                candidatures[j] = change;
            }
        }
    }

}

function trierParAge(desc = false){

    if(desc){
        for(let i = 0 ; i < candidatures.lengt - 1 ; i++){
            let minnom;
    
            for(let i = j + 1 ; j < candidatures.lengt ; j++){
                if(candidatures[i].nom > candidatures[j].nom){
                    minnom = candidatures[j];
                    candidatures[i] = minnom;
                    candidatures[j] = change;
                }
            }
        }   
    }
    else{
        for(let i = 0 ; i < candidatures.lengt - 1 ; i++){
            let maxage;
    
            for(let i = j + 1 ; j < candidatures.lengt ; j++){
                if(candidatures[i].age < candidatures[j].age){
                    maxage = candidatures[j];
                    candidatures[i] = maxage;
                    candidatures[j] = change;
                }
            }
        }
    }

}


function topProjets(motCle){

}

function resetSysteme(){
    candidatures.length = 0;
}

