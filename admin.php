<?php
//on démarre la session
session_start();

//si l'utilisateur vient de se déconnecter
if (isset($_POST['disconnect'])) {
    $_SESSION = [];
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}

//on vérifie que l'utilisateur est connecté
if (!isset($_SESSION['administrateur']) || $_SESSION['administrateur'] != 'true') {
    header('Location: login.php');
    exit();
} else {
    //si il est connecté, on le laisse accéder à tout
    echo "<form action='#' method='post'>
            <input type='submit' name='disconnect' value='se deconnecter' />
          </form>";
}
?>

<!-- titre de la page -->
<title>Admin | MARGAIL Maurin</title>