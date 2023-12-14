
<?php
include_once('../models/Article.php');
include_once('../database/config.php');

class ArticleController extends Connexion
{
    function __construct()
    {
        parent::__construct();
    }

    function insert(Article $c)
    {
        $query = "INSERT INTO article (idArticle, nom, description, image, prix, qtestock) VALUES (?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);

        $array = array($c->getIdArticle(), $c->getNom(), $c->getDescription(), $c->getImage(), $c->getPrix(), $c->getQtStock());
        return $res->execute($array);
    }

    function getArticle($id)
    {
        $query = "SELECT * FROM article WHERE idArticle = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array = $res->fetch();
        return $array;
    }

    function delete($idArticle)
    {
        $query = "DELETE FROM article WHERE idArticle=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idArticle));
    }
    

    function liste()
    {
        $query = "SELECT * FROM article";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function modifierArticle(Article $c)
    {
        try {
            $sql = "UPDATE article SET nom=?, description=?, image=?, prix=?, qtestock=? WHERE idArticle=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($c->getNom(), $c->getDescription(), $c->getImage(), $c->getPrix(), $c->getQtStock(), $c->getIdArticle()));
    
            return $stmt->rowCount(); 
        } catch (PDOException $e) {
            return false; 
        }
    }
    

    public function recherche($category, $value)
    {
        try {
          
            $query = "SELECT * FROM article WHERE $category LIKE :value";
            $stmt = $this->pdo->prepare($query);
  
            $value = '%' . $value . '%';
    
            $stmt->bindParam(':value', $value);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur de base de données : " . $e->getMessage();
            return false;
        }
    }
    
  


function liste_id($orderBy = '') {
    $query = "SELECT * FROM article $orderBy";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
    
}



    public function getArticleById($idArticle) {
        
       

        $articleData = $this->fetchArticleDataById($idArticle);

        if ($articleData) {
           
            $article = new Article(
                $articleData['id'],         
                $articleData['nom'],
                $articleData['description'],
                $articleData['image'],
                $articleData['prix'],
                $articleData['qtestock']
            );

            return $article;
        } else {
         
            return null;
        }
    }

    
    private function fetchArticleDataById($idArticle) {
      
        $databaseConnection = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
        $statement = $databaseConnection->prepare('SELECT * FROM articles WHERE id = :id');
        $statement->bindParam(':id', $idArticle);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }
  
public function getArticleInfo($articleId) {
   
    $articleInfo = array(
        'idArticle' => $articleId,
        'nom' => 'Article Name',  
        'description' => 'Article Description', 
     
    );

    return $articleInfo;
}

}

?>



