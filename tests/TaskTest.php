<?php
require_once(/../src/Task.php);

class TaskTest extends PHPUnit_Framework_TestCase {
    $leTaskID = new TaskID(1234);
    
    $leProgress = new Progress(42);
    
    $becomeBestProgrammer = new Task($leTaskID, '2ez', 'super secret', $leProgress);
    
    public function testGetDescription() {
        $this->assertEquals('2ez', $becomeBestProgrammer->getTitle());
    }
    
    public function testSetDescription() {
        $this->setTitle('cant tell');
        
        $this->assertEquals('cant tell', $becomeBestProgrammer->getTitle());
    }
    
    public function testGetDetail() {
        $this->assertEquals('super secret', $becomeBestProgrammer->getDetail());
    }
    
    public function testSetDetail() {
        $this->setDetail('watch me');
        
        $this->assertEquals('watch me', $becomeBestProgrammer->getDetail());
    }
    
    public function testGetProgress() {
        $this->assertEquals(42, $becomeBestProgrammer->getProgress->value());
    }
    
    public function testSetProgress() {
        $this->setProgress(43);
        
        $this->assertEquals(43, $becomeBestProgrammer->getProgress->value());
    }
}  
?>  