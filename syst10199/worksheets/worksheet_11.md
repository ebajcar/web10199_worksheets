# Worksheet 11

#### SYST10199 Web Programming

Explore, study, and make notes on material for Week 9 on SLATE Content.
Share and discuss on Piazza Q&A.

## Develop an answer to the following questions:


## Exercises



#### Exercise 10-1
In previous worksheet (worksheet 9, exercise 2), you were asked to create a table named “scores” using phpMyAdmin on dev.fast.sheridanc.on.ca. 

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


#### Exercise 10-3
In previous worksheet (worksheet 9, exercise 4), you were asked to create a table named “member” using phpMyAdmin on dev.fast.sheridanc.on.ca. Assuming you followed the instructions, you created it as follows:

```
CREATE TABLE member (
  id int(11) NOT NULL,
  player varchar(30),
  password varchar(30),
  date date
);
```

**Create login page.**

- Add PHP to retrieve data from the member table. 
- Start with retrieving everything, then filter on the username entered.

**Create registration page.**

- Add PHP to insert a new record with the provided credentials and current date.  
- Include Javascript to check that the two password fields are the same. 
- Include Javascript to guide the user to choose a strong password.




---

> Web Programming @ Sheridan College


