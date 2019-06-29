<?php
//on démarre la session
session_start();

//formulaire de connection à l'admin
if ((!isset($_SESSION['administrateur']) || $_SESSION['administrateur'] != 'true') && (!isset($_POST['submit']))) {
    echo"<link rel='stylesheet' href='css/login.css' type='text/css'>
            <div id='connect'>
                <form method='post' action='script_php/connection.php' class='login-form centrage'>
                    <div class='content'>
                        <input type='text' name='username' placeholder='username' class='input username' />
                        <div class='user-icon'></div>
                            <input type='password' name='password' placeholder='password' class='input password' />
                            <div class='pass-icon'></div>
                        </div>
                        <div class='footer'>
                            <input type='submit' name='submit' value='Se connecter' class='button' />
                        </div>
                    </div>
                </form>
            </div>"; 
}
//si on est déjà connecté, on retourne sur la page d'admin
if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] == 'true') {
    header('Location: admin.php');
    exit();
}

?>

<!-- titre de la page -->
<title>Connection | MARGAIL Maurin</title>