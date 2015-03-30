<?php
require_once(./src/User.php); 

class UserIDTest extends PHPUnit_Framework_TestCase {
    public function testCanUseUserID() {
        $this->horstID = new UserID(1337);
        
        $this->assertEquals(1337, $this->horstID->value());
    }
}    
?>