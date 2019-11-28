PHP
-----

COOKIES vs SESSION
GET vs POST
define() vs const
echo vs print
var_dump() vs print_r()
set_time_limit() vs ini_set('max_execution_time','')
htmlentities()
urlencode() vs urldecode()
htmlspecialchars()
addslashes() vs stripslashes()
session_unset()
array sorting
array functions
string functions
patterns
factorial
palindrome
fibonacci
prime numbers
Autoloading and Namespace
Inheritence
Interface
Abstraction and abstract class
Interface vs Abstraction
Function overloading vs overriding
Polymorphism
Encapsulation
Final keyword
Magic method
Magic keywords
AJAX
API vs Web service
Web API
SOAP vs REST
SOLID Principles of OOP
Design Patterns
Dependency Injection
High level language
Low level language
Interpreted language
Compiled language :- A program written in a compiled language like C or C++ is converted from the source language
                     i.e. C or C++ into a language that is spoken by your computer (binary code i.e. 0s and 1s) 
                     using a compiler with various flags and options. When you run the program, the linker/loader 
                     software copies the program from hard disk to memory and starts running it.


PHP7 features
-------------

1> Scalar typehint (int,string,boolean)
2> Return Type Declaration
3> Spaceship operator (<=> it will return -1,0,1)
4> Null coalesce ($abc ?? nothing) replacement of ternary operator
5> Group Imports in namespace.

MYSQL
-----

DESCRIBE vs EXPLAIN
DATETIME vs TIMESTAMP
update 0 to 1 and 1 to 0
duplicate rows
second highest salary
IFNULL() statement
mysql engines
mysql data types
MyISAM vs InnoDB
Indexing
clustred vs non clustered
primary vs foreign
Stored procedures
functions
views
Triggers
types of mysql fetch
FULLTEXT Search

DESCRIBE vs EXPLAIN
-------------------

DESCRIBE provides information about the columns in a table:


mysql> DESCRIBE City;
+------------+----------+------+-----+---------+----------------+
| Field      | Type     | Null | Key | Default | Extra          |
+------------+----------+------+-----+---------+----------------+
| Id         | int(11)  | NO   | PRI | NULL    | auto_increment |
| Name       | char(35) | NO   |     |         |                |
| Country    | char(3)  | NO   | UNI |         |                |
| District   | char(20) | YES  | MUL |         |                |
| Population | int(11)  | NO   |     | 0       |                |
+------------+----------+------+-----+---------+----------------+

c)What is the difference between Sessions and Cookies in PHP?

COOKIES
-------

1)Cookies are stored in browser as text file format.
2)It stores less amount of data, allowing only 4kb[4096bytes].
3)It can not hold multiple variable.
4)It is less secure as we can access its values easily.

SESSIONS
--------

1)Sessions are stored on server.
2)It can store unlimited amount of data.
3)It can hold multiple variable.
4)It is more secure as we can`t access its values easily.

b)What is the difference between GET and POST method in PHP?

GET
---

1)Appends form-data into the URL in name/value pairs
2)The length of a URL is limited (about 1024 characters)
3)Never use GET to send sensitive data! (will be visible in the URL)
4)Useful for form submissions where a user want to bookmark the result
5)GET is better for non-secure data, like query strings in Google
6)We can send only 2000 bytes(2kb) using GET method

POST
----

1)Appends form-data inside the body of the HTTP request (data is not shown in URL)
2)It Has no size limitations
3)Form submissions with POST cannot be bookmarked

DATETIME
--------

A date and time combination in YYYY-MM-DD HH:MM:SS format, between 1000-01-01 00:00:00 and 9999-12-31 23:59:59. 
For example, 3:30 in the afternoon on December 30th, 1973 would be stored as 1973-12-30 15:30:00.

TIMESTAMP
---------

A timestamp between midnight, January 1st, 1970 and sometime in 2037. 

PHP echo and print Statements
-----------------------------

echo has no return value while print has a return value of 1 so it can be used in expressions. 
echo can take multiple parameters (although such usage is rare) while print can take one argument. 
echo is marginally faster than print .

define() vs const
-----------------

#const defines constants at compile time, whereas define defines them at run time.
#const cannot be used to conditionally define constants. To define a global constant, it has to be used in the outermost scope:
<?php
if ('a') {
    const FOO = 'BAR';    // invalid
}
// but
if (...) {
    define('FOO', 'BAR'); // valid
}
?>

var_dump() vs print_r()
-----------------------

The var_dump function displays structured information about variables/expressions including its type and value. 
Arrays are explored recursively with values indented to show structure. It also shows which array values and object properties are references.

The print_r() displays information about a variable in a way that's readable by humans. array values will be presented in a format that shows keys and elements. 
Similar notation is used for objects.

<?php
$obj = (object) array('qualitypoint', 'technologies', 'India');

$obj = (object) array('qualitypoint', 'technologies', 'India');
var_dump($obj) //will display below output in the screen.

object(stdClass)#1 (3) {
 [0]=> string(12) "qualitypoint"
 [1]=> string(12) "technologies"
 [2]=> string(5) "India"
}

//And,

print_r($obj) //will display below output in the screen.

stdClass Object ( 
 [0] => qualitypoint
 [1] => technologies
 [2] => India
)
?>

set_time_limit() vs ini_set('max_execution_time','')
------------------------------------------------------

By default, the maximum execution time for PHP scripts is set to 30 seconds. If a script runs for longer than 30 seconds, PHP stops the script and reports an error. 
You can control the amount of time PHP allows scripts to run by changing the max_execution_time directive in your php.ini file or set_time_limit() in you file.

A tiny difference to take into account is the way they behave on failure:

    set_time_limit() - The function takes one parameter, which is the number of seconds you want the script to have or you can pass 0, which means “Let the script run as long as it needs.”
                        Does not return anything so you can't use it to detect whether it succeeded. 
                        Additionally, it'll throw a warning:

        Warning: set_time_limit(): Cannot set time limit in safe mode

    ini_set('max_execution_time',20) - returns FALSE on failure and does not trigger warnings.

    HTML Entities - htmlentities()
    ------------------------------  

    An HTML entity is a piece of text ("string") that begins with an ampersand (&) and ends with a semicolon (;) . 
    Entities are frequently used to display reserved characters (which would otherwise be interpreted as HTML code), 
    and invisible characters (like non-breaking spaces). 
    You can also use them in place of other characters that are difficult to type with a standard keyboard. 

    Some special characters are reserved for use in HTML, meaning that your browser will parse them as HTML code. 
    For example, if you use the less-than (<) sign, the browser interprets any text that follows as a tag.

<?php
urlencode(); //This function is convenient when encoding a string to be used in a query part of a URL, as a convenient way to pass variables to the next page.
urldecode(); //Decodes any %## encoding in the given string. Plus symbols ('+') are decoded to a space character.
htmlspecialchars(); //The htmlspecialchars() function converts some predefined characters to HTML entities.
                        /*
                        & (ampersand) becomes &amp;
                        " (double quote) becomes &quot;
                        ' (single quote) becomes &#039;
                        < (less than) becomes &lt;
                        > (greater than) becomes &gt;
                        */

addslashes(); /*The addslashes() function returns a string with backslashes in front of predefined characters.

                    The predefined characters are:
                    single quote (')
                    double quote (")
                    backslash (\)
                    NULL
                Tip: This function can be used to prepare a string for storage in a database and database queries
                    */
stripslashes(); /* The stripslashes() function removes backslashes added by the addslashes() function.

                        Tip: This function can be used to clean up data retrieved from a database or from an HTML form. */
session_unset();
?>

JSON
----
JavaScript Object Notation (JSON) is an open, human and machine-readable standard that facilitates data interchange, 
and along with XML is the main format for data interchange used on the modern web. 
JSON supports all the basic data types you’d expect: numbers, strings, and boolean values, as well as arrays and hashes.


1) optimise for loop for array
ans) use foreach loop

2) mysql update 0 to 1 and 1 to 0
ans) a) abs(column_name -1)
	 b) use IF
     c) UPDATE table SET field = 1 - field

3) mysql find duplicate rows
ans) select addresses.* from addresses inner join (select user_id from addresses group by user_id having count(user_id)>1) adr on addresses.user_id = adr.user_id

4)mysql second highest salary
ans) a) select * from products where price != (select price from products order by price desc limit 1) order by price desc limit 1;

     b) select max(price) from products where price not in (select max(price) from products)

5) mysql IFNULL() statement
ans) The IFNULL() statement test its first argument and returns if it’s not NULL, or returns its second argument, otherwise.

SELECT name, IFNULL(id,'Unknown') AS 'id' FROM taxpayer;