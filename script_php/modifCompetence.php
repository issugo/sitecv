<?php   //script pour modifier une competence
session_start();

//on vérifie que la personne est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille bien modifier une comp
    if (isset($_POST['modifier'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on récupère l'id de la competence
        $id = $_POST['idCompAChanger'];
        //on récupère son nom
        $nom = $_POST['nouveauNom'];
        //on recupere le niveau
        $niveau = $_POST['nouveauNiveau'];
        //on modiife le tout avec ou non l'image
        if (!isset($_FILES)) {
            //on modifie tout sauf le visu
            $query0 = $cnx->prepare("UPDATE competences SET nom = :nom, niveau = :niveau");
            $query0->execute(['nom' => $nom, 'niveau' => $niveau]);
        } else {
            var_dump($_FILES);
            //on recupere l'image sur le serveur
            $name = basename($_FILES['nouveauVisu']['name']);
            $chemin = 'img/' . $name;
            if (move_uploaded_file($_FILES['nouveauVisu']['tmp_name'], $chemin)) {
                //on rentre tout dans la BDD
                $query0 = $cnx->prepare("UPDATE competences SET nom = :nom, niveau = :niveau, lien_visu = :lien");
                $query0->execute(['nom' => $nom, 'niveau' => $niveau, 'lien' => $chemin]);
            } else {
                //si on a raté
                http_response_code(503);
                exit();
            }
        }
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