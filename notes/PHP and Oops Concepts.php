Functions:- Function are self contained block of statement which used to perform any specific task.
			
Classes :- A class is a blueprint or template or set of instructions to build a specific type of object. 
			To explain this, best examples are house plans and blueprints.
			The plans and blueprints define the number of rooms, the size of the kitchen, the number of floors, and more.
			In this real world sample, the house plans and blueprints are the class and the house is the object.			

Objects :- "Object" refers to a particular instance of a class where the object can be a combination of variables, functions, and data structures.

Properties :- Class member variables are called "properties". You may also see them referred to using other terms such as "attributes" or "fields", 
			but for the purposes of this reference we will use "properties". They are defined by using one of the keywords public, protected, or private, 
			followed by a normal variable declaration.

Namespace :- Consider a situation, when we have two persons with the same name, Zara, in the same class. 
			Whenever we need to differentiate them definitely we would have to use some additional information along with their name, 
			like either the area if they live in different area or their mother or father name, etc.

			Same situation can arise in any of your applications. For example, you might be writing some code that has a function called xyz() 
			and there is another library available which is also having same function xyz(). 
			Now the compiler has no way of knowing which version of xyz() function you are referring to within your code.

			A namespace is designed to overcome this difficulty and is used as additional information to differentiate similar functions, classes, variables etc. 
			with the same name available in different libraries. Using namespace, you can define the context in which names are defined. 
			In essence, a namespace defines a scope.

			------------------------------------------------------------------------------------------------------------------------------------------------------

			Namespacing does for functions and classes what scope does for variables. 
			It allows you to use the same function or class name in different parts of the same program without causing a name collision.
			In simple terms, think of a namespace as a person's surname. If there are two people named "John" you can use their surnames to tell them apart.

			The Scenario
			------------
			Suppose you write an application that uses a function named output(). 
			Your output() function takes all of the HTML code on your page and sends it to the user.

			Later on your application gets bigger and you want to add new features. You add a library that allows you to generate RSS feeds. 
			This library also uses a function named output() to output the final feed.

			When you call output(), how does PHP know whether to use your output() function or the RSS library's output() function? It doesn't. 
			Unless you're using namespaces.

			Example
			--------
			How do we solve having two output() functions? Simple. We stick each output() function in its own namespace.

			That would look something like this:
			<?php
			namespace MyProject;

			function output() {
				# Output HTML page
				echo 'HTML!';
			}
			?>
			<?php
			namespace RSSLibrary;

			function output(){
				# Output RSS feed
				echo 'RSS!';
			}
			?>

			Or we can declare that we're in one of the namespaces and then we can just call that namespace's output():
			<?php
			namespace MyProject;

			output(); # Output HTML page
			\RSSLibrary\output();
			?>

Static Keyword :- Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. 
			A property declared as static cannot be accessed with an instantiated class object (though a static method can).

			examples :- it can be used for functions like strtolower, strtoupper, ucwords, etc 
			so that they can be accessed anywhere in the app.

			a) Static Properties in PHP :-  Static properties cannot be accessed through the object using the arrow operator ->.
							   
				<?php
					class Foo
					{
						public static $my_static = 'foo';

						public function staticValue() {
							return self::$my_static;
						}
					}

					class Bar extends Foo
					{
						public function fooStatic() {
							return parent::$my_static;
						}
					}


					print Foo::$my_static . "\n";

					$foo = new Foo();
					print $foo->staticValue() . "\n";
					print $foo->my_static . "\n";      // Undefined "Property" my_static 

					print $foo::$my_static . "\n";
					$classname = 'Foo';
					print $classname::$my_static . "\n"; // As of PHP 5.3.0

					print Bar::$my_static . "\n";
					$bar = new Bar();
					print $bar->fooStatic() . "\n";
				?>
			

			b) Static Methods or functions :- You can create your function or method static using static keyword. 
			You can access all visible static methods for you using ::(scope resolution operator) like in static variables.

			Because static methods are callable without an instance of the object created, 
			the pseudo-variable $this is not available inside the method declared as static.
		
				<?php
					class Foo {
						public static function aStaticMethod() {
							// ...
						}
					}

					Foo::aStaticMethod();
					$classname = 'Foo';
					$classname::aStaticMethod(); // As of PHP 5.3.0
				?>

				<?php
					class test
					{
						private static $no_of_call = 0;
						public function __construct()
						{
							self::$no_of_call = self::$no_of_call + 1;
							echo "No of time object of the class created is: ". self::$no_of_call;
						}
					}
					$objT = new test(); // Prints No of time object of the class created is 1
					$objT2 = new test(); //Prints No of time object of the class created is 2
					$objT3 = new test(); //Prints No of time object of the class created is 3
				?>
		
			If you will use regular or normal method statically then you will get E_STRICT warning in PHP5 and E_DEPRECATED warning in PHP7.

								
			c) Static Variables :- Static variables maintain their value between function calls and are tidier than using a global variable because they cannot be 
				modified outside of the function. (If the function is contained within a class, you may be better using a private or 
				protected class variable instead of a static variable inside the function).

				Following is the basic example of static variable in php without class:
				
					<?php
						function keep_track() {
						STATIC $count = 0;
						$count++;
						print $count;
						print "<br />";
						}
							
						keep_track();
						keep_track();
						keep_track();
					?>
					
					This will produce the following result −
					
					1
					2
					3

		 _______________________________________________________________________________________________________________________________________________
		|																																				|
		|	Encapsulation, Polymorphism, Abstraction, Inheritance are four fundamental concepts of object-oriented programming.							|
		|_______________________________________________________________________________________________________________________________________________|


ABSTRACTION:- It have two view points

				1) Abstraction is selecting data from a larger pool to show only the relevant details to the object.
					It helps to reduce programming complexity and effort.
				2) Abstraction is a process of hiding the implementation details from the user, only the functionality will be provided to the user. 
					In other words, the user will have the information on what the object does instead of how it does it.

				In Java, abstraction is achieved using Abstract classes and interfaces (interface are well explained above, please check).

				Abstract Classes
				----------------

				Let’s put it like this, let’s say you have a standard employee hierarchy you want to implement, 
				you are going to have for e.g. a Chairman, Directors, Managers, Associates etc. Each of these is a type of 
				employee so your employee class will be the abstract base class which will contain all of the common shared 
				properties, methods etc. Now when you create your Manager class for e.g. it will inherit from the abstract 
				Employee class and automatically have all of the various properties, methods etc that Employee has. 
				If you think about it doesn't make sense to create an instance of an Employee class but it does to create 
				an instance of say the Manager class or an Associate class which makes it easy to know when to have a 
				abstract class, just ask yourself does it make sense to instantiate X type of class and if the answer is no 
				you are probably better off having it as an abstract class, this is not a hard and fast rule but a good guide. 
				Another benefit of having an abstract base class is if you need to make a change you only need to make it in 
				one place. This is only a very basic explanation and doesn’t cover all of the rules and reasons for abstract 
				classes but I hope it sheds a little light on it for you.

				An abstract class is a class that contains at least one abstract method, which is a method without any actual code in it, 
				just the name and the parameters, and that has been marked as "abstract".

				An abstract class thus is something between a regular class and a pure interface. 
				Also interfaces are a special case of abstract classes where ALL methods are abstract.

				# A class which contains the abstract keyword in its declaration is known as abstract class.

				# If a class has at least one abstract method, then the class must be declared abstract.

				# If a class is declared abstract, it cannot be instantiated.

				# To use an abstract class, you have to inherit it from another class, provide implementations to the abstract methods in it.

				# When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child.

				# Additionally, these methods must be defined with the same (or a less restricted) visibility. For example, 
					if the abstract method is defined as protected, the function implementation must be defined as either protected or public, but not private.

					Fore more details:- https://www.dyclassroom.com/php/php-oop-abstraction

				Example #1 Abstract class example
				---------------------------------
					
				<?php
				abstract class AbstractClass
				{
					// Force Extending class, to define this method
					abstract protected function getValue();
					abstract protected function prefixValue($prefix);

					// Common method
					public function printOut() 
					{
						print $this->getValue() . "\n";
					}
				}

				class ConcreteClass1 extends AbstractClass
				{
					protected function getValue()
					{
						return "ConcreteClass1";
					}

					public function prefixValue($prefix) 
					{
						return "{$prefix}ConcreteClass1";
					}
				}

				class ConcreteClass2 extends AbstractClass
				{
					public function getValue() 
					{
						return "ConcreteClass2";
					}

					public function prefixValue($prefix) 
					{
						return "{$prefix}ConcreteClass2";
					}
				}

				$class1 = new ConcreteClass1;
				$class1->printOut();
				echo $class1->prefixValue('FOO_') ."\n";

				$class2 = new ConcreteClass2;
				$class2->printOut();
				echo $class2->prefixValue('FOO_') ."\n";
				?>

					-------------------------------------
						Output :- 	ConcreteClass1
									FOO_ConcreteClass1
									ConcreteClass2
									FOO_ConcreteClass2
					-------------------------------------
						
					
				Example #2 Abstract class example with optional arguments
				----------------------------------------------------------

				<?php
				abstract class AbstractClass
				{
					// Our abstract method only needs to define the required arguments
					abstract protected function prefixName($name);
				}

				class ConcreteClass extends AbstractClass
				{
					// Our child class may define optional arguments not in the parent's signature
					public function prefixName($name, $separator = ".") 
					{
						if ($name == "Pacman")
						{
							$prefix = "Mr";
						} 
						elseif ($name == "Pacwoman") 
						{
							$prefix = "Mrs";
						} 
						else 
						{
							$prefix = "";
						}
						return "{$prefix}{$separator} {$name}";
					}
				}

				$class = new ConcreteClass;
				echo $class->prefixName("Pacman"), "\n";
				echo $class->prefixName("Pacwoman"), "\n";
				?>

				--------------------------------
					Output :- 	Mr. Pacman
								Mrs. Pacwoman
				--------------------------------


Polymorphism :- When same command is applied upon different objects gives you different results, this phenomenon is called as polymorphism.

				According to the Polymorphism principle, methods in different classes that do similar things should have the same name.
				
				Polymorphism describes a pattern in object oriented programming in which classes have different functionality while sharing a common interface.

				"A prime example is of classes that represent geometric shapes (such as rectangles, circles and octagons) that are different from each other 
				in the number of ribs and in the formula that calculates their area, but they all have in common an area that can be calculated by a method. 
				The polymorphism principle says that, in this case, all the methods that calculate the area (and it doesn't matter for which shape or class) 
				would have the same name.""
				
				In the programming world, polymorphism is used to make applications more modular and extensible. 
				Instead of messy conditional statements describing different courses of action, you create interchangeable objects that you select based on your needs.
				That is the basic goal of polymorphism.

				There are two types of Polymorphism; they are: 

				a) Compile time (function overloading)
				b) Run time (function overriding)
					
				But PHP "does not support" compile time polymorphism, which means function overloading and operator overloading.
				
				In PHP, we can achieve polymorphism by two methods
				
				a)Interface
				b)Inheritance
		
		
		a)INTERFACE
		  ---------
			
			An integral part of polymorphism is the common interface.
			An interface is similar to a class except that it cannot contain code. 
			An interface can define method names and arguments, but not the contents of the methods. 
			Any classes implementing an interface must implement all methods defined by the interface. 
			A class can implement multiple interfaces.
			An interface can be implemented by more than one class.
			All the methods in the interface must have public visibility level.
			
			An interface is declared using the 'interface' keyword:
			
				<?php
					interface MyInterface {
						// methods
					}
				?>
			
			and is attached to a class using the 'implements' keyword (multiple interfaces can be implemented by listing them separated with commas):
			
				<?php
					class MyClass implements MyInterface {
						// methods
					}
				?>
			
			Methods can be defined in the interface just like in a class, except without the body (the part between the braces):

				<?php
					interface MyInterface {
						public function doThis();
						public function doThat();
						public function setName($name);
					}
				?>
			
			
			All methods defined here will need to be included in any implementing classes exactly as described. (read the code comments below)

				<?php
					// VALID
					class MyClass implements MyInterface {
						protected $name;
						public function doThis() {
							// code that does this
						}
						public function doThat() {
							// code that does that
						}
						public function setName($name) {
							$this->name = $name;
						}
					}
					 
					// INVALID
					class MyClass implements MyInterface {
						// missing doThis()!
					 
						private function doThat() {
							// this should be public!
						}
						public function setName() {
							// missing the name argument!
						}
					}
				?>
			
			
			EXAMPLE OF POLYMORPHISM USING INTERFACE
			---------------------------------------
		
			<?php
				interface Shape {
					public function getArea();
				}

				class Square implements Shape {
					private $width;
					private $height;
			
					public function __construct($width, $height) {
						$this->width = $width;
						$this->height = $height;
					}
			
					public function getArea(){
						return $this->width * $this->height;
					}
				}

				class Circle implements Shape {
					private $radius;

					public function __construct($radius) {
					  $this->radius = $radius;
					}

					public function getArea(){
					  return 3.14 * $this->radius * $this->radius;
					}
				}
				
				//common interface for above two classes
				
				function calculateArea(Shape $shape) {
					return $shape->getArea();
				}

				$square = new Square(5, 5);
				$circle = new Circle(7);

				echo calculateArea($square), "<br/>";
				echo calculateArea($circle);
			?>		
		
		b)Inheritance
		  -----------
		
				Inheritance can be defined as the process where one class acquires the properties (methods and fields) of another class.
				Inheritance allows us to write the code only once in the parent, and then use the code in both the parent and the child classes.
				
				A class that is used as the basis for inheritance is called a superclass or base class. 
				A class that inherits from a superclass is called a subclass or derived class.
				
			TYPES OF INHERITANCE IN OOOPS :- There are total 5 types of inheritance, but php supports only single level inheritance.
			-----------------------------
			
					a)Single Inheritance :-		a->b
					
					b)Multiple Inheritance :-	a----|
													 |---->c		
												b----|

							As per above diagram, Class C extends Class A and Class B both.
												
					c)Hierarchical Inheritance :-						a
																		|
																	---------
																	|		|
																	b		c
																	|		|
																  -----   -----
																  |	  |   |   |
																  d   e   f   g
					
					
					d)Multilevel Inheritance :- a-->b-->c
					
					e)Hybrid Inheritance (also known as Virtual Inheritance)
					
				In single inheritance, by using the extend keyword a class can inherit methods and members of another base class (only one). 
				
			EXTEND KEYWORD
			---------------
		
			Extends is the keyword used to inherit the properties of a class. Following is the syntax of extends keyword.
				
				 _______________________________
				|								|
				|	class Super {				|
				|   	.....					|
				|   	.....					|
				|	}							|
				|	class Sub extends Super {	|
				|		.....					|
				|		.....					|
				|	}							|
				|_______________________________|
				
				The child class can make use of all the non-private methods and properties that it inherits from the parent class. 
				This allows us to write the code only once in the parent, and then use it in both the parent and the child classes.

				 _______________________________________________________________________________________________________________________________________
				|																																		|
				|	Note: Parent constructors are not called implicitly if the child class defines a constructor. In order to run a parent constructor, |
				|		a call to parent::__construct() within the child constructor is required. 														|
				|		If the child does not define a constructor then it may be inherited from the parent class just like a normal class method 		|
				|		(if it was not declared as private).																							|
				|_______________________________________________________________________________________________________________________________________|

				
				EXAMPLE OF POLYMORPHISM USING INHERITANCE
				---------------------------------------
				
				
				<?php

					class BaseClass {
					 public function myMethod() {
					 echo "BaseClass method called";
					 }
					}

					class DerivedClass extends BaseClass {
					 public function myMethod() {
					 echo "DerivedClass method called";
					 }
					}

					function processClass(BaseClass $c) {
					 $c->myMethod();
					}

					$c = new DerivedClass();
					processClass($c);

				?>



Encapsulation :- Encapsulation is the process of hiding data (attributes/properties) of a class from objects. This is to say, if a function or a method inside a class is private,
				   only objects of that class can access the method. The three access specifiers determine whether the methods are accessible to all classes 
				   or only the defining class or the friend class.
				   
		 _______________________________________________________________________________________________________________________________________________
		|																																				|
		|	Public - Scope to make that variable/function available from anywhere, other classes and instances of the object.							|
		|	Private - Scope when you want your variable/function to be visible in its own class only.													|
		|	Protected - Scope when you want to make your variable/function visible in all classes that extend current class including the parent class.	|
		|_______________________________________________________________________________________________________________________________________________|


		Data hiding is the main advantage for encapsulation.
		
		We can achieve encapsulation by making the class read only or write only by declaring all class properties/attributes private 
		and providing setter or getter method to acess or modify those properties.

		Getters and Setters :- You declare Getter and Setter functions in a class to get and to set the private properties of a class 
								which are inaccessible from outside.

		Some examples of encapsulation are
				
			1)Capsule is best example of Encapsulation. Capsule basically encapsulate several combination of medicines.
			2)Schoolbag is one of best example of Encapsulation. School bag can keep our books, pen etc.
			
		So finally the concept of Encapsulation in PHP is hiding internal information of object.
		

															 -----------------------------
															|							   |
															|  OVERRIDING AND OVERLOADING  |
															|							   |
															 -----------------------------						   
																
		
FUNCTION/METHOD OVERRIDING :- In real world, meaning of overriding, phenomena of replacing the same parental behavior in child.
				
								In oops overriding is a process by which you can re-declare your parent class method in child class. 
								So basic meaning of overriding in oops is to change behavior of your parent class methods.
								
								Function overriding occurs when you extend a class and rewrite a function which existed in the parent class.
									 ----------------------------------------------------------------------------------------------	
									|																								|	
									|	NOTE :- In this, function name remains same, but its method/functionality/output changes.	|
									|																								|	
									 -----------------------------------------------------------------------------------------------
				<?php
			
					class Foo {
					   function myFoo() {
						  return "Foo";
					   }
					}
			
					class Bar extends Foo {
					   function myFoo() {
						  return "Bar"; 
					   }
					}
			
					$foo = new Foo;
					$bar = new Bar;
					echo($foo->myFoo()); //"Foo"
					echo($bar->myFoo()); //"Bar"
				?>
			
FUNCTION OVERLOADING :- Overloading is defining functions that have similar signatures, yet have different parameters. 
							
							 -----------------------------------------------------------------------------------------------	
							|																								|	
							|		NOTE :- In this, function name remains same, but passed arguments are changed.			|
							|																								|	
							 -----------------------------------------------------------------------------------------------
							 
							Function overloading occurs when you define the same function name twice (or more) using different set of parameters. For example:
							
							<?
								class Addition {
								  function compute($first, $second) {
									return $first+$second;
								  }

								  function compute($first, $second, $third) {
									return $first+$second+$third;
								  }
								}
							?>
								
							In the example above, the function compute is overloaded with two different parameter signatures.
							This is not yet supported in PHP. An alternative is to use optional arguments:
							
							<?php
								class Addition {
								  function compute($first, $second, $third = 0) {
									return $first+$second+$third;
								  }
								}
							?>				
							
FINAL KEYWORD :-PHP 5 introduces the final keyword, which prevents child classes from overriding a method by prefixing the definition with final. 
				If the class itself is being defined final then it cannot be extended.
			
			
			Example #1 Final methods example
			________________________________
			
			
			<?php
				class BaseClass {
				   public function test() {
					   echo "BaseClass::test() called\n";
				   }
				   
				   final public function moreTesting() {
					   echo "BaseClass::moreTesting() called\n";
				   }
				}

				class ChildClass extends BaseClass {
				   public function moreTesting() {
					   echo "ChildClass::moreTesting() called\n";
				   }
				}
				
				// Results in Fatal error: Cannot override final method BaseClass::moreTesting()
			?>
			
			Example #2 Final class example
			______________________________
			
			<?php
				final class BaseClass {
				   public function test() {
					   echo "BaseClass::test() called\n";
				   }

				   // Here it doesn't matter if you specify the function as final or not
				   final public function moreTesting() {
					   echo "BaseClass::moreTesting() called\n";
				   }
				}

				class ChildClass extends BaseClass {
				}
				
				// Results in Fatal error: Class ChildClass may not inherit from final class (BaseClass)
			?>
			
Constructors :-A constructor and a destructor are special functions which are automatically called when an object is created and destroyed. 
				The constructor is the most useful of the two, especially because it allows you to send parameters along when creating a new object, 
				which can then be used to initialize variables on the object. Here's an example of a class with a simple constructor:
									
									
				 ___________________________________________
				|											|
				|	<?php									|
				|	class Animal							|
				|	{										|
				|		public function __construct($name)	|
				|		{									|
				|			$this->name = $name;			|
				|		}									|
				|	}										|
				|											|
				|	$animal = new Animal("Bob the Dog");	|
				|	echo $animal->name;						|
				|	?>										|
				|___________________________________________|	
				
				Output :- Bob the Dog
				
Destructors :-A destructor is called when the object is destroyed. In some programming languages, you have to manually dispose of objects you created, but in PHP, 
				it's handled by the Garbage Collector, which keeps an eye on your objects and automatically destroys them when they are no longer needed. 
				Have a look at the following example, which is an extended version of our previous example:
									
									
				 ___________________________________________________
				|													|
				|	<?php											|
				|	class Animal									|
				|	{												|
				|		public function __construct($name)			|
				|		{											|
				|			echo "I'm alive!";    					|
				|			$this->name = $name;					|
				|		}											|
				|													|
				|		public function __destruct()				|
				|		{											|
				|			echo "I'm dead now :(";					|
				|		}											|
				|	}												|
				|													|
				|	$animal = new Animal("Bob");					|
				|	echo "Name of the animal: " . $animal->name;	|
				|	?>												|
				|___________________________________________________|
					
					Output :- I'm alive!Name of the animal: BobI'm dead now :(

					
Web service :- A web service is a service offered by an electronic device to another electronic device, communicating with each other via the World Wide Web. 
			In a Web service, Web technology such as HTTP (originally designed for human-to-machine communication), is utilized for machine-to-machine communication 
			(i.e.for transferring machine readable file formats such as XML and JSON).


Design Principles :- Design patterns are typical solutions to commonly occurring problems in software design. 
			They are like pre-made blueprints that you can customize to solve a recurring design problem in your code.
			The pattern is not a specific piece of code, but a general concept for solving a particular problem. 
			You can follow the pattern details and implement a solution that suits the realities of your own program.

			When a solution gets repeated over and over in various projects, someone eventually puts a name to it and describes the solution in detail. 
			That’s basically how a pattern gets discovered. 

			There are three main groups of patterns:

			1> Creational patterns :- provide object creation mechanisms that increase flexibility 
										and reuse of existing code.

				a) Singleton Design Pattern:- 

			2> Structural patterns :- explain how to assemble objects and classes into larger structures, 
										while keeping the structures flexible and efficient.

			3> Behavioral patterns :- take care of effective communication and the assignment of responsibilities 
										between objects.


Need for using SOLID Principles and Design Patterns and Fundamental Principles
-------------------------------

* Maintainability
* Testability
* Flexibility and Extensibility
* Parallel Development
* Loose Coupling