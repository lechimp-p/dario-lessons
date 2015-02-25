<?php

/**
* @file Item.php
*
* @brief Contains the class "Item" and defines its structure and behaviour.
*/

/**
 * @class Item 
 *
 * @brief An Item is the atomic element of a ToDoList.
 *
 * The Item-class is the class that represents the the tasks that have been
 * entered on 1 or multiple ToDoLists. An Item is further described via 0, 1 or
 * multiple detail-arguments and 0 or 1 progress-argument.
 */
class Item {
	/**
	 * @brief This is the constructor function of the Item-class
	 *
	 * The construct-function needs 1 ItemId, 1 task, 0, 1 or multiple details 
	 * and 0 or 1 progress as arguments to be executed and create a new
	 * Item-object. 
     *
	 * @param [ItemId]   $id
     * @param string     $task
     * @param string     $detail
     * @param string     $progress
	 */ 	
	public function __construct (ItemId $id, $task, $detail, $progress) {
		
	}
	
	/**
	 * @brief Setter for the title of an Item-object.
	 *
	 * The setName-function needs a title as argument and assigns it to the 
	 * Item-object.
     *
     * @param string    $title
     * @return $this
	 */ 
	public function setTitle ($title) {
		
	}
	
	/**
	 * @brief Getter for the title of an Item-object
	 *
	 * The getName-function returns the title of a Item-object.
     *
     * @return string 
	 */ 	
	public function getTitle () {
		
	}
	
	/**
	 * @brief Setter for the details of an Item-object.
	 *
	 * The setDetail-function needs 1 or more details as argument and assigns
	 * them to the Item-object.
     *
     * @param string    $detail
     * @return $this
	 */ 	
	public function setDetail ($detail) {
		
	}
	
	/**
	 * @brief Getter for the details of an Item-object
	 *
	 * The getDetail-function returns the title of an Item-object.
     *
     * @return string 
	 */ 	
	public function getDetail () {
		
	}
	
	/**
	 * @brief Setter for the progress of an Item-object.
	 *
	 * The setProgress-function needs a progress as argument and assigns it to 
	 * the Item-object.
     *
     * @param string    $progress
     * @return $this
	 */ 	
	public function setProgress ($progress) {
		
	}
	
	/**
	 * @brief Getter for the progress of an Item-object
	 *
	 * The getProgress-function returns the progress of an Item-object.
     *
     * @return string 
	 */ 		
	public function getProgress () {
		
	}
}

/**
 * @class ItemID
 *
 * @brief Represents an id of an Item.
 *
 * Wraps around integer.
 */
class ItemId {
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
?>