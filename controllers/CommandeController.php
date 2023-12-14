<?php
include_once('../models/Commande.php');
include_once('../database/config.php');

class CommandeController extends Connexion
{
    function __construct()
    {
        parent::__construct();
    }
    function insertCommande(Commande $commande)
    {
        
        $query = "INSERT INTO commande (nomArticle, nom, prenom, ville, telephone, cartepostale, dateCommande, Qte, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
    
        $params = array(
            $commande->getNomArticle(),
            $commande->getNom(),
            $commande->getPrenom(),
            $commande->getVille(),
            $commande->getTelephone(),
            $commande->getCartePostale(),
            $commande->getDateCommande(),
            $commande->getQte(),
            $commande->getStatus() 
        );
    
        try {
            $result = $res->execute($params);
    
            if ($result) {
                echo "Commande ajoutée avec succès.";
            } else {
                echo "Erreur d'exécution de la requête : " . implode(" - ", $res->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Erreur d'exécution de la requête : " . $e->getMessage();
        }
    }
    function listeCommandes()
    {
        $query = "SELECT * FROM commande";
        $res = $this->pdo->query($query);

        return $res;
    }
    function deleteCommande($idCommande)
{
    $query = "DELETE FROM commande WHERE idCommande = ?";
    $res = $this->pdo->prepare($query);

    try {
        $result = $res->execute(array($idCommande));

        if ($result) {
            echo "Commande supprimée avec succès.";
        } else {
            echo "Erreur d'exécution de la requête : " . implode(" - ", $res->errorInfo());
        }
    } catch (PDOException $e) {
        echo "Erreur d'exécution de la requête : " . $e->getMessage();
    }
}

    
}    