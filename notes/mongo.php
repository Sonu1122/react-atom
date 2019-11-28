<MongoDB>
-------

MongoDB is an open-source document database and leading NoSQL database. It is written in C++. 
It is a cross-platform, document oriented database that provides, high performance, high availability, and easy scalability. 
It works on concept of collection and document.

<Binary JSON (BSON)>
------------------
MongoDB represents JSON documents in binary-encoded format called BSON behind the scenes. BSON extends the JSON model to provide additional data types, 
ordered fields, and to be efficient for encoding and decoding within different languages.

MongoDB, BSON, and JSON
The MongoDB BSON implementation is lightweight, fast and highly traversable. Like JSON, MongoDB's BSON implementation supports embedding objects 
and arrays within other objects and arrays – MongoDB can even 'reach inside' BSON objects to build indexes and match objects against query expressions on both top-level and nested BSON keys. This means that MongoDB gives users the ease of use and flexibility of JSON documents together with the speed and richness of a lightweight binary format.

<NoSQL (Not Only SQL database)>
-----------------------------

NoSQL is an approach to database design that can accomodate a wide variety of data models, including key-value, document, columnar and graph formats. 
NoSQL, which stand for "not only SQL," is an alternative to traditional relational databases in which data is placed in tables and 
data schema is carefully designed before the database is built. NoSQL databases are especially useful for working with large sets of distributed data.

-> Database
-----------
Database is a physical container for collections. Each database gets its own set of files on the file system. 
A single MongoDB server typically has multiple databases.

-> Collection
-------------
Collection is a group of MongoDB documents. It is the equivalent of an RDBMS table. A collection exists within a single database. 
Collections do not enforce a schema. Documents within a collection can have different fields.
Typically, all documents in a collection are of similar or related purpose.

-> Document
-----------
A document is a set of key-value pairs. Documents have dynamic schema. 
Dynamic schema means that documents in the same collection do not need to have the same set of fields or structure, 
and common fields in a collection's documents may hold different types of data.


The following table shows the relationship of RDBMS terminology with MongoDB.

----------------------------------------------------------------------------------------------------|
RDBMS                 |              MongoDB                                                        |
----------------------------------------------------------------------------------------------------|
Database	            |              Database                                                       |
Table	              |              Collection                                                     |
Tuple/Row	          |              Document                                                       |
column	              |              Field                                                          |
Table Join	          |              Embedded Documents                                             |
Primary Key	          |              Primary Key (Default key _id provided by mongodb itself)       |
-----------------------------------------------------------------------------------------------------

<Sample Document>
---------------

Following example shows the document structure of a blog site, which is simply a comma separated key value pair.

{
   _id: ObjectId(7df78ad8902c)
   title: 'MongoDB Overview', 
   description: 'MongoDB is no sql database',
   by: 'tutorials point',
   url: 'http://www.tutorialspoint.com',
   tags: ['mongodb', 'database', 'NoSQL'],
   likes: 100, 
   comments: [	
      {
         user:'user1',
         message: 'My first comment',
         dateCreated: new Date(2011,1,20,2,15),
         like: 0 
      },
      {
         user:'user2',
         message: 'My second comments',
         dateCreated: new Date(2011,1,25,7,45),
         like: 5
      }
   ]
}

_id is a 12 bytes hexadecimal number which assures the uniqueness of every document. You can provide _id while inserting the document. 
If you don’t provide then MongoDB provides a unique id for every document. 
These 12 bytes first 4 bytes for the current timestamp, next 3 bytes for machine id, next 2 bytes for process id of MongoDB server and 
remaining 3 bytes are simple incremental VALUE.

<Advantages of MongoDB over RDBMS>
--------------------------------

Schema less − MongoDB is a document database in which one collection holds different documents. Number of fields, content and size of the document 
                can differ from one document to another.
Deep query ability − MongoDB supports dynamic queries on documents using a document-based query language that's nearly as powerful as SQL.
Ease of scale-out − MongoDB is easy to scale.

<Capped collection>
-----------------
Capped collection is a fixed size collection that automatically overwrites its oldest entries when it reaches its maximum size. 
If you specify true, you need to specify size parameter also.

<MongoDB - Datatypes>
-------------------

MongoDB supports many datatypes. Some of them are −

    -->String − This is the most commonly used datatype to store the data. String in MongoDB must be UTF-8 valid.

    -->Integer − This type is used to store a numerical value. Integer can be 32 bit or 64 bit depending upon your server.

    -->Boolean − This type is used to store a boolean (true/ false) value.

    -->Double − This type is used to store floating point values.

    -->Min / Max keys − This type is used to compare a value against the lowest and highest BSON elements.

    -->Arrays − This type is used to store arrays or list or multiple values into one key.

    -->Timestamp − ctimestamp. This can be handy for recording when a document has been modified or added.

    -->Object − This datatype is used for embedded documents.

    -->Null − This type is used to store a Null value.

    -->Symbol − This datatype is used identically to a string; however, it's generally reserved for languages that use a specific symbol type.

    -->Date − This datatype is used to store the current date or time in UNIX time format. You can specify your own date time by creating object of Date 
                and passing day, month, year into it.

    -->Object ID − This datatype is used to store the document’s ID.

    -->Binary data − This datatype is used to store binary data.

    -->Code − This datatype is used to store JavaScript code into the document.

    -->Regular expression − This datatype is used to store regular expression.

<MongoDB CRUD Operations>
---------------

-> db.help

Show list of databases
-> show dbs

Select Database
-> use shopkart

Delete database
-> db.dropDatabase('test')

Create collection
-> db.createCollection('test')

Show collections
-> show collections

Delete collection
-> db.COLLECTION_NAME.drop()

Insert one document
-> db.COLLECTION_NAME.insertOne({'<key>':<value>,'<key>':'<value>'})

Insert more than one document
-> db.COLLECTION_NAME.insertMany([{'<key>':<value>,'<key>':'<value>'},{'<key>':<value>,'content':'<value>'}])

Find all document in a collection
-> db.COLLECTION_NAME.find();

Find all document in a collection in human readable format
-> db.COLLECTION_NAME.find().pretty();

Delete documents from collection 
-> db.COLLECTION_NAME.remove({'<key>':'<value>'});

Select documents with 'and' condition (a=b and c=d)
-> db.COLLECTION_NAME.find({$and:[{'<key>':'<value>'},{'<key>':'<value>'}]})

Select documents with 'or' condition (a=b or c=d)
-> db.COLLECTION_NAME.find({$or:[{'<key>':'<value>'},{'<key>':'<value>'}]})

Select documents where a=b and (c=d or e=f)
-> db.COLLECTION_NAME.find({'<key>':'<value>',$or:[{'<key>':'<value>'},{'<key>':'<value>'}]})

Select documents where (a=b and c=d) and (e=f or g=h)
-> db.COLLECTION_NAME.find({$and:[{'<key>':'<value>'},{'<key>':'<value>'}],$or:[{'<key>':'<value>'},{'<key>':'<value>'}]})

Select documents from an array with exact match
-> db.COLLECTION_NAME.find({'<key>':['<value>','<value>','<value>']})

Select documents from an array with atleast a specified match
-> db.COLLECTION_NAME.find({'<key>':{$all:['<value>']}})

To query the document on the basis of some condition, you can use following operations(RDBMS Where Clause Equivalents in MongoDB).

 ------------------------------------------------------------------------------------------------------------------------------------------------
|  Operation	         |   Syntax                 |     Example                                            |      RDBMS Equivalent              |
 ------------------------------------------------------------------------------------------------------------------------------------------------
|  Equality	            |   {<key>:<value>}	      |     db.mycol.find({"by":"tutorials point"}).pretty()	|      where by = 'tutorials point'  |
|  Less Than	         |   {<key>:{$lt:<value>}}	|     db.mycol.find({"likes":{$lt:50}}).pretty()	      |      where likes < 50              |
|  Less Than Equals	   |   {<key>:{$lte:<value>}}	|     db.mycol.find({"likes":{$lte:50}}).pretty()	      |      where likes <= 50             |
|  Greater Than	      |   {<key>:{$gt:<value>}}	|     db.mycol.find({"likes":{$gt:50}}).pretty()	      |      where likes > 50              |
|  Greater Than Equals	|   {<key>:{$gte:<value>}}	|     db.mycol.find({"likes":{$gte:50}}).pretty()	      |      where likes >= 50             |
|  Not Equals	         |   {<key>:{$ne:<value>}}	|     db.mycol.find({"likes":{$ne:50}}).pretty()	      |      where likes != 50             |
 ------------------------------------------------------------------------------------------------------------------------------------------------

Select documents from a collection using In clause
-> db.COLLECTION_NAME.find({'<key>':{$in:['<value>','<value>']}})

Select documents from a embedded/nested document (exact match from an object)
-> db.COLLECTION_NAME.find({'<key>':[{ "<operator1>" : "<value1>", "<operator2>" : "<value2>", "<operator3>" : <value3> }]})

Select documents from a embedded/nested document (w/o exact match from an object)
-> db.COLLECTION_NAME.find({'<key.operator>':'<value>'})
-> db.posts.find({'comments.likes':{$gt:10}})

Select documents using Wild Card (LIKE) - it is done using regular expressions (SQL's '%' operator is equivalent to Regexp's '.*')
-> db.COLLECTION_NAME.find({'<key>':/.*<value>.*/})

MongoDB - Update Document
-------------------------

MongoDB's update() and save() methods are used to update document into a collection. 
The update() method updates the values in the existing document while the save() method replaces the existing document with the document passed in save() method.

-> db.COLLECTION_NAME.update({'<key>','<value>'})
-> db.COLLECTION_NAME.save({'<key>','<value>'})

By default, MongoDB will update only a single document. To update multiple documents, you need to set a parameter 'multi' to true.

-> db.COLLECTION_NAME.update({'<key>','<value>'},{multi:true})

Update Operators
----------------

a) Field Update Operators

-----------------------------------------------------------------------------------------------------------------
Name	        |   Description                                                                                  |
-----------------------------------------------------------------------------------------------------------------
$currentDate  |    Sets the value of a field to current date, either as a Date or a Timestamp.                 |
$inc	        |    Increments the value of the field by the specified amount.                                  |
$min	        |    Only updates the field if the specified value is less than the existing field value.        |
$max	        |    Only updates the field if the specified value is greater than the existing field value.     |
$mul	        |    Multiplies the value of the field by the specified amount.                                  |
$rename	        |    Renames a field.                                                                            |
$set	        |    Sets the value of a field in a document.                                                    |
$setOnInsert	|    Sets the value of a field if an update results in an insert of a document.                  |
                     Has no effect on update operations that modify existing documents.                          |
$unset	        |    Removes the specified field from a document.                                                |
-----------------------------------------------------------------------------------------------------------------

b) Array Update Operators

--------------------------------------------------------------------------------------------------------------------
Name	        |    Description                                                                                    |
--------------------------------------------------------------------------------------------------------------------
$	            |    Acts as a placeholder to update the first element that matches the query condition.            |
$[]	            |    Acts as a placeholder to update all elements in an array for the documents that match          |
                     the query condition.                                                                           |
$[<identifier>]	|    Acts as a placeholder to update all elements that match the arrayFilters condition for         |
                     the documents that match the query condition.                                                  |
$addToSet	    |    Adds elements to an array only if they do not already exist in the set.                        |
$pop	        |    Removes the first or last item of an array.                                                    |
$pull	        |    Removes all array elements that match a specified query.                                       |
$push	        |    Adds an item to an array.                                                                      |
$pullAll	    |    Removes all matching values from an array.                                                     |
---------------------------------------------------------------------------------------------------------------------

c) Modifiers

---------------------------------------------------------------------------------------------------------------------
Name	        |    Description                                                                                     |
---------------------------------------------------------------------------------------------------------------------
$each	        |    Modifies the $push and $addToSet operators to append multiple items for array updates.          |
$position	    |    Modifies the $push operator to specify the position in the array to add elements.               |
$slice	        |    Modifies the $push operator to limit the size of updated arrays.                                |
$sort	        |    Modifies the $push operator to reorder documents stored in an array.                            |
---------------------------------------------------------------------------------------------------------------------

MongoDB - Projection
--------------------

In MongoDB, projection means selecting only the necessary data rather than selecting whole of the data of a document. 
If a document has 5 fields and you need to show only 3, then select only 3 fields from them.

-> db.COLLECTION_NAME.find({},{<key>:1})

MongoDB - Limit Records
-----------------------

To limit the records in MongoDB, you need to use limit() method. 
The method accepts one number type argument, which is the number of documents that you want to be displayed.

-> db.COLLECTION_NAME.find().limit(NUMBER)

MongoDB - Sort Records
-----------------------

To sort documents in MongoDB, you need to use sort() method. The method accepts a document containing a list of fields along with their sorting order. 
To specify sorting order 1 and -1 are used. 1 is used for ascending order while -1 is used for descending order.

-> db.COLLECTION_NAME.find().sort({KEY:1})