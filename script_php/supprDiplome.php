<?php   //script pour supprimer un diplome
session_start();

//on vérifie que l'utilisateur est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille supprimer une competence
    if (isset($_POST['supprimerDip'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on recupere l'id du diplome a supprimer
        $id = $_POST['idDipASuppr'];
        //on la supprime
        $query0 = $cnx->prepare("DELETE FROM diplomes WHERE id_diplome = :id");
        $query0->execute(['id' => $id]);
        //on reset les id
        $query1 = $cnx->query("ALTER TABLE diplomes DROP id_diplome");
        $query2 = $cnx->query("ALTER TABLE diplomes ADD id_diplome INT NOT NULL AUTO_INCREMENT PRIMARY KEY");
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