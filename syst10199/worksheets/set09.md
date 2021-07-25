[previous](set08.md) 
: **Worksheet Set 9**
: [next](set10.md)


## Key terms and concepts to understand
> &bull; Javascript  &bull; imperative programming  &bull; variable  &bull; value  &bull; literal  &bull; IPO operator &bull; expression  &bull; keyword  &bull; identifier  &bull;  data type &bull; strict mode  &bull; console  &bull;  algorithm  &bull; object-oriented programming  &bull; computer application  &bull;  text editor  &bull; client/server  &bull;  type conversion  &bull; function &bull method &bull;
> 
---



# 🚧 Under construction. 

## Read and analyze (analytical reading)
Observe and describe. Make notes. Explore the links provided in the material. Document what you have learned. When you come to an example, make your own version and explore it deeply. “Curiosity Is the engine of achievement.” —Sir Ken Robinson

### [SQL database language and MySQL](https://ebajcar.github.io/web10199/material/material_databases.html#) 
- Database primer
- Using phpMyAdmin Tool
- MySQL Database management System
- PHP Data Objects (PDO) and MySQL
- SQL Database Language

### MySQL Database

- [MySQL Tutorial @ w3schools](https://www.w3schools.com/mysql/default.asp)
- [Introduction to MySQL](https://www.w3schools.com/mysql/mysql_intro.asp)
- [MySQL RDBMS](https://www.w3schools.com/mysql/mysql_rdbms.asp)
- [MySQL CREATE DATABASE Statement](https://www.w3schools.com/mysql/mysql_create_db.asp)
- [The MySQL DROP DATABASE Statement](https://www.w3schools.com/mysql/mysql_drop_db.asp)
- [MySQL CREATE TABLE Statement](https://www.w3schools.com/mysql/mysql_create_table.asp)
- [MySQL DROP TABLE Statement](https://www.w3schools.com/mysql/mysql_drop_table.asp)
- [MySQL Constraints](https://www.w3schools.com/mysql/mysql_constraints.asp)
- [MySQL NOT NULL Constraint](https://www.w3schools.com/mysql/mysql_notnull.asp)
- [MySQL UNIQUE Constraint](https://www.w3schools.com/mysql/mysql_unique.asp)
- [MySQL PRIMARY KEY Constraint](https://www.w3schools.com/mysql/mysql_primarykey.asp)
- [MySQL FOREIGN KEY Constraint](https://www.w3schools.com/mysql/mysql_foreignkey.asp)
- [MySQL AUTO INCREMENT Field](https://www.w3schools.com/mysql/mysql_autoincrement.asp)


### SQL Language
- [MySQL SQL](https://www.w3schools.com/mysql/mysql_sql.asp)
- [MySQL SELECT Statement](https://www.w3schools.com/mysql/mysql_select.asp)
- [MySQL WHERE Clause](https://www.w3schools.com/mysql/mysql_where.asp)
- [MySQL ORDER BY Keyword](https://www.w3schools.com/mysql/mysql_orderby.asp)
- [MySQL INSERT INTO Statement](https://www.w3schools.com/mysql/mysql_insert.asp)
- [MySQL UPDATE Statement](https://www.w3schools.com/mysql/mysql_update.asp)
- [MySQL DELETE Statement](https://www.w3schools.com/mysql/mysql_delete.asp)
- [MySQL COUNT(), AVG() and SUM() Functions](https://www.w3schools.com/mysql/mysql_count_avg_sum.asp)
- [MySQL LIKE Operator](https://www.w3schools.com/mysql/mysql_like.asp)
- [MySQL Wildcards](https://www.w3schools.com/mysql/mysql_wildcards.asp)
- [MySQL Data Types](https://www.w3schools.com/mysql/mysql_datatypes.asp)
- [MySQL Comments](https://www.w3schools.com/mysql/mysql_comments.asp)


 ### dev.fast.sheridanc.on.ca Server
 
 - [Accessing cPanel off-campus](https://share.vidyard.com/watch/3gdnQsTP1L6CBJsyhRGWEU?)
 - [Using phpMyadmin - introduction](https://share.vidyard.com/watch/pnMPft49epWVZUW5wwtsNP?)
 - [Creating a database](https://share.vidyard.com/watch/fm3LLNWqLdE2igybs7XzJW?)
 - [Using phpMyAdmin](https://docs.google.com/presentation/d/1urjt2XYhK6lYhbnliHItXcqR1YJsTUlBg-LD_HEOmtM/edit?usp=sharing)
 - [Using NppFTP plugin for Notepad++](https://docs.google.com/presentation/d/1PKOd280CTncLTCt6lVViehX4VIAenkliytauEMyKGJ8/edit?usp=sharing)
 - [SQL Database Language](https://docs.google.com/presentation/d/1B-LP4QXjzS5WqR9m9d6M5K6M-NJY7WvVH3iQqVI9_8I/edit?usp=sharing)
 - [Regular expressions (REGEX)](https://docs.google.com/presentation/d/1GcQDqW8Rt65JNguCD3_WBzFpdU6HrGs2Tr1W4OrLNwk/edit?usp=sharing)


 ## Exercises

### using [The Try-MySQL Editor @ w3schools](https://www.w3schools.com/mysql/trymysql.asp?filename=trysql_select_columns) develop SQL statement to
- select everything in the Customers table
- select all records that contain "ee" in Categories' Description
- select 


### on dev.fast, using phpMyAdmin tool,
1. create database `exercises` (**note**: it will be preceded by "yourusername_"; you have a limit of 5 databases)
2. create `Customers` table with the same field names as Try-MySQL Editor
3. insert 
```sql
INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');
```
4. choose at least 4 more records and insert 
5. update one of the 5 records, for example
```sql
UPDATE Customers
SET ContactName = 'Alfred Schmidt', City = 'Frankfurt'
WHERE CustomerID = 1;
```
6. update any two records to change the city to Toronto
7. delete all records where city is Toronto
```sql
DELETE FROM Customers WHERE City='Toronto';
```
8.
9. 
- []()
- []()
  
---
> *The materials provided in class and in SLATE are protected by copyright. They are intended for the personal, educational uses of students in this course and should not be shared externally or on websites such as Course Hero or OneClass. Unauthorized distribution may result in copyright infringement and violation of Sheridan policies.*
> 
> **SYST10199 Web Programming @ Sheridan College**
