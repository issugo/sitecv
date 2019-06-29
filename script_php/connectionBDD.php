<?php
    try {
        $dbparam = parse_ini_file('DB.ini', true);
        $host = $dbparam['loginBDD']['server'];
        $name = $dbparam['loginBDD']['database'];
        $login = $dbparam['loginBDD']['username'];
        $pass = $dbparam['loginBDD']['password'];
        
        $cnx = new PDO("mysql:host=$host;dbname=$name","$login","$pass");
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>