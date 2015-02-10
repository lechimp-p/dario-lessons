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
* The ToDoList-class is the core class which can be created by a user. It needs a title and tasks can be added, altered or removed from it. It can potentially be accessible to multiple users which could then have different levels of rights on the list.
*/

class ToDoList { 
	/**
	* @brief This is the constructor function of the ToDoList-class
	*
	* The construct-function needs 1 or more usernames, 1 title and 0 or more tasks as arguments to be executed and create a new ToDoList-object. 
	*/ 
    public function __construct(...$task, ...$username, $title) { 
			
    }
	
	/**
	* @brief Setter for the title of a ToDoList-object.
	*
	* The setName-function needs a title as argument and assigns it to the ToDoList-object.
	*/ 		
    public function setName($title) { 
				
    }
		
	/**
	* @brief Getter for the title of a ToDoList-object
	*
	* The getName-function returns the title of a ToDoList-object.
	*/ 	
    public function getName() { 
				
    }
		
	/**
	* @brief Adds a new task to a ToDoList.
	*
	* The addItem-function needs 1 task argument, (aufbau der details?) and (aufbau des progress?). It adds the Item defined by these arguments to a ToDoList.
	*/ 	
    public function addItem($task, $detail, $progress) { 
				
    }
	
	/**
	* @brief Returns the items of a ToDoList. (auf welche art und weise?)
	*
	* 
	*/ 
    public function getItems() { 
				
    }
	
	/**
	* @brief Removes an item from a ToDoList.
	*
	* (hier ein bisschen unsicher wegen genauer funktionsweise der IDs)
	*/ 
    public function removeItem($itemID) { 
				
    }
			
	/**
	* @brief Associates an additional user with the ToDoList.
	*
	* Needs 1 username as an argument and gives him access to the ToDoList. (verschiedene level an rechten?)
	*/ 		
    public function addUser($username) { 
				 
    }
			
	/**
	* @brief Removes access to the ToDoList for a user.
	*
	* Needs 1 (macht es sinn mehrere namen zuzulassen?) username and restricts him from accessing the ToDoList. 
	*/ 		
    public function removeUser($username) { 
				
    }		
}
?>
