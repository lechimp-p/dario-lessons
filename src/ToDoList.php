/**
* @file List.php
*
* @brief Contains the class "ToDoList" and defines its structure and behaviour.
*/

<?php
/**
 * @class ToDoList 
 *
 * @brief A ToDoList belongs to 1 or multiple users and contains tasks
 *
 * The ToDoList-class is the core class which can be created by a user. It needs
 * a title and tasks can be added, altered or removed from it. It can potentially
 * be accessible to multiple users.
 */

require_once("Ids.php");

class ToDoList { 
	/**
	 * @brief This is the constructor function of the ToDoList-class
	 *
	 * The construct-function needs 1 or more usernames, 1 title and 0
     * or more tasks as arguments to be executed and create a new ToDoList-object. 
     *
     * @param string         $name
     * @param [ToDoItemId]   $items
     * @param [UserId]       $users
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
	 * The addItem-function needs 1 task id as argument, It adds the Item 
     * defined by these arguments to a ToDoList.
     *
     * @return $this
	 */ 	
    public function addItem(ToDoItemId $item) { 
        			
    }
	
	/**
	 * @brief Removes an item from a ToDoList.
	 *
     * @return §this
	 */ 
    public function removeItem(ToDoItemId $itemID) { 
				
    }
	
	/**
	 * @brief Returns the items of a ToDoList. 
	 *
     * @return [ToDoItemId] 
	 */ 
    public function getItems() { 
				
    }
			
	/**
	 * @brief Associates an additional user with the ToDoList.
	 *
	 * Needs a user id as argument and gives him access to the ToDoList. 
     *
     * @return $this
	 */ 		
    public function addUser(UserId $user) { 
				 
    }
			
	/**
	 * @brief Removes access to the ToDoList for a user.
	 *
	 * Needs user id as argument and forbids her to access the ToDoList. 
     *
     * @return $this
	 */ 		
    public function removeUser(UserId $username) { 
				
    }		

    /**
     * @brief Get all users who can access this list.
     *
     * @return [UserId]
     */
    public function getUsers() {

    }
}
?>
