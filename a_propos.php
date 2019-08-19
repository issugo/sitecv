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

<!-- titre de la page -->
<title>A_propos | MARGAIL Maurin</title>

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

    <!-- titre -->
    <div class='center'>
        <h1 class='noMargin pt-5'>A PROPOS DE MOI</h1>
    </div>

    <!-- carte 1 -->
    <div class='card' id='card1'>
        <div class='card-header'>
            <span>Des projets ?</span>
        </div>
        <div class='card-body'>
            <p>Lors de ma "scolarité" au sein d'ynov, j'ai eu l'occasion de traiter et d'accomplir différents projets, qu'il soit lier à l'enseignement ou horzs enseignement au sein de mon association.</p>
        </div>
        <div class='card-footer'>
            <span>Si vous voir mes projets :</span>
            <a href='projets.php'><button class='bg-blue suivant'>projets</button></a>
        </div>
    </div>

    <!-- carte 2 -->
    <div class='card' id='card2'>
        <div class='card-header'>
            <span>Curriculum vitae</span>
        </div>
        <div class='card-body'>
            <p>Peut-être avez-vous réussi à me cerner, ou alors vous préferer avoir un résumé de mes compétences et expériences, je vous invite donc à aller sur ma page CV</p>
        </div>
        <div class='card-footer'>
            <span>CV :</span>
            <a href='cv.php'><button class='bg-blue suivant'>CV</button></a>
        </div>
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
