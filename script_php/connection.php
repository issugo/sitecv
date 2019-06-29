<?php
//on démarre la session
session_start();

//on se connecte à la BDD
include 'connectionBDD.php';

//on récupère les infos de connection
$query0 = $cnx->query("SELECT username, password FROM administrateur");
$data0 = $query0->fetch();

//on vérifie que les champs ont été remplies
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    http_response_code(403);
    exit();
} else {
    //on check l'username
    if ($data0['username'] == $_POST['username']) {
        //on check le mot de passe
        if (password_verify($_POST['password'], $data0['password'])) {
            $_SESSION['administrateur'] = 'true';
            header('Location: ../admin.php');
            exit();
        }
    }
}
?>
