<?php

/**
 * @file Task.php
 *
 * @brief Contains the class "Task" and defines its structure and behaviour.
 */

/**
 * @class Task
 *
 * @brief A Task is the atomic element of a ToDoList.
 *
 * The Task-class is the class that represents the the tasks that have been
 * entered on 1 or multiple ToDoLists. A Task is further described via 0, 1 or
 * multiple detail-arguments and 0 or 1 progress-argument.
 */
class Task {
    /**
     * @brief This is the constructor function of the Task-class
     *
     * The construct-function needs 1 TaskId, 1 task, 0, 1 or multiple details 
     * and 0 or 1 progress as arguments to be executed and create a new
     * Task-object. 
     *
     * @param TaskId       $id
     * @param string       $task
     * @param string[]     $detail
     * @param Progress     $progress
     */ 	
    public function __construct(TaskId $id, $task, $detail, Progress $progress) {
		
    }
	
    /**
     * @brief Setter for the title of a Task-object.
     *
     * The setName-function needs a title as argument and assigns it to the 
     * Task-object.
     *
     * @param string    $title
     * @return $this
     */ 
    public function setTitle($title) {
		
    }
	
    /**
     * @brief Getter for the title of a Task-object
     *
     * The getName-function returns the title of a Task-object.
     *
     * @return string 
     */ 	
    public function getTitle() {
		
    }
	
    /**
     * @brief Setter for the details of a Task-object.
     *
     * The setDetail-function needs 1 or more details as argument and assigns
     * them to the Task-object.
     *
     * @param string    $detail
     * @return $this
     */ 	
    public function setDetail($detail) {
		
    }
	
    /**
     * @brief Getter for the details of a Task-object
     *
     * The getDetail-function returns the title of a Task-object.
     *
     * @return string 
     */ 	
    public function getDetail() {
		
    }
	
    /**
     * @brief Setter for the progress of a Task-object.
     *
     * The setProgress-function needs a progress as argument and assigns it to 
     * the Task-object.
     *
     * @param string    $progress
     * @return $this
     */ 	
    public function setProgress($progress) {
		
    }
	
    /**
     * @brief Getter for the progress of a Task-object
     *
     * The getProgress-function returns the progress of a Task-object.
     *
     * @return string 
     */ 		
    public function getProgress() {
		
    }
}

/**
 * @class TaskID
 *
 * @brief Represents an id of a Task.
 *
 * Wraps around integer.
 */
class TaskId {
    protected $id; // int    

    /**
     * @param int $id
     */
    public function __construct($id) {
        // ToDo: insert type check on id
        $this->id = $id;
    }

    /**
     * @brief Get the wrapped integer value.
     */
    public function value() {
        return $this->id;
    } 
}	

/**
 * @class Progress
 *
 * @brief Represents the state of progress of a task.
 *
 * Wraps around integer from 0 to 100 (percentage).
 */
class Progress {
    private $progress; // int 0-100
    private $valid = false;
    
    /**
     * @brief This is the constructor of a Progress-object.
     *
     * To ensure a valid value as progress, the parameter $progress is tested
     * to be an integer, equal or higher than 0 and less or equal to 100 when 
     * a new object gets created.
     *
     * @param int $progress
     */    
    public function __construct($progress) {
        $valid = is_int($progress) && $progress <= 100 && $progress >= 0;
    }
}
?>