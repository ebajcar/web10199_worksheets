# Worksheet 9

#### SYST10199 Web Programming

Explore, study, and make notes on material for Week 9 on SLATE Content.
Share and discuss on Piazza Q&A.

## Develop an answer to the following questions:

1. A point in 2D space has a pair of values (x,y); a rectangular area can be described with four (4) vertices (points). Declare and initialize an array called rect which stores the vertices (2,3), (15,3), (2,10), and (15,10)

2. Declare and initialize an array called family that contains the values: Charlie, John, Helen, Omar, Harry, Olivia, Anna, and Peter.

3. What are the differences and similarities between the client session and the server session?

4. What are the differences and similarities between POST and GET methods?

5. What programming approach allows you to organize code better and to take advantage of encapsulation and inheritance, sometimes at the expense of performance?

6. Using the PHP expression tag, display the value of variable foobar.

7. Using the PHP expression tag, display the sum of variables x and y.

8. What is returned by the following function when the values are $a = 7; $b = 8; $c = 5;?

```php
function ($a,$b,$c) { return $a.$b.$c; }
```

9. What is returned by the following function when the values are $a = 7; $b = 8; $c = 5;?
```php
function ($a,$b,$c) { return $a+$b+$c; }
```

10. What will be the output of the following:
```php
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
    case "blue":
        echo "Your favorite color is blue!";
    case "green":
        echo "Your favorite color is green!"; break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
```

11. What will be the output of the following:

```php
echo str_word_count("Hello world!"); 
```


## Exercises
Create the following tables on dev.fast.sheridanc.on.ca using phpmyadmin tool:

#### Exercise 1
Create a table named “customer” in your “username_exercises” database, using phpMyAdmin on dev.fast.sheridanc.on.ca.  The table has 5 fields

1. a primary key, id, which is system-generated
2. User’s first name, allow up to length of 30 characters
3. User’s last name, allow up to length of 30 characters
4. User’s social insurance number, sin, a fixed length of 9 characters
5. User’s gender, an enumeration  enum('male', 'female', 'other', '') 


#### Exercise 2
Create a table named “scores” in your “username_exercises” database, using phpMyAdmin on dev.fast.sheridanc.on.ca.  The table has 4 fields

1. a primary key, id, which is system-generated
2. User’s player name, allow up to length of 30 characters
3. User’s date played.
4. User’s score, an integer

#### Exercise 3
Create a table named “student” in your “username_exercises” database, using phpMyAdmin on dev.fast.sheridanc.on.ca.  The table has 7 fields

1. a primary key, id, which is system-generated
2. Student’s firstname, allow up to length of 30 characters
3. Student’s lastname, allow up to length of 30 characters
4. Student’s grade point average, gpa, an integer
5. Student’s gender, an enumeration  enum('male', 'female', 'other', ‘’) 
6. Student’s enrollment date.
7. Student’s number, sid, a fixed-length of 8 characters

#### Exercise 4
Create a table named “member” in your “username_exercises” database, using phpMyAdmin on dev.fast.sheridanc.on.ca.  The table has 4 fields

1. a primary key, id, which is system-generated
2. User’s player name, allow up to length of 30 characters
3. User’s date, last login.
4. User’s password, allow up to length of 30 characters


#### Exercise 5
Create a table named “product” in your “username_exercises” database, using phpMyAdmin on dev.fast.sheridanc.on.ca.  The table has 5 fields.

1. product_no (primary key, integer, user-generated)
2. description (variable length 200)
3. type (variable length 20)
4. suggested_price (decimal)
5. onhand (integer)

#### Example Answers

CUSTOMER

```
CREATE TABLE `customer` (
  id int(11) NOT NULL,
  firstname varchar(30),
  lastname varchar(30),
  sin char(9),
  gender enum('male','female','other')
);
```

PRODUCT

```
CREATE TABLE product (
  product_n int(11) NOT NULL,
  description varchar(200),
  type varchar(20),
  suggested_price decimal(10,2),
  onhand int(11)
);
```
 
---

> Web Programming @ Sheridan College


