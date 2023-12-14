<?
class Commande
{
    private $idCommande;
    private $nomArticle;
    private $nom;
    private $prenom;
    private $ville;
    private $telephone;
    private $cartepostale;
    private $dateCommande;
    private $Qte;
    private $status;

    public function __construct($idCommande = "", $nomArticle = "", $nom = "", $prenom = "", $ville = "", $telephone = "", $cartepostale = "", $dateCommande = "", $Qte = 0, $status = "")
    {
        $this->idCommande = $idCommande;
        $this->nomArticle = $nomArticle;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ville = $ville;
        $this->telephone = $telephone;
        $this->cartepostale = $cartepostale;
        $this->dateCommande = $dateCommande;
        $this->Qte = $Qte;
        $this->status = $status;
    }

   

    public function getIdCommande()
    {
        return $this->idCommande;
    }

    public function getNomArticle()
    {
        return $this->nomArticle;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function getCartePostale()
    {
        return $this->cartepostale;
    }

    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    public function getQte()
    {
        return $this->Qte;
    }

    public function getStatus()
    {
        return $this->status;
    }

  
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;
    }

   
}
