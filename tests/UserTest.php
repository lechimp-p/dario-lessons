<?php
require_once(/../src/User.php);

class UserTest extends PHPUnit_Framework_TestCase {
    $horstID = new UserID(1000);
    
    $horstPass = new Password('Emma');
    
    $horstEMail = new EMail('Watson@har.ry');
    
    $horst = new User($horstID, 'Horst1984', $horstPass, $horstEMail);
    
    public function testGetUsername() {        
        $this->assertEquals('Horst1984', $horst->getUsername());
    }
    
    public function testGetEMail() {        
        $this->assertEquals('Watson@har.ry', $horst->getEMail()->value());
    }
    
    public function testGetPassword() {        
        $this->assertEquals('Emma', $horst->getPassword()->value());
    }
    
    public function testSetUsername() { 
        $this->setUsername('HeMan666');
        
        $this->assertEquals('HeMan666', $horst->getUsername()->value());
    }
    
    public function testSetPassword() {
        $newPass = new Password('qwertz');
        
        $this->assertEquals('qwertz', $horst->getPassword()->value());
    }
    
    public function testSetEMail() {
        $newEMail = new EMail('a@b.c');
        
        $this->assertEquals('a@b.c', $horst->getEMail()->value());
    }
}
