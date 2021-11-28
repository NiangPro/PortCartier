<?php

    session_start();
    require_once("models/Database.php");
    require_once("views/includes/_header.php");

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
