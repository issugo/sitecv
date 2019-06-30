//* PREMIERE PARTIE POUR CHARGEMENT DE LA PAGE *//

/* COMPETENCES */
//on met l'input text de la modification de compétences a la competence 1 par défaut
document.getElementById('nouveauNomComp').value = document.getElementsByClassName('comp1')[0].textContent;

//on met le niveau de la modification au niveau déjà existant
//on crée l'attribut selected
let a = document.createAttribute('selected');
//on récupère le level actuel
let level = document.getElementsByClassName('comp1')[1].textContent;
level = level - 1;
//on l'applique
document.getElementById('nouveauNiveauComp')[level].setAttributeNode(a);

/* EXPERIENCES */

//on met le lieu de la modification d'experiences a la premiere experience par défaut
document.getElementById('nouveauLieuExp').value = document.getElementsByClassName('exp1')[0].textContent;
//on met le lieu de la modification d'experiences a la premiere experience par défaut
document.getElementById('nouveauDateExp').value = document.getElementsByClassName('exp1')[1].textContent;
//on met le lieu de la modification d'experiences a la premiere experience par défaut
document.getElementById('nouveauDescExp').value = document.getElementsByClassName('exp1')[2].textContent;
//on met le lieu de la modification d'experiences a la premiere experience par défaut
document.getElementById('nouveauRessentiExp').value = document.getElementsByClassName('exp1')[3].textContent;



//* DEUXIEME PARTIE POUR LES FONCTIONS DE DINAMISME  *//

/* pour les competences */

//fonction qui permettra d'avoir le nom et le niveau des compétences en dinamic
function actualisationModifCompetence() {
    //on prévoie l'attribut selected
    let attribut = document.createAttribute('selected');
    //on regarde quel id est sélectionné
    let id = document.getElementById('idCompAChanger').value;
    //on change le nom dans l'input
    document.getElementById('nouveauNomComp').value = document.getElementsByClassName("comp" + id)[0].textContent;
    //on change le level
    let niveau = document.getElementsByClassName("comp" + id)[1].textContent;
    niveau = niveau - 1;
    //on enleve tout les attributs selected
    for (var i = 0; i<5; i++) {
        document.getElementById('nouveauNiveauComp')[i].removeAttribute('selected');
    }
    //on l'applique
    document.getElementById('nouveauNiveauComp')[niveau].setAttributeNode(attribut);
}

/* pour les experiences */

//fonction qui permettra d'avoir les modifs de competence en dinamic
function actualisationModifExperience() {
    //on regarde quel id est sélectionné
    let id = document.getElementById('idExpAChanger').value;
    //on change le nom dans l'input
    document.getElementById('nouveauLieuExp').value = document.getElementsByClassName("exp" + id)[0].textContent;
    //on change le nom dans l'input
    document.getElementById('nouveauDateExp').value = document.getElementsByClassName("exp" + id)[1].textContent;
    //on change le nom dans l'input
    document.getElementById('nouveauDescExp').value = document.getElementsByClassName("exp" + id)[2].textContent;
    //on change le nom dans l'input
    document.getElementById('nouveauRessentiExp').value = document.getElementsByClassName("exp" + id)[3].textContent;
}