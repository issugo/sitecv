<?php   //script pour modifier un diplome
session_start();

//on vérifie que la personne est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille bien modifier un diplome
    if (isset($_POST['modifierDip'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on récupère l'id de la competence
        $id = $_POST['idDipAChanger'];
        //on récupère sa description
        $description = $_POST['nouveauDescDip'];
        //on recupere la date
        $date = strval($_POST['nouveauDateDip']);
        //on modifie tout
        $query0 = $cnx->prepare("UPDATE diplomes SET description = :desc, annee = :annee WHERE id_diplome = :id;");
        $query0->execute(['desc' => $description, 'annee' => $date, 'id' => $id]);
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