<!DOCTYPE html>
<html>
<meta charset='utf-8'>
<meta description='maurin-margail.ovh est le site présentant maurin margail, étudiant au campus ynov Aix, ainsi que ses projets et ses compétences'>
<meta keywords='maurin, margail, MAURIN, MARGAIL, ynov, étudiant, développeur, junior, présentation, accueil'>

<title>contact | MARGAIL Maurin</title>

<!-- font awesome -->
<script src="https://kit.fontawesome.com/092f13097c.js"></script>

<!-- style général -->
<link rel='stylesheet' href='css/style.css'>

<!-- style navbar -->
<link rel='stylesheet' href='css/navbar.css'>

<!-- style contact form -->
<link rel='stylesheet' href='css/contact.css'>

<body>
    <!-- barre de navigation -->
    <nav class='navbar' id='navId'>

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

    </nav>
    <!-- bouton d'ouverture du menu -->
    <div id='burger-button'>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- sidebar -->
    <div id='sidebar'></div>

    <!-- div vide pour l'alert -->
    <div id="alertPanel"></div>

    <!-- formulaire de contact -->
    <div id="wrapper">
        <form name="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="clearfix">
            <label for="nom" class="iconic user">Nom<span class="required">*</span></label>
            <input type="text" name="nom" id="nom" required="required" placeholder="Quel est votre nom?" />
            <label for="email" class="iconic mail-alt">E-mail<span class="required">*</span></label>
            <input type="email" name="email" id="mail" required="required" placeholder="Quel est votre email?" />
            <label for="message" class="iconic messsage">Message<span class="required">*</span></label>
            <textarea name="message" id="message" required="required" placeholder="Quel est votre question?"></textarea>
            <p class="indication"> Tous les champs avec une <span class="required">*</span> sont nécessaire</p>
            <input type="submit" name='submit' value=" ★ envoyez l'e-mail !" />
        </form>
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

<?php
    if(isset($_POST ['submit'])) {
        //on récupère les infos
        $nom = htmlentities($_POST['nom']);
        $email = htmlentities($_POST['email']);
        $message = htmlentities($_POST['message']);
        //on envoie le mail
        mail("maurin.margail@ynov.com", "question depuis mon site", "question de $nom, $email\n$message");
        //on prévient de l'envoie du mail
        echo "<script>alert('Votre mail a bien été envoyé')</script>";
    }
?>
