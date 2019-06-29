//on met l'input text de la modification de compétences a la competence 1 par défaut
document.getElementById('nouveauNom').value = document.getElementsByClassName('1')[0].textContent;

//on met le niveau de la modification au niveau déjà existant
//on crée l'attribut selected
let a = document.createAttribute('selected');
//on récupère le level actuel
let level = document.getElementsByClassName('1')[1].textContent;
level = level - 1;
//on l'applique
document.getElementById('nouveauNiveau')[level].setAttributeNode(a);

//fonction qui permettra d'avoir le nom et le niveau des compétences en dinamic
function actualisationModif() {
    //on prévoie l'attribut selected
    let attribut = document.createAttribute('selected');
    //on regarde quel id est sélectionné
    let id = document.getElementById('idCompAChanger').value;
    //on change le nom dans l'input
    document.getElementById('nouveauNom').value = document.getElementsByClassName(id)[0].textContent;
    //on change le level
    let niveau = document.getElementsByClassName(id)[1].textContent;
    niveau = niveau - 1;
    //on enleve tout les attributs selected
    for (var i = 0; i<5; i++) {
        document.getElementById('nouveauNiveau')[i].removeAttribute('selected');
    }
    //on l'applique
    document.getElementById('nouveauNiveau')[niveau].setAttributeNode(attribut);
}