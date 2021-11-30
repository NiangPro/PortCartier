<?php

if($_GET['page'] == "membres"){
    require_once("views/admin/membre.php");
}elseif($_GET['page'] == "employes"){
    require_once("views/admin/employe.php");
}else{
    require_once("views/admin/document.php");
}