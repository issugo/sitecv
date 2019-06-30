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
    
    //div qui contient tout et gère le flex
    echo "<div class='container'>";
    
    //on se connecte à la BDD
    include 'script_php/connectionBDD.php';
    
    //on récupère les compétences
    $query0 = $cnx->query('SELECT * FROM competences');
    
    //on affiche le tableau de compétences
    echo "<div class='section'>";
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
                echo "<td class='comp" . $competences['id_comp'] . "'>" . $competences['nom'] . "</td>";
                echo "<td class='comp" . $competences['id_comp'] . "'>" . $competences['niveau'] . "</td>";
                echo "<td class='comp" . $competences['id_comp'] . "'><img src='" . $competences['lien_visu'] . "' alt='" . $competences['nom'] . "'></td>";
            echo "</tr>";
            $dernierID = $competences['id_comp'];       
        }
        echo "</table>";
    
        //formulaire pour ajouter une compétence
        echo "<form action='script_php/ajoutCompetence.php' method='post'>";
            echo "<input type='submit' name='ajouterComp' value='ajouter' />";
        echo "</form>";
    
        //formulaire pour supprimer une competence
        echo "<span>Supprimer une competence</span>";
        echo "<form action='script_php/supprCompetence.php' method='post'>";
            echo "<select name='idCompASuppr'>";
                for ($i=1; $i<=$dernierID; $i++) {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
            echo "</select>";
            echo "<input type='submit' name='supprimerComp' value='supprimer' />";
        echo "</form>";
    
        //formulaire de modification de compétences
        echo "<span>Modifier une competence</span>";
        echo "<form action='script_php/modifCompetence.php' method='post' enctype='multipart/form-data'>";
            echo "<select name='idCompAChanger' id='idCompAChanger' onchange='actualisationModifCompetence()'>";
                for ($i=1; $i<=$dernierID; $i++) {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
            echo "</select>";
            echo "<input type='text' name='nouveauNomComp'  id='nouveauNomComp' />";
            echo "<select name='nouveauNiveauComp' id='nouveauNiveauComp'>";
                for ($i=1; $i<=5; $i++) {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
            echo "</select>";
            echo "<input type='hidden' name='MAX_FILE_SIZE' value='30000000' />";
            echo "<input type='file' name='nouveauVisuComp' id='nouveauVisuComp' accept='.jpg,.jpeg,.png' />";
            echo "<input type='submit' name='modifierComp' value='modifier' />";
        echo "</form>";
    echo "</div>";

    
    
    //on récupère les expériences
    $query1 = $cnx->query("SELECT * FROM experiences;");
    
    //section expériences
    echo "<div class='section'>";
        echo "<table>";
            echo"<caption>Tableau des experiences</caption>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>lieu</th>";
                echo "<th>date</th>";
                echo "<th>description</th>";
                echo "<th>ressenti</th>";
            echo "</tr>";
        while ($experiences = $query1->fetch()) {
            echo "<tr>";
                echo "<td>" . $experiences['id_exp'] . "</td>";
                echo "<td class='exp" . $experiences['id_exp'] . "'>" . $experiences['lieu'] . "</td>";
                echo "<td class='exp" . $experiences['id_exp'] . "'>" . $experiences['dateAffichage'] . "</td>";
                echo "<td class='exp" . $experiences['id_exp'] . "'>" . $experiences['description'] . "</td>";
                echo "<td class='exp" . $experiences['id_exp'] . "'>" . $experiences['ressenti'] . "</td>";
            echo "</tr>";
            $dernierID = $experiences['id_exp'];
        }
        echo "</table>";
    
        //formulaire pour ajouter une experience
        echo "<form action='script_php/ajoutExperience.php' method='post'>";
            echo "<input type='submit' name='ajouterExp' value='ajouter' />";
        echo "</form>";
    
        //formulaire pour supprimer une experience
        echo "<span>Supprimer une Experience</span>";
        echo "<form action='script_php/supprExperience.php' method='post'>";
            echo "<select name='idExpASuppr'>";
                for ($i=1; $i<=$dernierID; $i++) {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
            echo "</select>";
            echo "<input type='submit' name='supprimerExp' value='supprimer' />";
        echo "</form>";
    
        //formulaire de modification de experience
        echo "<span>Modifier une experience</span>";
        echo "<form action='script_php/modifExperience.php' method='post' enctype='multipart/form-data'>";
            echo "<select name='idExpAChanger' id='idExpAChanger' onchange='actualisationModifExperience()'>";
                for ($i=1; $i<=$dernierID; $i++) {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
            echo "</select>";
            echo "<input type='text' name='nouveauLieuExp'  id='nouveauLieuExp' />";
            echo "<input type='text' name='nouveauDateExp'  id='nouveauDateExp' />";
            echo "<input type='text' name='nouveauDescExp'  id='nouveauDescExp' />";
            echo "<input type='text' name='nouveauRessentiExp'  id='nouveauRessentiExp' />";
            echo "<input type='submit' name='modifierExp' value='modifier' />";
        echo "</form>";
    echo "</div>";
    
    
    //on récupère les diplomes
    $query2 = $cnx->query("SELECT * FROM diplomes;");
    
    //section expériences
    echo "<div class='section'>";
        echo "<table>";
            echo"<caption>Tableau des diplomes</caption>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>description</th>";
                echo "<th>date</th>";
            echo "</tr>";
        while ($diplomes = $query2->fetch()) {
            echo "<tr>";
                echo "<td>" . $diplomes['id_diplome'] . "</td>";
                echo "<td class='dip" . $diplomes['id_diplome'] . "'>" . $diplomes['description'] . "</td>";
                echo "<td class='dip" . $diplomes['id_diplome'] . "'>" . $diplomes['annee'] . "</td>";
            echo "</tr>";
            $dernierID = $diplomes['id_diplome'];
        }
        echo "</table>";
    
        //formulaire pour ajouter un diplome
        echo "<form action='script_php/ajoutDiplome.php' method='post'>";
            echo "<input type='submit' name='ajouterDip' value='ajouter' />";
        echo "</form>";
    
        //formulaire pour supprimer un diplome
        echo "<span>Supprimer un diplome</span>";
        echo "<form action='script_php/supprDiplome.php' method='post'>";
            echo "<select name='idDipASuppr'>";
                for ($i=1; $i<=$dernierID; $i++) {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
            echo "</select>";
            echo "<input type='submit' name='supprimerDip' value='supprimer' />";
        echo "</form>";
    
        //formulaire de modification de diplome
        echo "<span>Modifier un diplome</span>";
        echo "<form action='script_php/modifDiplome.php' method='post' enctype='multipart/form-data'>";
            echo "<select name='idDipAChanger' id='idDipAChanger' onchange='actualisationModifDiplome()'>";
                for ($i=1; $i<=$dernierID; $i++) {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
            echo "</select>";
            echo "<input type='text' name='nouveauDescDip'  id='nouveauDescDip' />";
            echo "<input type='text' name='nouveauDateDip'  id='nouveauDateDip' />";
            echo "<input type='submit' name='modifierDip' value='modifier' />";
        echo "</form>";
    echo "</div>";
    
    
    //on récupère les projets
    $query3 = $cnx->query("SELECT * FROM projets;");
    
    //section expériences
    echo "<div class='section'>";
        echo "<table>";
            echo"<caption>Tableau des projets</caption>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>nom</th>";
                echo "<th>description</th>";
                echo "<th>ressenti</th>";
                echo "<th>dateAffiche</th>";
            echo "</tr>";
        while ($projets = $query3->fetch()) {
            echo "<tr>";
                echo "<td>" . $projets['id_projet'] . "</td>";
                echo "<td class='pro" . $projets['id_projet'] . "'>" . $projets['nom'] . "</td>";
                echo "<td class='pro" . $projets['id_projet'] . "'>" . $projets['description'] . "</td>";
                echo "<td class='pro" . $projets['id_projet'] . "'>" . $projets['ressenti'] . "</td>";
                echo "<td class='pro" . $projets['id_projet'] . "'>" . $projets['dateAffiche'] . "</td>";
            echo "</tr>";
            $dernierID = $projets['id_projet'];
        }
        echo "</table>";
    
        //formulaire pour ajouter un projet
        echo "<form action='script_php/ajoutProjet.php' method='post'>";
            echo "<input type='submit' name='ajouterPro' value='ajouter' />";
        echo "</form>";
    
        //formulaire pour supprimer un projet
        echo "<span>Supprimer un projet</span>";
        echo "<form action='script_php/supprProjet.php' method='post'>";
            echo "<select name='idProASuppr'>";
                for ($i=1; $i<=$dernierID; $i++) {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
            echo "</select>";
            echo "<input type='submit' name='supprimerPro' value='supprimer' />";
        echo "</form>";
    
        //formulaire de modification de projets
        echo "<span>Modifier un projet</span>";
        echo "<form action='script_php/modifProjet.php' method='post' enctype='multipart/form-data'>";
            echo "<select name='idProAChanger' id='idProAChanger' onchange='actualisationModifProjet()'>";
                for ($i=1; $i<=$dernierID; $i++) {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
            echo "</select>";
            echo "<input type='text' name='nouveauNomPro'  id='nouveauNomPro' />";
            echo "<input type='text' name='nouveauDescPro'  id='nouveauDescPro' />";
            echo "<input type='text' name='nouveauRessentiPro'  id='nouveauRessentiPro' />";
            echo "<input type='text' name='nouveauDatePro'  id='nouveauDatePro' />";
            echo "<input type='submit' name='modifierPro' value='modifier' />";
        echo "</form>";
    echo "</div>";
    
    //fin du container
    echo "</div>";
    
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