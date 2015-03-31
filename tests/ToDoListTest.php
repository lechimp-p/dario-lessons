<?php
require_once('./src/ToDoList.php');

class ToDoListTest extends PHPUnit_Framework_TestCase {
    public function setUp() {
        $this->taskID = new TaskID(900);       
        $this->secondTaskID = new TaskID(911);
        $this->userID = new UserID(800);        
        $this->secondUserID = new UserID(811);       
        $this->listID = new ToDoListID(1000);      
        $this->prog = new Progress(33);  
        $this->secondProg = new Progress(74);
        
/////////////////////////////////////////////////////////////        
        
        $this->leTask = new Task($this->taskID, 'test0r', 'stuff', $this->prog);        
        $this->secondTask = new Task($this->secondTaskID, 'bla', 'blubb', $this->secondProg);        
        $this->pass = new Password('wurst');        
        $this->altPass = new Password('kaese');        
        $this->email = new EMail('nazi@kommunisten.is');       
        $this->shmeeMail = new EMail('a@b.c');       
        $this->leUser = new User($this->userID, 'Emma W.', $this->pass, $this->email);      
        $this->cannonFodder = new User($this->secondUserID, 'some guy', $this->altPass, $this->shmeeMail);      
        $this->leList = new ToDoList($this->listID, 'List Dummy', $this->leTask, $this->leUser);
    }  
    
    public function testGetName() {
        $this->assertEquals('List Dummy', $this->leList->getName());
    }
    
    public function testSetName() {
        $this->leList->setName('POOF! Chicken ...');
        
        $this->assertEquals('POOF! Chicken ...', $this->leList->getName());
    }
    
    public function testGetUsers() {
        $this->assertContains($this->leUser, $this->leList->getUsers());
    }
    
    public function testAddUser() {
        $this->leList->addUser($this->cannonFodder);
        
        $this->assertContains($this->cannonFodder, $this->leList->getUsers());
    }
    
    public function testRemoveUser() {
        $this->leList->removeUser($this->cannonFodder);
        
        $this->leList->removeUser($this->leUser);
        
        $this->assertEmpty($this->leList->getUsers());
    }
    
    public function testGetTasks() {
        $this->assertContains($this->leTask, $this->leList->getTasks());
    }
    
    public function testAddTasks() {
        $this->leList->addTask($this->secondTask);
        
        $this->assertContains($this->secondTask, $this->leList->getTasks());
    }
    
    public function testRemoveTask() {
        $this->leList->removeTask($this->leTask);
        
        $this->leList->removeTask($this->secondTask);
        
        $this->assertEmpty($this->leList->getTasks());
    }
}
