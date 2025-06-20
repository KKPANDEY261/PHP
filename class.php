<?php
class User {
    // Properties 
    public $name;        
    protected $email;      
    private $password;     
    
    // Constructor
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}

$user1 = new User("rahul", "rahul@gmail.com", "12345");


echo $user1->name; 
print_r($user1);
?>