<?php
require_once('./src/Task.php');

class TaskTest extends PHPUnit_Framework_TestCase {
    public function setUp() {
        $this->leTaskID = new TaskID(1234);   
        $this->leProgress = new Progress(42);   
        $this->becomeBestProgrammer = new Task($this->leTaskID, '2ez', 'super secret', $this->leProgress);
    }
    
    public function testGetDescription() {
        $this->assertEquals('2ez', $this->becomeBestProgrammer->getTitle());
    }
    
    public function testSetDescription() {
        $this->becomeBestProgrammer->setTitle('cant tell');
        
        $this->assertEquals('cant tell', $this->becomeBestProgrammer->getTitle());
    }
    
    public function testGetDetail() {
        $this->assertEquals('super secret', $this->becomeBestProgrammer->getDetail());
    }
    
    public function testSetDetail() {
        $this->becomeBestProgrammer->setDetail('watch me');
        
        $this->assertEquals('watch me', $this->becomeBestProgrammer->getDetail());
    }
    
    public function testGetProgress() {
        $progress = $this->becomeBestProgrammer->getProgress();
        $this->assertNotNull($progress);
        $this->assertEquals(42, $progress->value());
    }
    
    public function testSetProgress() {
        $this->becomeBestProgrammer->setProgress(43);
        $progress = $this->becomeBestProgrammer->getProgress();
        $this->assertNotNull($progress);
        $this->assertEquals(43, $progress->value());
    }
}  
?>  
