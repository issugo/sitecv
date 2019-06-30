<?php   //script pour ajouter un projet
session_start();

//on vérifie que la personne est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille bien ajouter un projet
    if (isset($_POST['ajouterPro'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on crée un projet vide
        $cnx->query("INSERT INTO projets (nom, ressenti, description, dateAffiche) VALUES ('', '', '', '');");
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