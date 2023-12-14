
<?php
include_once('../models/UserModel.php');
include_once('../database/config.php');

class AuthController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(UserModel $c) {
        try {
            $query = "INSERT INTO users (name, password, email) VALUES (?, ?, ?)";
            $res = $this->pdo->prepare($query);
    
            $aryy = array($c->getName(), $c->getPassword(), $c->getEmail());
            $success = $res->execute($aryy);
    
            if ($success) {
                return "User inserted successfully.";
            } else {
                $errorInfo = $res->errorInfo();
                return "Error inserting user. Database Error: " . $errorInfo[2];
            }
        } catch (PDOException $e) {
            return "Exception: " . $e->getMessage();
        }
    }
    public function login($username, $password) {
       
        $userModel = new UserModel();

        
        $authenticated = $userModel->authenticate($username, $password);

        return $authenticated;
    }
    
}


    


