<?php   //script pour modifier un article
session_start();

//on vérifie que la personne est admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    //on vérifie qu'on veuille bien modifier un article
    if (isset($_POST['modifierArt'])) {
        //on se connecte a la BDD
        include 'connectionBDD.php';
        //on récupère l'id de la competence
        $id = $_POST['idArtAChanger'];
        //on récupère son titre
        $titre = $_POST['nouveauTitreArt'];
        //on recupere le texte
        $texte = strval($_POST['nouveauTexteArt']);
        //on recupere le lanceur
        $lanceur = strval($_POST['nouveauLanceurArt']);
        //on modifie tout
        $query0 = $cnx->prepare("UPDATE articles SET titre = :titre, texte = :texte, lanceur = :lanceur WHERE id_article = :id;");
        $query0->execute(['titre' => $titre, 'texte' => $texte, 'lanceur' => $lanceur, 'id' => $id]);
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