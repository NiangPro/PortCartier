<?php


if (isset($_POST['login'])) {
    extract($_POST);
    $user = $db->login($code, $mdp);

    if ($user) {
        $_SESSION['user'] = $user;
        if($user->type === "admin"){
            return header('Location:?page=document');
        }elseif($user->type === "membre"){
            return header('Location:?page=document');
        }else{
            return header('Location:?page=document membre');
        }
    }else{
        $_SESSION['errors']['msg'][] = "Code ou Mot de passe incorrect";
    }
}
require_once("views/login.php");
