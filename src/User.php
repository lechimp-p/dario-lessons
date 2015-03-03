<?php

/**
 * @file User.php
 *
 * @brief Contains the class "User" and defines its structure and behaviour.
 */

/**
 * @class User 
 *
 * @brief A User represents a person that has access via its account.
 *
 * The User-class is the class that represents the person accessing the system.
 * 0, 1 or multiple ToDoLists can be associated with a User. A Users rights and
 * settings are regulated by this class.
 */
class User {
    /**
     * @brief This is the constructor function of the User-class
     *
     * The construct-function needs 1 UserId, 1 username, 1 password and 1 email
     * as arguments to be executed and create a new User-object.
     *
     * @param UserId         $id
     * @param string         $username
     * @param Password       $password
     * @param EMail          $email
     */ 
    public function __construct(UserId $id, $username, Password $password, EMail $email) {

    }
	
    /**
     * @brief Getter for the Username of a User-object.
     *
     * The getUsername-function returns the Username of a User-object.
     *
     * @return string 
     */ 	
    public function getUsername() {
		
    }
    
    /**
     * @brief Setter for the Username of a User-object.
     *
     * The setUsername-function needs a username as argument and assigns it to the 
     * User-object.
     *
     * @param  string   $username
     * @return $this
     */ 
    public function setUsername($username) {
        
    }
    
    /**
     * @brief Getter for the EMail of a User-object.
     *
     * The getEMail-function returns the EMail of a User-object.
     *
     * @return string (??)
     */ 	    
    public function getEMail() {
        
    }
    
    /**
     * @brief Setter for the EMail of a User-object.
     *
     * The setEMail-function needs an EMail-object as argument and assigns its value to the User-object.
     *
     * @param  EMail   $email    
     * @return $this
     */ 	    
    public function setEMail(EMail $email) {
        
    }
    
    /**
     * @brief Getter for the Password of a User-object.
     *
     * The getPassword-function returns the Password of a User-object.
     *
     * @return string (??)
     */ 	    
    public function getPassword() {
        
    }   

    /**
     * @brief Setter for the Password of a User-object.
     *
     * The setPassword-function needs a Password-object as argument and assigns its value to the User-object.
     *
     * @param  Password   $password    
     * @return $this
     */ 	    
    public function setPassword(Password $password) {
        
    }    
}

/**
 * @class UserID
 *
 * @brief Represents an id of a User.
 *
 * Wraps around integer.
 */
class UserId {
    protected $id; // int    

    /**
     * @param int $id
     */
    public function __construct($id) {
        // ToDo: insert type check on id
        $this->id = $id;
    }

    /**
     * @brief Get the wrapped integer value.
     */
    public function value() {
        return $this->id;
    } 
}

/**
 * @class Password
 *
 * @brief Class to wrap and access a Users password.
 *
 * Wraps around string.
 */
class Password {
    protected $password; // string  

    /**
     * @param string $password 
     */
    public function __construct($password) {
        $this->password = $password;
    }

    /**
     * @brief Get the wrapped string.
     */
    public function value() {
        return $this->password;
    } 
}

/**
 * @class EMail
 *
 * @brief Class to wrap and access a Users email.
 *
 * Wraps around string.
 */
class EMail {
    protected $email; // string  

    /**
     * @param string $email 
     */
    public function __construct($email) {
        $this->email = $email;
    }

    /**
     * @brief Get the wrapped string.
     */
    public function value() {
        return $this->email;
    } 
}
?>	
