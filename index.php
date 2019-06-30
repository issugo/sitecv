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

<!-- roboto font -->
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
<!-- titre de la page -->
<title>Accueil | MARGAIL Maurin</title>

<body>
    <!-- barre de navigation -->
    <div class='navbar' id='navId'>

        <!-- lien de la navbar -->
        <ul class='side-nav'>
            <!-- item accueil -->
            <li class='nav-item'>
                <a href='index.php' class='nav-link'>Accueil</a>
            </li>
            <!-- item a propos -->
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
    <div id='sidebar' class='opacityMax'></div>
    
    <!-- titre -->
    <div class='center'>
        <h1 class='noMargin pt-5'>BIENVENU SUR LE SITE DE <strong>MARGAIL MAURIN</strong></h1>
    </div>
    
    <!-- carte 1 -->
    <div class='card' id='card1'>
        <div class='card-header'>
            <span>Qui suis-je ?</span>
        </div>
        <div class='card-body'>
            <p>Je suis MARGAIL Maurin, actuellement élève au campus <a rel='external' href='www.ynov.com/Aic-en-Provence'ynov Aix>Ynov Aix</a> et j'aspire à devenir développeur backend.</p>
        </div>
        <div class='card-footer'>
            <span>Si vous souhaitez en savoir plus :</span>
            <a href='a_propos.php'><button class='bg-blue suivant'>a propos</button></a>
        </div>
    </div>
    
    <!-- carte 2 -->
    <div class='card' id='card2'>
        <div class='card-header'>
            <span>On se connait ?!</span>
        </div>
        <div class='card-body'>
            <p>Si vous me connaissez déjà, vous voulez peut-être voir mes améliorations !</p>
        </div>
        <div class='card-footer'>
            <span>mon CV :</span>
            <a href='cv.php'><button class='bg-blue suivant'>cv</button></a>
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

<footer>

</footer>

</html>
