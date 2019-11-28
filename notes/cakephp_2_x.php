
CakePHP is a free , open-source , rapid development framework for PHP. CakePHP started in April 2005. It has following features

• Integrated CRUD 28 for database interaction
• Application scaffolding 29
• Code generation
• MVC 30 architecture
• Built-in validation 31
• Fast and flexible templating 32 (PHP syntax, with helpers)
• View helpers for AJAX, JavaScript, HTML forms and more
• Email, cookie, security, session, and request handling Components
• Flexible ACL 33

Server requirements for CakePHP
===============================

a) HTTP Server. For example: Apache. mod_rewrite is preferred, but by no means required.

b) PHP 5.3.0 or greater (CakePHP version 2.6 and below support PHP 5.2.8 and above). CakePHP version 2.8.0 and above support PHP 7. To use PHP above 7.1 you may need to install mcrypt via PECL. See Security for more information.

c)Technically a database engine isn’t required, but we imagine that most applications will utilize one. CakePHP supports a variety of database storage engines:

	MySQL (4 or greater)
	PostgreSQL
	Microsoft SQL Server
	SQLite


CakePHP Folder Structure
========================	

After you’ve downloaded and extracted CakePHP, these are the files and folders you should see:

app
lib
vendors
plugins
.htaccess
index.php
README

You’ll notice three main folders:

a) The app folder will be where you work your magic: it’s where your application’s files will be placed.
b) The lib folder is where we’ve worked our magic. Make a personal commitment not to edit files in this folder. We can’t help you if you’ve modified the core.Instead, look into modifying Application Extensions.
c) Finally, the vendors folder is where you’ll place third-party PHP libraries you need to use with your CakePHP applications.

The App Folder
--------------
CakePHP’s app folder is where you will do most of your application development. Let’s look a little closer at the folders inside app.

#Config :- Holds the (few) configuration files CakePHP uses. Database connection details, bootstrapping, core configuration files and more should be stored here.

#Console :- Contains the console commands and console tasks for your application. This directory can also contain a Templates directory to customize the output of bake. For more information see Shells, Tasks & Console Tools.

#Controller :- Contains your application’s controllers and their components.

#Lib :- Contains libraries that do not come from 3rd parties or external vendors. This allows you to separate your organization’s internal libraries from vendor libraries.

#Locale :- Stores string files for internationalization.

#Model :- Contains your application’s models, behaviors, and datasources.

#Plugin :- Contains plugin packages.

#Test :- This directory contains all the test cases and test fixtures for your application. The Test/Case directory should mirror your application and contain one or more test cases per class in your application. For more information on test cases and test fixtures, refer to the Testing documentation.

#tmp :- This is where CakePHP stores temporary data. The actual data it stores depends on how you have CakePHP configured, but this folder is usually used to store model descriptions, logs, and sometimes session information.

Make sure that this folder exists and is writable, or the performance of your application will be severely impacted. In debug mode, CakePHP will warn you if the folder is absent or not writable.

#Vendor :- Any third-party classes or libraries should be placed here. Doing so makes them easy to access using the App::import(‘vendor’, ‘name’) function. Keen observers will note that this seems redundant, as there is also a vendors folder at the top level of our directory structure. We’ll get into the differences between the two when we discuss managing multiple applications and more complex system setups.

#View :- Presentational files are placed here: elements, error pages, helpers, layouts, and view files.

#webroot :- In a production setup, this folder should serve as the document root for your application. Folders here also serve as holding places for CSS stylesheets, images, and JavaScript files.



																		-------------
																	   | Controllers |
																		-------------

The App Controller
==================

The AppController class is the parent class to all of your application’s controllers.
AppController itself extends the Controller class included in the CakePHP core library. 
Controller attributes and methods created in your AppController will be available to all of your application’s controllers.

Note: CakePHP merges the following variables from the AppController into your application’s controllers:
• $components
• $helpers
• $uses

Request Life-cycle callbacks
============================

a) Controller::beforeFilter() :- This function is executed before every action (function) in the controller. It’s a handy place to check for an active session or inspect user permissions.

b) Controller::beforeRender() :- Called after controller action (function) logic, but before the view is rendered. This callback is not used often, but may be needed if you are calling render() manually before the end of a given action.

c) Controller::afterFilter() :- Called after every controller action, and after rendering is complete. This is the last controller method to run.

Interacting with Views
======================

a) Controller::set() :- The set() method is the main way to send data from your controller to your view.

b) Controller::render() :- The render() method is automatically called at the end of each requested controller action. This method performs all the view logic, places the view inside its $layout, and serves it back to the end user. 

Although CakePHP will automatically call it after every action’s logic (unless you’ve set $this->autoRender to false), you can use it to specify an alternate view file by specifying a view name in the controller using $view.

Other Useful Methods
====================

a) Controller::paginate() :- This method is used for paginating results fetched by your models. You can specify page sizes, model find conditions and more.
b) Controller::loadModel() :- The loadModel() function comes handy when you need to use a model which is not the controller’s default model or its associated model.

$components, $helpers and $uses
===============================

a) Controller::$uses :- Controllers have access to their primary model available by default. However, when allowing a controller to access additional models --------------------	 through the $uses variable, the name of the current controller’s model must also be included.

b) Controller::$helpers :- The HtmlHelper, FormHelper, and SessionHelper are available by default, as is the SessionComponent. But if you choose to define your own -----------------------	   $helpers array in AppController, make sure to include HtmlHelper and FormHelper if you want them still available by default in your 								   Controllers. To learn more about these classes, be sure to check out their respective sections later in this manual.

c) Controller::$components :- Components are packages of logic that are shared between controllers. CakePHP comes with a fantastic set of core components you can --------------------------	use to aid in various common tasks.

Types of components :-

a)Pagination
b)Flash
c)Sessions
d)Security
e)Request Handling
f)Cookie
g)Authentication :- Authentication is the process of identifying users by provided credentials and ensuring that users are who they say they are. Generally this is 					  done through a username and password, that are checked against a known list of users. In CakePHP, there are several built-in ways of 								  authenticating users stored in your application.

					Types of Authentication :-

					1) FormAuthenticate allows you to authenticate users based on form POST data. Usually this is a login form that users enter information into.
					2) BasicAuthenticate allows you to authenticate users using Basic HTTP authentication.
					3) DigestAuthenticate allows you to authenticate users using Digest HTTP authentication.

					By default AuthComponent uses FormAuthenticate.

h)Access Control Lists