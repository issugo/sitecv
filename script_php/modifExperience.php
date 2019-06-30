<?php   //script pour modifier une competence
session_start();

//on vérifie que la personne est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille bien modifier une comp
    if (isset($_POST['modifierExp'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on récupère l'id de l'experience
        $id = $_POST['idExpAChanger'];
        //on récupère son lieu
        $lieu = $_POST['nouveauLieuExp'];
        //on récupère sa date
        $date = $_POST['nouveauDateExp'];
        //on recupere la description
        $description = $_POST['nouveauDescExp'];
        //on recupere le ressenti
        $ressenti = $_POST['nouveauRessentiExp'];
        //on modiife le tout
        $query0 = $cnx->prepare("UPDATE experiences SET lieu = :lieu, dateAffichage = :date, description = :description, ressenti = :ressenti WHERE id_exp = :id");
        $query0->execute(['lieu' => $lieu, 'date' => $date, 'description' => $description, 'ressenti' => $ressenti, 'id' => $id]);
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