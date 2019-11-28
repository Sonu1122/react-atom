				 _______________________________
				|								|
				|	SOLID Principles of OOP		|
				|_______________________________|


S (Single Responsibility) - A class should have one and only one reason to change, meaning that a class should have only one job.
					Every module or class should have responsibility over a single part of the functionality provided by the software,
					and that too should be entirely encapsulated by the class.

		Ex - You have a class UserDetails which finds the list of all users. It contains methods for DB connection, 
		fetching user list, and formatting data to output it as HTML.

			Now, here UserDetails class have more than one responsibility of DB connection, fetching user data, formatting
			data to output.

			These responsibilities sould be handeled in their separate classes.

O (Open-Closed) - Entities sholud be open for extension, but closed for modification/changing behaviour w/o modifying source code.

		Ex - First implementation of outputting data may be in the form of plain text, HTML but later on we may have to add methods like JSON, XML.
			In this case we can use an abstract class/interface depending upon your needs instead of a class 
			which we have to modify everytime when we have a new ouput method.

L (Liskov Substitution) - Derived classes must be substitutable for their base classes.

		1. Signature must match
		2. Pre conditions can't be greater
		3. Post conditions at least equal to
		4. Exception types must match

		Suppose you have an interface which expects return type array of every implementation of its method.
		If we don't adhere to its expectation, then we are breaking the Liskov substitution principle.

		This principle states that any implementation of an abstraction (interface) 
		should be substitutable in any place that the abstraction is accepted.

I (Interface Segregation) - A client should not be forced to implement an interface that it doesn't use.
					For example, 


D (Dependency Inversion) - A class should concentrate on fulfilling its responsibilities and 
							not on creating objects that it requires to fulfill those responsibilities

		High level modules should not depend on low level modules.

		<?php
		class PasswordReminder {
			private $dbConnection;
		
			public function __construct(MySQLConnection $dbConnection) {
				$this->dbConnection = $dbConnection;
			}
		}
		?>

		This snippet above violates this principle as the PasswordReminder class is being forced to depend on the 
		MySQLConnection class.


