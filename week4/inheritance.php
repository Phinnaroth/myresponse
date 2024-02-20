<?php

class User {
    protected $id;
    protected $username;
    protected $email;

    public function __construct($id, $username, $email) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }
    public function displayInfo() 
    {
        echo "User Information: Username:".($this->username)."<br>"."Id:".$this->id."<br>"."Email:".($this->email)."<br/>";
    }
    
}

class Admin extends User {
    private $isAdmin;

    public function __construct($id, $username, $email, $isAdmin) {
        parent::__construct($id, $username, $email);
        $this->isAdmin = $isAdmin;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Admin Information: Admin: " . ($this->isAdmin ? "Yes" : "No") . "<br>";
    }
}

$user1 = new User(1, "Jennie", "jennie@cadt.com");
$user1->displayInfo();

$admin1 = new Admin(2, "Rose", "admin@cadt.com", true);
$admin1->displayInfo();

?>