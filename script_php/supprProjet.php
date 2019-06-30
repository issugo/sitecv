<?php   //script pour supprimer un projet
session_start();

//on vérifie que l'utilisateur est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille supprimer un projet
    if (isset($_POST['supprimerPro'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on recupere l'id du projet a supprimer
        $id = $_POST['idProASuppr'];
        //on le supprime
        $query0 = $cnx->prepare("DELETE FROM projets WHERE id_projet = :id");
        $query0->execute(['id' => $id]);
        //on reset les id
        $query1 = $cnx->query("ALTER TABLE projets DROP id_projet");
        $query2 = $cnx->query("ALTER TABLE projets ADD id_projet INT NOT NULL AUTO_INCREMENT PRIMARY KEY");
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