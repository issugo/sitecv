<?php   //script pour supprimer une competence
session_start();

//on vérifie que l'utilisateur est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille supprimer une competence
    if (isset($_POST['supprimer'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on recupere l'id de la competence a supprimer
        $id = $_POST['idCompASuppr'];
        //on la supprime
        $query0 = $cnx->prepare("DELETE FROM competences WHERE id_comp = :id");
        $query0->execute(['id' => $id]);
        //on reset les id
        $query1 = $cnx->query("ALTER TABLE competences DROP id_comp");
        $query2 = $cnx->query("ALTER TABLE competences ADD id_comp INT NOT NULL AUTO_INCREMENT PRIMARY KEY");
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