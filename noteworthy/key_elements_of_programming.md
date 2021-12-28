## Key elements of programming style

1. Expression
2. Control structure
3. Programming structure
4. Input and Output
5. Efficiency and instrumentation (measure performance)
6. Documentation

Writing a computer program eventually boils down to writing a sequence of statements in the language at hand.
How each statement is expressed determines what the program actually does.

#### Expressing each statement well:
* write clearly. 
* be sparing with temporary variables.
* be unambiguous (parentheses, well-named identifiers).
* Make sure conditional tests read clearly.
* use the good features of a language; avoid the bad ones.
* avoid unnecessary branches.
* replace repetitive expressions by calls to a common function.

#### A computer program is shaped by its data representation and the statements that determine its flow of control.

#### Write first in an easy-to-understand pseudo-language; then translate into whatever language you have to use.

Follow each decision as closely as possible with its associated action.
Use data arrays to avoid repetitive control sequences.
Choose a data representation that makes the program simple.
Don't stop with your first draft!
#### Most programs are too big to be comprehended as a single chunk. They need to be divided into smaller pieces that can be conquered separately. 
Subroutines, functions, procedures, methods, are the modules or building blocks of large programs. 
If properly designed, modules can be maintain nearly independently of each other, and often re-usable in other applications, contributing to a library of labor-saving routines.
Make the coupling between modules visible.
Each module should do one thing well.
Every module should hide something.
Let the data structure the program.
Don't patch bad code - rewrite it.

### Input and Output
Test input for validity and plausibility.
Make input easy to prepare and output self-explanatory.
Use uniform input formats.
Localize input and output, instead of spreading it all over the program. Hide the details in functions.

### Common blunders
make sure all variables are initialized before use.
watch out for off-by-one errors.
take care to branch the right way on equality.
avoid multiple exits from loops.
test programs at their boundary values.

### Efficiency
Make it right before you make it faster.
Keep it right when you make it faster.
Make it clear before you make it faster.
Don't sacrifice clarity for small gains in efficiency.
Let the compiler do the simple optimizations.
Make sure special cases are truly special.
Keep it simple to make it faster.
Don't diddle code to make it faster - find a better algorithm.


[Analyze Runtime Performance](https://developers.google.com/web/tools/chrome-devtools/rendering-tools/)

  
---
> *The materials provided in class and in SLATE are protected by copyright. They are intended for the personal, educational uses of students in this course and should not be shared externally or on websites such as Course Hero or OneClass. Unauthorized distribution may result in copyright infringement and violation of Sheridan policies.*
> 
> **SYST10199 Web Programming @ Sheridan College**
<!--stackedit_data:
eyJoaXN0b3J5IjpbLTk5MDMwNjkxOF19
-->
