[previous]() : **Worksheet Set 1** : [next](set02.md)


## Key terms and concepts to understand
> &bull; Javascript  &bull; imperative programming  &bull; variable  &bull; value  &bull; literal  &bull; IPO operator &bull; expression  &bull; keyword  &bull; identifier  &bull;  data type &bull; strict mode  &bull; console  &bull;  algorithm  &bull; object-oriented programming  &bull; computer application  &bull;  text editor  &bull; client/server  &bull;  type conversion  &bull; function &bull; method &bull; refactoring code &bull;
> 
---



## Read and analyze (analytical reading) the following tutorials:

### Read and make notes:

- [Web Programming](https://ebajcar.github.io/web10199/material/material_programming.html)

### Class examples

- [introduction: Javascript in the browser](../set1/cm01.html)
- [1. Start with valid HTML5 and CSS3](../set1/cm02.html)
- [2. Add Javascript to HTML document](../set1/cm03.html)
- [3. Use comments to write algorithm, identify variables, data structures, statements, control statements, functions](syst10199/set1/cm04.html)
  - [Example: Problem statement - add two numbers](../set1/cm05.html)
- [4. Convert each step to JS code and test in console](../set1/cm06.html)
- [5. Refactor to connect to the document](../set1/cm07.html)
  - [document.write can overwrite your DOM!](../set1/cm08.html)
  - [add vs. concatenate!](../set1/cm09.html)
- [6. Finish: dot the i's and cross the t's](../set1/cm10.html)

### Observe and describe. Try all examples. Make notes. Document what you have learned.

1. Read and regularly review [Key elements of programming style](../noteworthy/key_elements_of_programming.md)

1. Javascript Syntax: https://www.w3schools.com/js/js_syntax.asp
    - Values, Literals, Variables, Operators, Expressions, Keywords, Comments, Identifiers, Case Sensitive, Camel Case, Character Set

2. Javascript Variables: https://www.w3schools.com/js/js_variables.asp

3. Javascript Type convernsion: https://www.w3schools.com/js/js_type_conversion.asp

4. Javascript Strict Mode: https://www.w3schools.com/js/js_strict.asp

    - You can use strict mode in all your programs. It helps you to write cleaner code, like preventing you from using undeclared variables.


### Watch videos

- Algorithm on [Algorithms](https://youtu.be/6hfOvs8pY1k). 



### Formulate answers to the following questions
1. What is an algorithm?


---


## Exercises
Set up a project for each problem. Keep all versions of your solution for each project.  For each problem, write out the
algorithm that you plan to use (and modify if your implementation deviates from your original
plan).


1. **Fibonacci numbers** 
	- (v.1) &mdash; Calculate and display in console the first 5 Fibonacci numbers. Display in the console.
	- (v.2) &mdash; Write a program that displays the first 20 Fibonacci numbers in the console.
	- (v.3) &mdash; Refactor your code to display a table in the console (see `console.table()` property).
2. **Temperature conversion** 
	- (v.1) &mdash; Write a program that calculates 25 degrees Celsius in Fahrenheit and displays a phrase that includes both values in the console.
3. **Area of a circle** 
	- (v.1) &mdash;  Write a simple program that computes the area of a circle when the `radius = 4`. Explore the Math object (pow, π). Output to console.
4. **Quadratic roots** 
	- (v.1) &mdash; Write a program that calculates roots of a quadratic equation. Implicit equation of a line, when `a != 0`, there are two solutions to `ax^2 + bx + c = 0` and they are `x = -b +- sqrt(b^2-4ac) over 2a`. Display the result in the console, when `a=4`, `b=3`, and `c=2`.
5. **Prime numbers** 
	- (v.1) &mdash; Write a program that displays the first 20 prime numbers (starting with 2). Display in console.
6. **Is it a number or a string?**
	- [TBD]
7. **Game of Casino Craps**
	- (v.1) Write a program that lets a user to play a game of casino craps in the console.
8. **Game of Rock Paper Scissors**
	- (v.1) Write out an algorithm for the game of Rock Paper Scissors.  Assume one human players plays against the computer.
9. **Game of Tic Tac Toe**
	- (v.1) Write out an algorithm for the game of tic tac toe.  Assume two human players sit together with a sheet of paper (or single monitor/keyboard) and take turns.

---

## Example Solution

### Problem
Calculate and display in console the first 5 Fibonacci numbers. Display in the console.

### Analysis and design
- How do you calculate Fibonacci numbers? [example source](https://en.wikipedia.org/wiki/Fibonacci_number)
- Need to use variables to store values - input: how many, first/previous, second/current) - output: next/new
- Need to use console.log to display output (process)
- Need to use a loop to calculate (process) each new value 
- Algorithm
	1. Declare and initialize
 	2. Display 0 - first Fibonacci nummber
 	3. Display 1 - second Fibonacci number
 	4. Calculate next value
 	5. Display current value
 	6. If the current value is not the fifth Fibonacci number, repeat steps iv. and v.

### Solution

```js
var n = 5, tmp;
var pre = 0, cur = 1;
console.log("0: " + pre);
console.log("1: " + cur);
for (var i = 0; i < n-2; i++) {
	tmp = pre;  //tmp is first number
	pre = cur;  //pre is second number
	cur += tmp; //cur is first plus second (or newly calculated)
	console.log(i+2 + ": " + cur);
}
```

### Test, explore alternatives, look for improvements
1. Implement the above solution using a valid HTML document. Include proper comments to explain what the code does.


2. What happens when we use let instead of var?
```
let n = 5, tmp;
let pre = 0, cur = 1;
```

https://www.w3schools.com/js/js_let.asp

- ES2015 introduced two important new JavaScript keywords: let and const.
- These two keywords provide Block Scope variables (and constants) in JavaScript.
- Before ES2015, JavaScript had only two types of scope: Global Scope and Function Scope.



3. What happens when we use const instead? Produce the following errors and describe the situation. Use standard paragraph for each.
```
// Error: Missing initializer in const declaration
// Error: Assignment to constant variable.
```

4. Add and compare the outputs:
```
console.log(i+2 + ": " + cur);
console.log("F" + (i+2) + ": " + cur);
console.log("F" + i+2 + ": " + cur);
```


    
---
> *The materials provided in class and in SLATE are protected by copyright. They are intended for the personal, educational uses of students in this course and should not be shared externally or on websites such as Course Hero or OneClass. Unauthorized distribution may result in copyright infringement and violation of Sheridan policies.*
> 
> **SYST10199 Web Programming @ Sheridan College**

