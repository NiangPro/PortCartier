<?php

    session_start();

    // les models ou classes
    require_once("models/Database.php");


    //connexion globale a la base de donnees la variable db est globale
    // $db = new Database("biblio");

    // routeur et corps du site
    if (isset($_GET['page'])) {
         // entête de page du site
         require_once("views/includes/_header.php");

        switch ($_GET['page']) {
            case 'home':
                require_once('controllers/loginController.php');
                break;
            default:
                require_once('controllers/loginController.php');    
        }
        // pied de page du site
        require_once("views/includes/_footer.php");
    }else{
        require_once('controllers/loginController.php');
    }


    