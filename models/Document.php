<?php
    class Document
    {
        private $codeDoc;
        private $titre;
        private $auteur;
        private $AnneePub;
        private $categorie;
        private $type;
        private $genre;
        private $description;
        private $isbn;      

        
        public function __construct($codeDoc, $titre, $auteur, $anneePub, $categorie, $type, $genre, $description, $isbn)
            {
                $this->codeDoc = $codeDoc;
                $this->titre = $titre;
                $this->auteur = $auteur;
                $this->anneePub = $anneePub;
                $this->categorie = $categorie;
                $this->type = $type;
                $this->genre = $genre;
                $this->isbn = $isbn;
            }

        // les getters

        public function Code(){return $this->code;}

        public function Titre(){return $this->titre;}

        public function Auteur(){return $this->auteur;}

        public function AnneePub(){return $this->anneePub;}

        public function Categorie(){return $this->categorie;}

        public function Type(){return $this->type;}

        public function Genre(){return $this->genre;}

        public function Isbn(){return $this->isbn;}
    }
?>