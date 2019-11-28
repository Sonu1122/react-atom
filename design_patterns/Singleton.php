<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
 -----------------------------------
|    File Name   : Singleton.php    |
|    Author      : Sonveer Singh    |
|    Date        : 18 Oct 2019      |
 -----------------------------------

Intent
------

* Ensure a class has only one instance, and provide a global point of access to it.
* Encapsulated "just-in-time initialization" or "initialization on first use".

Problem
-------

* Application needs one, and only one, instance of an object. Additionally, lazy initialization and global access are necessary.

Discussion
----------
Make the class of the single instance object responsible for creation, initialization, access, and enforcement. Declare the instance as a private static data member. Provide a public static member function that encapsulates all initialization code, and provides access to the instance.

The client calls the accessor function (using the class name and scope resolution operator) whenever a reference to the single instance is required.

Singleton should be considered only if all three of the following criteria are satisfied:

* Ownership of the single instance cannot be reasonably assigned
* Lazy initialization is desirable
* Global access is not otherwise provided for

Check list
----------

1) Define a private static attribute in the "single instance" class.
2) Define a public static accessor function in the class.
3) Do "lazy initialization" (creation on first use) in the accessor function.
4) Define all constructors to be protected or private.
5) Clients may only use the accessor function to manipulate the Singleton.

*/

class Database{
    public $table_name = '';
    private static $instance = NULL;
    private function __construct(){
        
    }

    public static function instance(){
        if(Database::$instance == NULL){
            Database::$instance = new Database();
        }
        return Database::$instance;
    }

    public function getQuery($table_name){
        return "SELECT * FROM $table_name;";
    }
}

$table_name = 'employee';
$DB = Database::instance();
echo $DB->getQuery($table_name);

?>