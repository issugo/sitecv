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
    
<!-- style blog -->
<link rel='stylesheet' href='css/blog.css'>
    
<!-- titre de la page -->
<title>Blog | MARGAIL Maurin</title>

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
            <!-- item blog -->
            <li class='nav-item'>
                <a href='blog.php' class='nav-link'>blog</a>
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
    
    <div class='center'>
        <h1 class='noMargin pt-5 pb-5'>BLOG</h1>
    </div>
    
    <!--div parente de tout -->
    <div class='container'>
        <!-- on include la BDD -->
        <?php include 'script_php/connectionBDD.php'; ?>
        
        <!-- on débute la timeline -->
        <div class='timeline'>
            <!-- on génère une section par projets -->
            <?php
        
            $query = $cnx->query("SELECT * FROM articles;");
            $bool = 0;
            while ($data = $query->fetch()) {
                if ($bool == 0) {
                    echo "<div class='bloc right'>";
                        echo "<div class='content'>";
                            echo "<h2>" . $data['titre'] . "</h2>";
                            echo "<p>" . $data['texte'] . "</p>";
                        echo "</div>";
                    echo "</div>";
                    $bool = 1;
                } else {
                    if ($bool == 1) {
                        echo "<div class='bloc left'>";
                            echo "<div class='content'>";
                                echo "<h2>" . $data['titre'] . "</h2>";
                                echo "<p>" . $data['texte'] . "</p>";
                            echo "</div>";
                        echo "</div>";
                        $bool = 0;
                    }
                }
                
            }

            ?>
        <!-- fin timeline -->
        </div>
        
    <!-- fin du container -->
    </div>
    
    <!-- footer -->
    <div class='footer'>
        <div class='footer2'>
            <span>Plan du site :</span>
            <span class='tirets'></span>
            <a href='index.php'>Accueil</a>
            <a href='a_propos.php'>A propos</a>
            <a href='projets.php'>Projets</a>
            <a href='cv.php'>CV</a>
            <a href='contact.php'>Contact</a>
            <a href='blog.php'>Blog</a>
        </div>
    </div>

    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <!-- script navbar -->
    <script src='js/navbar.js'></script>
</body>

</html>
