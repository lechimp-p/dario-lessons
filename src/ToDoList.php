<?php

/**
 * @file List.php
 *
 * @brief Contains the class "ToDoList" and defines its structure and behaviour.
 */

/**
 * @class ToDoList 
 *
 * @brief A ToDoList belongs to 1 or multiple users and contains tasks
 *
 * The ToDoList-class is the core class which can be created by a user. It needs
 * a title and tasks can be added, altered or removed from it. It can potentially
 * be accessible to multiple users.
 */
class ToDoList { 
    /**
     * @brief This is the constructor function of the ToDoList-class
     *
     * The construct-function needs 1 or more usernames, 1 title and 0
     * or more tasks as arguments to be executed and create a new ToDoList-object. 
     *
     * @param string         $name
     * @param [ToDoItem]     $items
     * @param [User]         $users
	 */ 
    public function __construct(ToDoListId $id, $name, $items, $users) { 
			
    }
	
    /**
     * @brief Setter for the title of a ToDoList-object.
     *
     * The setName-function needs a title as argument and assigns it to the ToDoList
     * -object.
     *
     * @param string    $title
     * @return $this
	 */ 		
    public function setName($title) { 
				
    }
		
    /**
     * @brief Getter for the title of a ToDoList-object
     *
     * The getName-function returns the title of a ToDoList-object.
     *
     * @return string 
	 */ 	
    public function getName() { 
				
    }
		
    /**
     * @brief Adds a new task to a ToDoList.
     *
     * The addItem-function needs 1 task as argument, It adds the Item 
     * defined by these arguments to a ToDoList.
     *
     * @return $this
	 */ 	
    public function addItem(ToDoItem $item) { 
        			
    }
	
    /**
     * @brief Removes an item from a ToDoList.
     *
     * @return $this
	 */ 
    public function removeItem(ToDoItem $itemID) { 
				
    }
	
    /**
     * @brief Returns the items of a ToDoList. 
     *
     * @return [ToDoItem] 
	 */ 
    public function getItems() { 
				
    }
			
    /**
     * @brief Associates an additional user with the ToDoList.
     *
     * Needs a user as argument and gives him access to the ToDoList. 
     *
     * @return $this
	 */ 		
    public function addUser(User $user) { 
				 
    }
			
    /**
     * @brief Removes access to the ToDoList for a user.
     *
     * Needs user as argument and forbids her to access the ToDoList. 
     *
     * @return $this
	 */ 		
    public function removeUser(User $username) { 
				
    }		

    /**
     * @brief Get all users who can access this list.
     *
     * @return [User]
     */
    public function getUsers() {

    }
}

/**
 * @class ToDoListID
 *
 * @brief Represents an id of a ToDoList.
 *
 * Wraps around integer.
 */
class ToDoListId {
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
