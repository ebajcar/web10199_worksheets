# Worksheet 11

#### SYST10199 Web Programming

Explore, study, and make notes on material for Week 9 on SLATE Content.
Share and discuss on Piazza Q&A.

## Develop an answer to the following questions:


## Exercises



#### Exercise 10-1
In previous worksheet (worksheet 9, exercise 2), you were asked to create a table named “student” using phpMyAdmin on dev.fast.sheridanc.on.ca. 

Implement the class code, connect to your table, and test it at least 25 times, for 5 to 10 different players.


#### Exercise 10-2
In previous worksheet (worksheet 9, exercise 3), you were asked to create a table named “student” using phpMyAdmin on dev.fast.sheridanc.on.ca. Assuming you followed the instructions, you created it as follows:
```
CREATE TABLE student (
  id int(11) NOT NULL,
  firstname varchar(30),
  lastname varchar(30),
  sid char(9),
  gender enum('male','female','undisclosed'),
  gpa decimal(10,2),
  enrolldate` date
);
```

1.  Using the SQL tab in phpmyadmin, insert the following rows:
```
      NULL, Cathy, Smith, 123123123, female, 2.7, 2020-01-08
      NULL, Doug, Jones, 222333444, male, 3.6, 2020-01-08
      NULL, Michelle, Yeoh, 999777666, female, 2.7, 2020-02-10
      NULL, Tig, Notaro, 987654321, female, 3.9, 2020-02-10
      NULL, Shazad, Latif, 987123456, male, 3.8, 2020-03-20
```

2. Write out the SQL statement to list all fields for all students.

3. Write out the SQL statement to list all fields for Doug Jones.

4. Write out the SQL statement to list all students that registered on January 8, 2020.

5. Write out the SQL statement to retrieve all student records and display the student ID and GPA only.


#### Exercise 4
In previous worksheet (worksheet 9, exercise 4), you were asked to create a table named “student” using phpMyAdmin on dev.fast.sheridanc.on.ca. Assuming you followed the instructions, you created it as follows:

```
CREATE TABLE member (
  id int(11) NOT NULL,
  player varchar(30),
  password varchar(30),
  date date
);
```

#### Exercise 1
In previous worksheet (worksheet 9, exercise 1), you were asked to create a table named “customer” using phpMyAdmin on dev.fast.sheridanc.on.ca. Assuming you followed the instructions, you created it as follows:

```
CREATE TABLE `customer` (
  id int(11) NOT NULL,
  firstname varchar(30),
  lastname varchar(30),
  sin char(9),
  gender enum('male','female','other')
);
```

#### Exercise 5
In previous worksheet (worksheet 9, exercise 5), you were asked to create a table named “product” using phpMyAdmin on dev.fast.sheridanc.on.ca. Assuming you followed the instructions, you created it as follows:

```
CREATE TABLE product (
  product_n int(11) NOT NULL,
  description varchar(200),
  type varchar(20),
  suggested_price decimal(10,2),
  onhand int(11)
);
```

Use the information in [Worksheet 10](worksheet_10.md) to create and populate the tables and implement answers to the questions.

---

> Web Programming @ Sheridan College


