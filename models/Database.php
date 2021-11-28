<?php

class ClassName
{
    private $db;
    
    public function __construct($dbname = "biblio"){
        try {           
            $this->db = new PDO("mysql:host=localhost;dbname=".$this->dbname, "root", "");
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function login($code, $mdp){
        try {           
            $req = $this->db->prepare("SELECT * FROM user WHERE code = :code AND mpd = :mdp");
            $req->execute([
                "code" => $code,
                "mdp" => $mdp
            ]);

            return $req->fetch();

        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }
}
