# Worksheet 1
#### SYST10199 Web Programming

### Problem
Calculate and display in console the first 5 Fibonacci numbers. Display in the console.

### Solution
```
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
### Exercises
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

## Explore the tutorials:

1. Javascript Syntax: https://www.w3schools.com/js/js_syntax.asp
    - Values, Literals, Variables, Operators, Expressions, Keywords, Comments, Identifiers, Case Sensitive, Camel Case, Character Set

2. Javascript Variables: https://www.w3schools.com/js/js_variables.asp

3. Javascript Type convernsion: https://www.w3schools.com/js/js_type_conversion.asp

4. Javascript Strict Mode: https://www.w3schools.com/js/js_strict.asp

    - You can use strict mode in all your programs. It helps you to write cleaner code, like preventing you from using undeclared variables.
    
    
---

> Web Programming @ Sheridan College

