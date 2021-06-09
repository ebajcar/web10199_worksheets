# Learning objectives

> (1) Apply dynamically-typed variables with implicit type conversion… using JS.

> (2) Apply JS functions and control structures…

> (3) Design small client-side web apps that employ JS functions to respond to HTML DOM events… making changes to the HTML DOM.

> (4) Apply JavaScript's support for first class functions…

> (8) Apply best practices in internal documentation, file naming and web site structure…


# Review material to answer the following questions

1. What is full stack development? what technologies you need to know and understand?
2. Describe the data flow in a web client/server environment.
3. What are the differences between Javascript running in the browser and language like PHP?
4. Describe the process of designing client-server web apps. Compare to an essayist.
5. Describe the process of solving a problem. What components need to be analyzed?
6. What is progressive enhancement? How is it applied to web app development?
7. What does it mean to "write code for readability"? Why is this critical?
8. What is meant by "publication quality? Describe code conventions. (how many can you list and explain?)
9. Where can Javascript code be placed? where should it be placed? 
10. Explain what is unobtrusive Javascript. Describe at least four (4) ways how to make Javascript unobtrusive.
11. What are the specifications for Javascript? how is a scripting languaged defined in those specs?
12. What are the eleven (11) common mistakes developers make in Javascript?
13. Explain the six (6) ways you can improve Javascript performance?

14. What is meant by imperative programming? Describe what Javascript is
15. Name two primary sources for Javascript.
16. What are the three ways to include Javscript code into HTML document? Describe the pros and cons of using each.
17. Explain why we delay the execution of Javascript and then we accelerate the processing to a specific event.
18. Explain why you would use a) document.write, b) console.log, c) alert dialogue, d) form element.
19. Name at least three basic grammar rules for Javascript statements.
20. Explain the purpose and incorporation of comments in Javascript code.
21. Explain how to debug Javascript code.
22. Exaplain whare are expressions in Javascript. Give examples with explanation.
23. What makes these special values: undefined, null, false, true, infinity, NaN.
24. How do you declare variables in Javascript? when do you use var, let, const?
25. Explain the difference among global, local, and block scope.
26. Explain what is meant by program flow. What is behavioural flow? iterative flow? decision flow? Give examples.
27. Compare the conditional (ternary) operator to an if structure.
28. Compare operators in Javascript and Java, including precedence. 
29. Explain how the + operator works in Javascript.
30. What is the difference between  equality operator and identity operator (a.k.a. strict equality)? 

31. What is the difference between object-oriented and object-based languages?
32. What are the eight (8) basic data types in Javascript?
33. What is the difference between string primitive and String object? Explain the use of three different quotes and how to use them?
34. How do you create strings in Javascript? how can you access characters in a string?
35. You can create custom objects dynamically. Explain.  
36. What are the three categories of objects in Javascript?
37. How do you create today's date? a specific date? What other built-in types are there?
38. How do you access Math property PI? methods sqrt, random, floor, ceil, min, max, round, pow? Explain each, give example.
39. Describe JS arrays. how do you declare and initialize arrays? how do access members of an array? proeprty length? methods sort, reverse, forEach, push, pop, shift, unshift, concat?

40. Explain DOM structure in terms of what is tree, tree order, parent, child, ancestor, descenant, sibling, first child, last child, previous sibling, next sibling, index.
41. What are DOM methods and properties? Explain. 
42. What methods are available for finding HTML elements? which methods access live tree and which do not? what is the significance?
43. How do you modify DOM structure with Javascript? elements? attributes? styles?
44. Explain the difference between using createElement method and innerHTML. which one is used to improve JS performance?
45. What is BOM? what window properties are available? screen? setTimeout, clearTimeout? navigator? location? history?
46. Describe Javascript function. what is meant by first-class objects? how do define a functions? how do you call a function? how do you invoke a function? 
47. What is a difference between a function and a method? Give example of each.
48. Explain what are function arguments? parameters? what are default parameters? rest parameters? arguments[]?
49. What are anonymous functions? callback functions?
50. What is the difference if you assign a function with brackets and a function without brackets? when would you use one over the other?
51. What are events? event handlers?
52. How do you elicit user feedback?
53. Explain what is meant by events cascading through the entire DOM hierarchy? what happens when elements are nested or overlapping?
54. What are the three ways of assigning Javascript to an event? event attributes? event methods? event listeners? Give example with explanation how it works for each.
55. What is BOM? what properties and methods are accessible? give examples when you would use them?






### DOM Properties and methods

| method or property | description |
|--------------------|-------------|
| `document.addEventListener()`	| Attaches an event handler to the document |
| `document.anchors`	| Returns a collection of all &lt;a> elements in the document that have a name attribute |
| `document.body`	| Sets or returns the document's body (the &lt;body> element) |
| `document.close()`	| Closes the output stream previously opened with document.open() |
| document.createElement() |	Creates an Element node |
| document.createTextNode()	| Creates a Text node |
| document.forms |	Returns a collection of all &lt;form> elements in the document |
| document.getElementById()	| Returns the element that has the ID attribute with the specified value |
| document.getElementsByClassName()	| Returns a NodeList containing all elements with the specified class name |
| document.getElementsByName()	| Returns a NodeList containing all elements with a specified name |
| document.getElementsByTagName()	| Returns a NodeList containing all elements with the specified tag name |
| document.images	| Returns a collection of all &lt;img> elements in the document |
| document.links	| Returns a collection of all &lt;a> and &lt;area> elements in the document that have a href attribute |
| document.open()	| Opens an HTML output stream to collect output from document.write() |
| document.querySelector() |	Returns the first element that matches a specified CSS selector(s) in the document |
| document.querySelectorAll()	| Returns a static NodeList containing all elements that matches a specified CSS selector(s) in the document | 
| document.readyState	| Returns the (loading) status of the document |
| document.removeEventListener()	| Removes an event handler from the document (that has been attached with the addEventListener() method) |
| document.title	| Sets or returns the title of the document |
| document.write()	| Writes HTML expressions or JavaScript code to a document |
  
  
