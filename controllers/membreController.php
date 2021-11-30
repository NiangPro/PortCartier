<?php

if($_GET['page'] == "reservation"){
    require_once("views/membre/reservation.php");
}else{
    require_once("views/membre/document.php");
}