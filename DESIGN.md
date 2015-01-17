# Layers

## User Interface Layer

* in- and output
* parse requests
* generare HTML

* contains **endpoints** that either represent a changing **action** or 
  a **view** on the system
* **views** are build from **partials**, both consist of **controllers**  and 
  **templates**

## Application Layer

* business logic
* controlls access

* contains **commands** which change the system but generate no data output
  and **queries** which return data from the system
* the commands and queries are run on an **environment**
* the environment supplies the commands and queries with **storages** for
  data and the **operator** which is the user that currently acts in the
  system

### Examples

```php
<?php

class UpdateUserCommand {
    private $user_storage = null;

    public function __construct(Environment $env) {
        $this->user_storage = $env->userStorage();
    }

    public function run($id, $username, $password, $email) {
        $user = $this->user_storage->get($id);
        $user->username($username)
             ->password($password)
             ->email($email)
             ;
        $this->user_storage->save($user); 
    }
}

interface Environment {
    /**
     * Get the user storage.
     * @return UserStorage
     */
    public function userStorage();
}

class ProductionEnvironment implements Environment {
    public function userStorage() {
        return new MySQLUserStorage();
    }
}

?>
```

## Domain Layer

* represents the original problem
* has nouns and verbs to talk about the original problem

* class **User** represents a user
* class **Item** represents an item on a todo list
* class **ToDoList** represents a todo list
* for each class a **storage interface** is defined, that supports CRUD ops

### Examples

```php
<?php

class User {

}

interface UserStorage {
    /**
     * Get a User by Id.
     *
     * @param $id integer
     * @return User
     * @throws UnknownUserException
     */
    public function get($id);

    public function save(User $user);
}

?>
```


## Persistence Layer

* stores the data
* keeps the data consistent

* contains implementations of **storage** interfaces

### Examples

```php
<?php

class MySQLUserStorage implements UserStorage {
    public function __construct($ip, $port, $username, $password, $db) {
    }

    public function get($id) {
        $res = $this->query("SELECT * FROM users WHERE id = $id");
    }
}

?>
```
