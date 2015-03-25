<?php
require_once(/../src/User.php); 

class UserIDTest extends PHPUnit_Framework_TestCase {
    public function testCanUseUserID() {
        $horstID = new UserID(1337);
        
        $this->assertEquals(1337, $horstID->value());
    }
}    
?>