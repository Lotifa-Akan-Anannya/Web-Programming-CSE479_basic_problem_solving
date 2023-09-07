<?php
class User{
    private $username;
    private $email;
    private $password;
    
    public function setUsername($username){
        $this->username=$username;
    }
    public function getUsername(){
        return $this->username;
    }
    
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
    
    public function setPassword($password){
        $this->password=$password;
    }
    public function getPasseord(){
        return $this->password;
    }
    
    
    public function displayInfo(){
        echo"Username: ".$this->getUsername()."\n";
        echo"Email: ".$this->getEmail()."\n";
        
    }
}

$user =new User();
$user->setUsername("Anu_Akan");
$user->setEmail("anu@example.com");
$user->setPassword("my_secure_Password");

$user->displayInfo();
?>
