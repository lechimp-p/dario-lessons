<?php
require_once(./src/Task.php); 

class TaskIDTest extends PHPUnit_Framework_TestCase {
    public function testCanUseTaskID() {
        $this->haveToHorstID = new TaskID(3);
        
        $this->assertEquals(3, $this->haveToHorstID->value());
    }
}    
?>
