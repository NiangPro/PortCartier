<?php

<<<<<<< HEAD
<<<<<<< HEAD
if($_GET['page'] == "reservation"){
=======

=======
>>>>>>> Mamyta
// Traitement des requetes







// Redirection des pages
if($_GET['page'] == "pret membre"){
    require_once("views/membre/pret.php");
}elseif($_GET['page'] == "reservation membre"){
<<<<<<< HEAD
>>>>>>> niangpro
=======
>>>>>>> Mamyta
    require_once("views/membre/reservation.php");
}else{
    require_once("views/membre/document.php");
}