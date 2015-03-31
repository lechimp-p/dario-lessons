<?php
require_once('./src/User.php'); 

class EMailTest extends PHPUnit_Framework_TestCase {
    public function testCanUseEMail() {
        $this->horstEMail = new EMail('horst@wurst.peter');
        
        $this->assertEquals('horst@wurst.peter', $this->horstEMail->value());
    }
}
?>
