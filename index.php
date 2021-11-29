<?php

    session_start();

    // les models ou classes
    require_once("models/Database.php");


    //connexion globale a la base de donnees la variable db est globale
    $db = new Database("biblio");

    // routeur et corps du site
    if (isset($_GET['page']) && $_GET['page'] != null) {
         // entête de page du site
         require_once("views/includes/_header.php");

        switch ($_GET['page']) {
            case 'document':
                require_once('controllers/adminController.php');
                break;
            case 'document membre':
                require_once('controllers/membreController.php');
                break;
            case 'logout':
                require_once('controllers/logoutController.php');
                break;
            default:
                require_once('controllers/loginController.php');    
        }
        // pied de page du site
    }else{
        require_once("views/includes/_enteteLogin.php");
        
        require_once('controllers/loginController.php');
    }
    require_once("views/includes/_footer.php");


    