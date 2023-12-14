<?php

class article
{
    private $idArticle, $nom, $description, $image, $prix, $qtestock;

    function __construct($idArticle = "", $nom = "", $description = "", $image = "", $prix = "", $qtestock = "")
    {
        $this->idArticle = $idArticle;
        $this->nom = $nom;
        $this->description = $description;
        $this->image = $image;
        $this->prix = $prix;
        $this->qtestock = $qtestock;
    }

    public function getIdArticle()
    {
        return $this->idArticle;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getQtStock()
    {
        return $this->qtestock;
    }

    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function setQtStock($qtestock)
    {
        $this->qtestock = $qtestock;
    }
    public function getQteStock() {
        return $this->qtestock;
    }
    
}
  


?>
