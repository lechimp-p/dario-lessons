<?php
require_once(/../src/Task.php); 

class TaskProgressTest extends PHPUnit_Framework_TestCase {
    $howFarIsHorst = new Progress(46);
    
    $youNoMakeSenseHorst = new Progress(-20);
    
    $youHighHorst = new Progress('ten');
    
    $floatingHorst = new Progress(17.93);
    
    public function testValidityOfInputRange() {
        $this->assertNotTrue($youNoMakeSenseHorst->$valid); 
        // ausgabefunktion in task.php für valid sinnvoll? gehe davon aus daß 
        // das objekt gar nich konstruiert wird wenn nich valid ...
        // gibt das jetzt false als string oder bool aus und wie schlau is die
        // assert-funktion den string zu verstehen?? FRAGENFRAGENFRAGEN
    }
    
    public function testValidityOfString() {
        $this->assertNotTrue($youHighHorst->$valid); // s. oben
    }
    
    public function testValidityOfFloat() {
        $this->assertNotTrue($floatingHorst->$valid); // s. oben
    }
    
    public function testValueOfProgress() {
        $this->assertEquals(46, $howFarIsHorst->value());
    }
}    
?>