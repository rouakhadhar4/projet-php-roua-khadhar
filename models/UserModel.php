
<?php
class UserModel {
    private $name, $password, $email, $pdo;

    function __construct($name = "", $password = "", $email = "", $pdo = null) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->pdo = $pdo;
    }

    public function getName() {
        return $this->name;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }
    public function authenticate($username, $password) {
        try {
          
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE name = :username");
    
      
            $stmt->bindParam(':username', $username);
    
        
            $stmt->execute();
    
        
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
          
            if ($user && password_verify($password, $user['password'])) {
                return true; 
            } else {
                return false; 
            }
        } catch (PDOException $e) {
            
            throw new Exception("Authentication failed: " . $e->getMessage());
        }
    }
    

    function isUserRegistered($username) {
        try {
            $sql = "SELECT COUNT(*) FROM users WHERE name = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($username));

            $count = $stmt->fetchColumn();

            return $count > 0;
        } catch (PDOException $e) {
         
            throw new Exception("Error checking user registration: " . $e->getMessage());
        }
    }
}
?>
