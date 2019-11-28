<?php

/*
 -----------------------------------------------
|    File Name   : single_responsibility.php    |
|    Author      : Sonveer Singh                |
|    Date        : 18 Oct 2019                  |
 -----------------------------------------------

* Each class and module should focus on a single task at a time.
* Everything in the class should be related to that single purpose.
* There can be many members in the class as long as they are related to the single responsibility.
* With SRP, classes become smaller and cleaner
* Code is leff fragile.

*/


// Class without SRP //


class User{
    public function Login(){

    }

    public function Register(){
        
    }

    public function LogError(){
        
    }

    public function SendEmail(){
        
    }
}

// Implementing SRP in classes //


class User{

    public function Login(){

    }

    public function Register(){
        
    }

}

class ErrorLogging{
    
    public function LogError(){
        
    }

    public function SendEmail(){

    }
}

class Email{
    
    public function SendEmail(){

    }
}