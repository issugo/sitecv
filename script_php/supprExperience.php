<?php   //script pour supprimer une experience
session_start();

//on vérifie que l'utilisateur est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille supprimer une experience
    if (isset($_POST['supprimerExp'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on recupere l'id de l'ex^perience a supprimer
        $id = $_POST['idExpASuppr'];
        //on la supprime
        $query0 = $cnx->prepare("DELETE FROM experiences WHERE id_exp = :id");
        $query0->execute(['id' => $id]);
        //on reset les id
        $query1 = $cnx->query("ALTER TABLE experiences DROP id_exp");
        $query2 = $cnx->query("ALTER TABLE experiences ADD id_exp INT NOT NULL AUTO_INCREMENT PRIMARY KEY");
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