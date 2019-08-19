<?php   //script pour supprimer un article
session_start();

//on vérifie que l'utilisateur est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille supprimer un article
    if (isset($_POST['supprimerArt'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on recupere l'id du diplome a supprimer
        $id = $_POST['idArtASuppr'];
        //on la supprime
        $query0 = $cnx->prepare("DELETE FROM articles WHERE id_article = :id");
        $query0->execute(['id' => $id]);
        //on reset les id
        $query1 = $cnx->query("ALTER TABLE articles DROP id_article");
        $query2 = $cnx->query("ALTER TABLE articles ADD id_article INT NOT NULL AUTO_INCREMENT PRIMARY KEY");
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