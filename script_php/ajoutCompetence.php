<?php   //script pour ajouter une competence
session_start();

//on vérifie que la personne est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille bien ajouter une comp
    if (isset($_POST['ajouter'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on crée une comp vide
        $cnx->query("INSERT INTO competences (nom, niveau, lien_visu) VALUES ('', '1', '');");
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