<?php
class Article{
    // atributs
    private $id_art; 
    private $mon_art; 
    private $content_art; 
    // constructor
    public function __constructor($id_art,$nom_art,$content_art){
        $this->$id_art = $id_art;
        $this->$nom_art = $nom_art;
        $this->$content_art = $content_art;
    }
    // getteur setteur

    // ID ART
    public function getIdArt():int{
        return $this->$id_art;
    }
    public function setIdArt($id_art):void{
        $this->$id_art = $id_art;
    }

    // NOM ART
    public function getNomArt():string{
        return $this->$nom_art;
    }
    public function setNomArt($nom_art):void{
        $this->$nom_art = $nom_art;
    }

    // CONTENT ART
    public function getContentArt():string{
        return $this->$content_art;
    }
    public function setContentArt($content_art):void{
        $this->$content_art = $content_art;
    }
    // methodes
    public function showAllArticle($bdd){
        try {
            $req = $bdd->prepare('SELECT * FROM article');
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur : ' .$e->getMessage());
        }
    }
}


?>