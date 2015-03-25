<?php
require_once(/../src/Task.php); 

class TaskIDTest extends PHPUnit_Framework_TestCase {
    public function testCanUseTaskID() {
        $haveToHorstID = new TaskID(3);
        
        $this->assertEquals(3, $haveToHorstID->value());
    }
}    
?>
