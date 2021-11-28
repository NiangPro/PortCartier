<?php

    session_start();
    require_once("models/Database.php");
    require_once("views/includes/_header.php");

    //connexion globale a la base de donnees la variable db est globale
    $db = new Database();

    // routeur
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'login':
                require_once('controllers/loginController.php');
                break;
                
            }
    }else{
        require_once('controllers/loginController.php');
    }





    require_once("views/includes/_footer.php");
