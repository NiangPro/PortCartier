<?php

$employes = $db->employesAndAdmins();

if($_GET['page'] == "membres"){
    require_once("views/admin/membre.php");
}elseif($_GET['page'] == "employes"){
    require_once("views/admin/employe.php");
}elseif($_GET['page'] == "pret"){
    require_once("views/admin/pret.php");
}elseif($_GET['page'] == "reservation"){
    require_once("views/admin/reservation.php");
}else{
    require_once("views/admin/document.php");
}