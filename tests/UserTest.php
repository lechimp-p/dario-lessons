<?php
require_once(/../src/User.php); // why not ./../src/User.php ??

class UserIDTest extends PHPUnit_Framework_TestCase {
    public function testCanUseUserID() {
        $horstID = new UserID(1337);
        
        $this->assertEquals(1337, $horstID->value());
    }
}    
    
class PasswordTest extends PHPUnit_Framework_TestCase {
    public function testCanUsePassword() {
        $horstPass = new Password('peter');
        
        $this->assertEquals('peter', $horstPass->value());
    }
}
    
class EMailTest extends PHPUnit_Framework_TestCase {
    public function testCanUseEMail() {
        $horstEMail = new EMail('horst@wurst.peter');
        
        $this->assertEquals('horst@wurst.peter', $horstEMail->value());
    }
}

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
