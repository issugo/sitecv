<?php   //script pour modifier un projet
session_start();

//on vérifie que la personne est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille bien modifier un projet
    if (isset($_POST['modifierPro'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on récupère l'id du projet
        $id = $_POST['idProAChanger'];
        //on récupère son nom
        $nom = $_POST['nouveauNomPro'];
        //on récupère son ressenti
        $ressenti = $_POST['nouveauRessentiPro'];
        //on récupère sa description
        $description = $_POST['nouveauDescPro'];
        //on recupere sa date
        $date = $_POST['nouveauDatePro'];
        //on modiife le tout
        $query0 = $cnx->prepare("UPDATE projets SET nom = :nom, ressenti = :ressenti, description = :description, dateAffiche = :dateAffiche WHERE id_projet = :id");
        $query0->execute(['nom' => $nom, 'ressenti' => $ressenti, 'description' => $description, 'dateAffiche' => $date, 'id' => $id]);
        //on retourne sur la page d'admin
        header('Location: ../admin.php');
        exit();
    } else {
        http_response_code(403);
        exit();
    }
} else {
    http_response_code(403);
    exit();
}
?>