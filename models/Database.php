<?php

class Database
{
    private $db;
    
    public function __construct($dbname = "biblio"){
        try {           
            $this->db = new PDO("mysql:host=localhost;dbname=".$dbname, "root", "");
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function login($code, $mdp){
        try {           
            $req = $this->db->prepare("SELECT * FROM user WHERE code = :code AND mdp = :mdp");
            $req->execute([
                "code" => $code,
                "mdp" => $mdp
            ]);

            return $req->fetch();

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function employesAndAdmins(){
        try {           
            $req = $this->db->prepare("SELECT * FROM user WHERE type = 'admin' OR type = 'employe'");
            $req->execute();

            return $req->fetchAll();

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function membres(){
        try {           
            $req = $this->db->prepare("SELECT * FROM user WHERE type = 'membre' ORDER BY prenom ASC");
            $req->execute();

            return $req->fetchAll();

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function documents(){
        try {           
            $req = $this->db->prepare("SELECT * FROM document  ORDER BY categorie ASC");
            $req->execute();

            return $req->fetchAll();

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function reservations(){
        try {           
            $req = $this->db->prepare("SELECT * FROM reservation  ORDER BY dateReserv DESC");
            $req->execute();

            return $req->fetchAll();

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function reservationsMembre($codeMembre){
        try {           
            $req = $this->db->prepare("SELECT * FROM reservation  WHERE codeMembre = :codeMembre  ORDER BY dateReserv DESC");
            $req->execute(['codeMembre'=>$codeMembre]);

            return $req->fetchAll();

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function prets(){
        try {           
            $req = $this->db->prepare("SELECT * FROM pret  ORDER BY dateRetour DESC");
            $req->execute();

            return $req->fetchAll();

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }
    public function pretsMembre($codeMembre){
        try {           
            $req = $this->db->prepare("SELECT * FROM pret WHERE codeMembre = :codeMembre  ORDER BY dateRetour DESC");
            $req->execute(['codeMembre'=>$codeMembre]);

            return $req->fetchAll();

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function codeAlreadyGet($code){
        try {           
            $req = $this->db->prepare("SELECT * FROM user WHERE code = :code");
            $req->execute(['code'=>$code]);

            return $req->fetch();

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function docCodeAlreadyGet($code){
        try {           
            $req = $this->db->prepare("SELECT * FROM document WHERE codeDoc = :codeDoc");
            $req->execute(['codeDoc'=>$code]);

            return $req->fetch();

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function addUser(User $user){
        try {           
            $req = $this->db->prepare("INSERT INTO `user` 
            VALUES(:code, :prenom, :nom, :adresse, :type, :courriel, :tel, :mdp, :codePostal, :ville, :province)");
            return $req->execute([
                "code" => $user->Code(),
                "prenom" => $user->Prenom(),
                "nom" => $user->Nom(),
                "adresse" => $user->Adresse(),
                "type" => $user->Type(),
                "courriel" => $user->Courriel(),
                "tel" => $user->Tel(),
                "mdp" => $user->Mdp(),
                "codePostal" => $user->CodePostal(),
                "ville" => $user->Ville(),
                "province" => $user->Province()
            ]);

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function addDocument(Document $doc){
        try {           
            $req = $this->db->prepare("INSERT INTO `document` 
            VALUES(:codeDoc, :titre, :auteur, :anneePub, :categorie, :type, :genre, :description, :isbn)");
            return $req->execute([
                "codeDoc" => $doc->CodeDoc(),
                "titre" => $doc->Titre(),
                "auteur" => $doc->Auteur(),
                "anneePub" => $doc->AnneePub(),
                "categorie" => $doc->Categorie(),
                "type" => $doc->Type(),
                "genre" => $doc->Genre(),
                "description" => $doc->Description(),
                "isbn" => $doc->Isbn()
            ]);

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function addReservation(Reservation $res){
        try {           
            $req = $this->db->prepare("INSERT INTO `reservation` 
            VALUES(null, :codeMembre,:codeDoc,  :dateReserv)");
            return $req->execute([
                "codeDoc" => $res->CodeDoc(),
                "codeMembre" => $res->CodeMembre(),
                "dateReserv" => $res->DateReserv()
            ]);

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function addPret(Pret $p){
        try {           
            $req = $this->db->prepare("INSERT INTO `reservation` 
            VALUES(null, :codeMembre,:codeDoc,  :dateReserv, :dateRetour)");
            return $req->execute([
                "codeDoc" => $p->CodeDoc(),
                "codeMembre" => $p->CodeMembre(),
                "datePret" => $p->DatePret(),
                "dateRetour" => $p->DateRetour()
            ]);

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }
}
