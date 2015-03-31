<?php
require_once('./src/User.php');

class UserTest extends PHPUnit_Framework_TestCase {
    public function setUp() {
        $this->horstID = new UserID(1000);
        $this->horstPass = new Password('Emma');
        $this->horstEMail = new EMail('Watson@har.ry');
        $this->horst = new User($this->horstID, 'Horst1984', $this->horstPass, $this->horstEMail);
        $this->newPass = new Password('qwertz');
        $this->newEMail = new EMail('a@b.c');
    }
    
    public function testGetUsername() {        
        $this->assertEquals('Horst1984', $this->horst->getUsername());
    }
    /*
    public function testGetEMail() {        
        $this->assertEquals('Watson@har.ry', $this->horst->getEMail()->value());
    }
    
    public function testGetPassword() {        
        $this->assertEquals('Emma', $this->horst->getPassword()->value());
    }
    
    public function testSetUsername() { 
        $this->setUsername('HeMan666');
        
        $this->assertEquals('HeMan666', $this->horst->getUsername());
    }
    
    public function testSetPassword() {       
        $this->horst->setPassword($this->newPass);
        
        $this->assertEquals('qwertz', $this->horst->getPassword()->value());
    }
    
    public function testSetEMail() {
        $this->horst->setEMail($this->newEMail);
        
        $this->assertEquals('a@b.c', $this->horst->getEMail()->value());
    }
*/
}
