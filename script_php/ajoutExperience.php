<?php   //script pour ajouter une experience
session_start();

//on vérifie que la personne est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille bien ajouter une experience
    if (isset($_POST['ajouterExp'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on crée une comp vide
        $cnx->query("INSERT INTO experiences (lieu, dateAffichage, description, ressenti) VALUES ('', '', '', '');");
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