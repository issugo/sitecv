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
        
        <!-- première partie description -->
        <div class='section' id='section1'>
            <h3>MOI</h3>
            <img src='img/maurin.jpg' alt='maurin tête' id='imgProfil'>
            <span>MARGAIL MAURIN</span>
            <p>Bonjour, je m'appelle Maurin MARGAIL, j'adore développer et faire du sport. J'aime aussi apprendre régulièrement à utiliser de nouvelles techologies.</p>
        </div>
        
        <!-- deuxième partie  competences -->
        <div class='section' id='section2'>
            <h3>COMPÉTENCES</h3>
            <?php
            
            $query0 = $cnx->query("SELECT * FROM competences;");
            while ($data0 = $query0->fetch()) {
                echo "<div class='un'>";
                echo "<img src='" .$data0['lien_visu'] ."' alt='" . $data0['nom'] . "'>";
                for ($i=0; $i<intval($data0['niveau']); $i++) {
                    echo "<i class='fas fa-star deux'></i>";
                }
                for ($j=0; $j<5-(intval($data0['niveau']));$j++) {
                    echo "<i class='far fa-star deux'></i>";
                }
                echo "</div>";
            }
            
            ?>
        </div>
        
        <!-- troisième partie  experiences-->
        <div class='section' id='section3'>
            <h3>EXPERIENCES</h3>
            <?php
            $query1 = $cnx->query("SELECT * FROM experiences;");
            while ($data1 = $query1->fetch()) {
                echo "<div>";
                    echo $data1['lieu'];
                    echo $data1['dateAffichage'];
                    echo $data1['description'];
                    echo $data1['ressenti'];
                echo "</div>";
            }
            ?>
        </div>
        
        <!-- quatrième partie  diplomes-->
        <div class='section' id='section4'>
            <h3>DIPLOMES</h3>
            <?php
            $query2 = $cnx->query("SELECT * FROM diplomes ORDER BY annee DESC;");
            while ($data2 = $query2->fetch()) {
                echo "<div>";
                    echo $data2['annee'];
                    echo " : ";
                    echo $data2['description'];
                echo "</div>";
            }
            ?>
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
