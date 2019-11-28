A storage engine is a software that is used by a database management system to create, read, and update data from a database. 
MySQL provides various storage engines for its tables as below:

1)	MyISAM
	------

		a)	The MyISAM tables are optimized for compression and speed.
		b)	The size of MyISAM table can be up to 256TB, which is huge. 
		c)	At startup, MySQL checks MyISAM tables for corruption and even repairs them in a case of errors.
		d)	The MyISAM tables are not transaction-safe.
		e)	Provide table-level locking.
		f)  Foreign key not supported.
		g)  can be compressed into read-only tables to save spaces
		

2)	InnoDB
	------

		a)	The InnoDB tables fully support ACID-compliant and transactions.
		b)	InnoDB table supports foreign keys, commit, rollback, roll-forward operations.
		c)	The size of an InnoDB table can be up to 64TB.
		d)	Like MyISAM, the InnoDB tables are portable between different platforms and operating systems. 
		e)	MySQL also checks and repairs InnoDB tables, if necessary, at startup.
		
		 -------------------
		|					|
		|  ACID PROPERTIES	|
		|					|
		 -------------------
		 
		>>	Atomicity:-	In a transaction involving two or more discrete pieces of information, either all of the pieces are committed or none are.
			---------

		>>	Consistency:- A transaction either creates a new and valid state of data, or, if any failure occurs, returns all data to its state before the transaction was started.
			-----------

		>>	Isolation:-	A transaction in process and not yet committed must remain isolated from any other transaction.
			---------
			
		>>	Durability:- The durability property ensures that once a transaction has been committed, it will remain so, even in the event of power loss, crashes, or errors.
			----------
		
		
3)	MERGE
	-----
		
		a)	A MERGE table is a virtual table that combines multiple MyISAM tables that have a similar structure into one table.
		b)	The MERGE table does not have its own indexes; it uses indexes of the component tables instead.
		c)	Using MERGE table, you can speed up performance when joining multiple tables.
		d)	MySQL only allows you to perform SELECT, DELETE, UPDATE and INSERT operations on the MERGE tables. 
		e)	If you use DROP TABLE statement on a MERGE table, only MERGE specification is removed. The underlying tables will not be affected.
		

4)	ARCHIVE
	-------

		a)	The archive storage engine allows you to store a large number of records, into a compressed format to save disk space. 
		b)	The archive storage engine compresses a record when it is inserted and decompress it using the zlib library as it is read.
		c)	The archive tables only allow INSERT and SELECT statements. 
		d)	The ARCHIVE tables do not support indexes, so it is required a full table scanning for reading rows.

5)	CSV
	---
	
	a)	The CSV storage engine stores data in comma-separated values (CSV) file format. 
	b)	A CSV table brings a convenient way to migrate data into non-SQL applications such as spreadsheet software.
	c)	CSV table does not support NULL data type. In addition, the read operation requires a full table scan.