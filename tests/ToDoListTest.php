<?php
require_once(/../src/ToDoList.php);

class ToDoListTest extends PHPUnit_Framework_TestCase {
    $taskID = new TaskID(900);
    
    $secondTaskID = new TaskID(911);

    $userID = new UserID(800);
    
    $secondUserID = new UserID(811);
    
    $listID = new ToDoListID(1000);
    
    $prog = new Progress(33);
    
    $secondProg = new Progress(74);
    
/////////////////////////////////////////////////////////////    
    
    $leTask = new Task($taskID, 'test0r', 'stuff', $prog);
    
    $secondTask = new Task($secondTaskID, 'bla', 'blubb', $secondProg);
    
    $pass = new Password('wurst');
    
    $altPass = new Password('kaese');
    
    $email = new EMail('nazi@kommunisten.is');
    
    $shmeeMail = new EMail('a@b.c');
    
    $leUser = new User($userID, 'Emma W.', $pass, $email);
    
    $cannonFodder = new User($secondUserID, 'some guy', $altPass, $shmeeMail);
    
    
    
    $leList = new ToDoList($listID, 'List Dummy', $leTask, $leUser);
    
    public function testGetName() {
        $this->assertEquals('List Dummy', $leList->getName());
    }
    
    public function testSetName() {
        $this->setName('POOF! Chicken ...');
        
        $this->assertEquals('POOF! Chicken ...', $leList->getName());
    }
    
    public function testGetUsers() {
        $this->assertContains($leUser, $leList->getUsers());
    }
    
    public function testAddUser() {
        $this->addUser($cannonFodder);
        
        $this->assertContains($cannonFodder, $leList->getUsers());
    }
    
    public function testRemoveUser() {
        $this->removeUser($cannonFodder);
        
        $this->removeUser($leUser);
        
        $this->assertEmpty($leList->getUsers());
    }
    
    public function testGetTasks() {
        $this->assertContains($leTask, $leList->getTasks());
    }
    
    public function testAddTasks() {
        $this->addTask($secondTask);
        
        $this->assertContains($secondTask, $leList->getTasks());
    }
    
    public function testRemoveTask() {
        $this->removeTask($leTask);
        
        $this->removeTask($secondTask);
        
        $this->assertEmpty($leList->getTasks());
    }
}