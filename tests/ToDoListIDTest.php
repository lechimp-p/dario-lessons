<?php
require_once('./src/ToDoList.php'); 

class ToDoListIDTest extends PHPUnit_Framework_TestCase {
    public function testCanUseToDoListID() {
        $this->listID = new ToDoListID(345);
        
        $this->assertEquals(345, $this->listID->value());
    }
}    
?>
