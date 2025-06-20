<?php
class User {
    public $name;
    public $email;
    
    
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
        
    }
}

class Admin extends User {
    public $role;
    
    
    public function __construct($name, $email, $role) {
        parent::__construct($name, $email); 
        $this->role = $role;
        
    }
}


$admin = new Admin("राहुल", "rahul@example.com", "admin");

?>