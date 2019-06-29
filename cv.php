<!DOCTYPE html>
<html>
<meta charset='utf-8'>
<meta description='maurin-margail.ovh est le site présentant maurin margail, étudiant au campus ynov Aix, ainsi que ses projets et ses compétences'>
<meta keywords='maurin, margail, MAURIN, MARGAIL, ynov, étudiant, développeur, junior, présentation, accueil'>

<!-- font awesome -->
<script src="https://kit.fontawesome.com/092f13097c.js"></script>

<!-- style général -->
<link rel='stylesheet' href='css/style.css'>

<!-- style navbar -->
<link rel='stylesheet' href='css/navbar.css'>
    
<!-- style cv -->
<link rel='stylesheet' href='css/cv.css'>
    
<!-- titre de la page -->
<title>CV | MARGAIL Maurin</title>

<body>
    <!-- barre de navigation -->
    <div class='navbar' id='navId'>

        <!-- lien de la navbar -->
        <ul class='side-nav'>
            <!-- item accueil -->
            <li class='nav-item'>
                <a href='index.php' class='nav-link'>Accueil</a>
            </li>
            <!-- item a proposl -->
            <li class='nav-item'>
                <a href='a_propos.php' class='nav-link'>A propos</a>
            </li>
            <!-- item projets -->
            <li class='nav-item'>
                <a href='projets.php' class='nav-link'>Projets</a>
            </li>
            <!-- item CV -->
            <li class='nav-item'>
                <a href='cv.php' class='nav-link'>CV</a>
            </li>
            <!-- item tarifs -->
            <li class='nav-item'>
                <a href='tarifs.php' class='nav-link'>Tarifs</a>
            </li>
            <!-- item contact -->
            <li class='nav-item'>
                <a href='contact.php' class='nav-link'>Contact</a>
            </li>
        </ul>

    </div>
    <div id='burger-button'>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div id='sidebar'></div>
    
    <!-- titre -->
    <div class='center'>
        <h1 class='noMargin pt-5 pb-5'>MON CV</h1>
    </div>
    
    <!-- section du cv -->
    <div class='container'>
        <!-- on include la BDD -->
        <?php include 'script_php/connectionBDD.php'; ?>
        <!-- première partie -->
        <div class='section' id='section1'>
            <img src='img/maurin.jpg' alt='maurin tête' id='imgProfil'>
            <span>MARGAIL MAURIN</span>
            <p>Bonjour, je m'appelle Maurin MARGAIL, j'adore développer et faire du sport. J'aime aussi apprendre régulièrement à utiliser de nouvelles techologies.</p>
        </div>
        
        <!-- deuxième partie -->
        <div class='section' id='section2'>
            <?php
            
            $query0 = $cnx->query("SELECT * FROM competences;");
            while ($data0 = $query0->fetch()) {
                echo "<div class='un'>";
                echo "<img src='" .$data0['lien_visu'] ."' alt='" . $data0['nom'] . "'>";
                for ($i=0; $i<intval($data0['niveau']); $i++) {
                    echo "<i class='far fa-thumbs-up deux'></i>";
                }
                for ($j=0; $j<5-(intval($data0['niveau']));$j++) {
                    echo "<i class='far fa-thumbs-down deux'></i>";
                }
                echo "</div>";
            }
            
            ?>
        </div>
        
        <!-- troisième partie -->
        <div class='section' id='section3'>
            <h4>Projets :</h4>
        </div>
    </div>

    <!-- footer -->
    <footer>

    </footer>

    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <!-- script navbar -->
    <script src='js/navbar.js'></script>
</body>

</html>
