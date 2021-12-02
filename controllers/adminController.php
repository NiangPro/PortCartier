<?php


// ajout employe
if (isset($_POST['addEmploye']) || isset($_POST['addMembre'])) {
    extract($_POST);
    
    if (not_empty(['prenom', 'nom', 'adresse', 'courriel', 'ville', 'province', 'code', 'mdp', 'tel', 'type'])) {
        $existingCode = $db->codeAlreadyGet($code);
        if ($existingCode) {
            set_flash("Ce code existe déjà");
        } else {
            $user = new User($code,$prenom, $nom, $adresse, $type, $tel, $courriel, $mdp, $ville, $codePostal, $province);
            if ($db->addUser($user)) {
                set_flash("Ajout avec succès", "success");
                return $_GET['page'] == 'membres' ? header('Location: ?page=membres') : header('Location: ?page=membres');
            } else {
                set_flash("Erreur d'ajout");
            }
            clear_input_data();
            
        }
        
    }else{
        set_flash("Veuillez remplir tous les champs");
    }
    save_input_data();
    
}

if (isset($_POST['addDocument'])) {
    extract($_POST);
    save_input_data();
    if (not_empty(['codeDoc', 'titre', 'auteur', 'anneePub', 'genre', 'type', 'description', 'categorie'])) {
        if ($categorie == "Roman" && empty($isbn)) {
            set_flash("Veuillez saisir le champ isbn");
        } else {
            $existingCode = $db->docCodeAlreadyGet($codeDoc);
            if ($existingCode) {
                set_flash("Le code du document existe déjà");
            } else {
                $doc = new Document($codeDoc, $titre, $auteur, $anneePub, $categorie, $type, $genre, $description, $isbn);
                if ($db->addDocument($doc)) {
                    set_flash("Ajout document avec succès", "success");
                }else{
                    set_flash("Erreur d'ajout");
                }
                clear_input_data();
            }
        }
        
    } else {
        set_flash("Veuillez remplir tous les champs");
    }
}


if (isset($_POST['addReservation'])) {
    extract($_POST);
    save_input_data();
    if (not_empty(['codeDoc', 'codeMembre', 'dateReserv'])) {
        $reserv = new Reservation($codeMembre, $codeDoc, $dateReserv);
        if ($db->addReservation($reserv)) {
            set_flash("Ajout reservation avec succès", "success");
        }else{
            set_flash("Erreur d'ajout");
        }
        clear_input_data();
        
    } else {
        set_flash("Veuillez remplir tous les champs");
    }

}



$employes = $db->employesAndAdmins();
$membres = $db->membres();
$documents = $db->documents();
$reservations = $db->reservations();
$prets = $db->prets();



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