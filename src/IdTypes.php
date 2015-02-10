<?php

class ToDoListId {
    protected $id; // int    

    public function __construct($id) {
        $this->id = $id;
    }

    public function value() {
        return $this->id;
    } 
}

?>
