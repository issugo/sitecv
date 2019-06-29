<!-- interface admin -->
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
    
    //lien de style
    echo "<link rel='stylesheet' type='text/css' href='css/admin.css'>";
    
    //on se connecte à la BDD
    include 'script_php/connectionBDD.php';
    
    //on récupère les compétences
    $query0 = $cnx->query('SELECT * FROM competences');
    
    //on affiche le tableau de compétences
    echo "<table>";
        echo"<caption>Tableau des compétences</caption>";
        echo "<tr>";
            echo "<th>id</th>";
            echo "<th>nom</th>";
            echo "<th>niveau</th>";
            echo "<th>logo competence</th>";
        echo "</tr>";
    while ($competences = $query0->fetch()) {
        echo "<tr>";
            echo "<td>" . $competences['id_comp'] . "</td>";
            echo "<td class='" . $competences['id_comp'] . "'>" . $competences['nom'] . "</td>";
            echo "<td class='" . $competences['id_comp'] . "'>" . $competences['niveau'] . "</td>";
            echo "<td class='" . $competences['id_comp'] . "'><img src='" . $competences['lien_visu'] . "' alt='" . $competences['nom'] . "'></td>";
        echo "</tr>";
        $dernierID = $competences['id_comp'];
        
    }
    echo "</table>";
    
    //formulaire pour ajouter une compétence
    echo "<form action='script_php/ajoutCompetence.php' method='post'>";
        echo "<input type='submit' name='ajouter' value='ajouter' />";
    echo "</form>";
    
    //formulaire pour supprimer une competence
    echo "<span>Supprimer une competence</span>";
    echo "<form action='script_php/supprCompetence.php' method='post'>";
        echo "<select name='idCompASuppr'>";
            for ($i=1; $i<=$dernierID; $i++) {
                echo "<option value='" . $i . "'>" . $i . "</option>";
            }
        echo "</select>";
        echo "<input type='submit' name='supprimer' value='supprimer' />";
    echo "</form>";
    
    //formulaire de modification de compétences
    echo "<span>Modifier une competence</span>";
    echo "<form action='#' method='post'>";
        echo "<select name='idCompAChanger' id='idCompAChanger' onchange='actualisationModif()'>";
            for ($i=1; $i<=$dernierID; $i++) {
                echo "<option value='" . $i . "'>" . $i . "</option>";
            }
        echo "</select>";
        echo "<input type='text' name='nouveauNom'  id='nouveauNom' />";
        echo "<select name='nouveauNiveau' id='nouveauNiveau'>";
            for ($i=1; $i<=5; $i++) {
                echo "<option value='" . $i . "'>" . $i . "</option>";
            }
        echo "</select>";
        echo "<input type='hidden' name='MAX_FILE_SIZE' value='30000000' />";
        echo "<input type='file' name='nouveauVisu' id='nouveauVisu' accept='.jpg,.jpeg,.png' />";
        echo "<input type='submit' name='modifier' value='modifier' />";
    echo "</form>";
    var_dump($_FILES);
    
    //bouton de deconnection
    echo "<form action='#' method='post'>
            <input type='submit' name='disconnect' value='se deconnecter' />
          </form>";
    
    //lien de JS
    echo "<script src='js/admin.js'></script>";
}
?>

<!-- titre de la page -->
<title>Admin | MARGAIL Maurin</title>