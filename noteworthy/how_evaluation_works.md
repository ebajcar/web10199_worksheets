# How evaluation works

There is not one correct answer for each assignment task; but there are more adequate or less adequate ways of dealing with each assignment task. **So your grade is not based on whether you come up with a single correct answer or on whether you come up with the answer that the professor supports.** Rather, your grade depends upon
-   how well you make use of the **analytical tools** presented in the course,
-   how deeply and thoughtfully you **probe the issues** involved in an assignment, and
-   how well you **explain and defend** the positions you take or the decisions you make.
  
**The most likely shortcomings that hold down grades are:**
1.  **departing from the instructions for an assignment;**
2.  **failing to complete every part of the assignment; and**
3.  **being too brief (lacking inline documentation).**

In order to avoid these shortcomings then, you need to
-   **read over the background information and instructions for an assignment carefully** (several times if necessary);
-   **peruse textbook (suggested readings and tutorials) and other references provided for relevant material;**
-   make sure that you complete each and every part of the assignment; and
-   **explain your position in detail rather than relying on a sentence or two to solve every issue. When you are not required to do formal documentation, this means that your inline documentation must be used to sufficiently explain your code.**

**General grading scheme:**
-   9-10 outstanding performance
-   7-8 very good with few errors
-   6-7 good work, with notable errors
-   1-5 significant shortcomings

---

## A Guideline for Implementing Good Solutions
The development process is the same for any programming language! Before you start designing a solution, make sure you understand the problem - a process called  **analyzing**.

The purpose of programming exercises and assignments, regardless of the language, is to learn:
-   how to correctly formulate algorithms to solve specific problems - a process called  **designing**
-   how to write those algorithms as programs in the given programming language - a process called  **coding**  (or sometimes  **constructing**)
-   how to test a program to provide convincing evidence that it solves the right problem correctly - a process called  **testing**
-   how to provide a clear, concise explanation of the problem that the program is intended to solve, and how it works - a process called  **documenting**

### Self-evaluation Rubric

A program can compile (be interpreted) correctly, produce the correct output, and still have major problems. Here are some guidelines for the categories:

(1) algorithm design,
(2) program style, and
(3) program correctness.

**Algorithm design**	
Algorithm design  is a measure of how well the algorithm has been designed. For example, if the solution calls for a recursive algorithm to be implemented. It is considered to be poorly designed if iterative structures are used. Another example: if the algorithm contains a  divide-by-zero instruction, has it been safeguarded against divide-by-zero errors? HTML example: using paragraphs  instead of line breaks.

 - *Programming structures:* Has the program been designed using the appropriate programming structures?
 -  *Program testing:* Is the program designed to work correctly for all input cases? What about error cases?
 -  *Error handling:* Is the program designed to give appropriate error messages for bad input data?

**Program Style**
Program style consists of documentation, source citations, naming conventions, readability and indentation.
 - *Comments (documentation)*: Use the appropriate comments for the language used. There should be a prologue (header) specifying at minimum the program name, author(s),date created, date updated, and a short description. Optionally, it may contain algorithm analysis (input, output), algorithm design (pseudo-code) outlining the approach used by the program to solve the problem, and known bugs (if the program does not function correctly in some situations, describe the situations and problems).
 -  *Source Citations:* In comments, reference all sources used (classroom, course material, references, videos, websites,...) and describe what changes you've made. (Note: even if you don't copy any code, you should acknowledge where you got ideas what to try or how something works.)
 - *Naming variables, files,...*: Each variable name should indicate its meaning. Counters can be named i,j,k and a character can be named simply c, but constructs that are specific to the particular program should have specific, mnemonic names. Good examples: `relativeError speed  sum  temperature  windChill`
 - *Readability and Indentation:* Indentation should indicate the flow of control. Statements that are nested within a control  statement, if, for, while, etc., should be indented  a constant distance of at least four (4) spaces. More deeply nested statements should be more deeply  indented. The opening brace delimiting a compound statement should be on a line by itself following  the control statement, and closing brace should be  on a line by itself. The indentation of the braces  should match the controlling statement, such as in  the case of the for statement or the if statement.  For alternative acceptable styles, consult the  conventions used for your current environment. In case of shell scripts, observe the same rules  as the braces.

**Program correctness**
Program correctness consists of ability to compile (or interpret) and correct result. Consider the following:	 
		&bull; Does the program compile (interpret) without any syntax errors or warnings?
		&bull; Does the program work correctly for all input (both correct and erroneous)?
		&bull; Does the program contain logic errors?

 - *Ability to Compile or Interpret without Errors:* The program should compile, or be interpreted, without any warnings or errors. Make sure you use the appropriate syntax when compiling/interpreting your program. The permissions on the script file should be set properly.
 - *Correct Results:* The program should be evaluated on whether it does exactly what the problem stipulates, not on efficiency or appropriateness of the code. Note that "exactly" implies that, if the desired output format has been specified explicitly, no deviation from that format is allowed. For example, if two numbers are to be printed on the same line, it would be an error if they are printed on two lines, no matter how certain you are that it would be better that way. Also consider:	(1) Does the program contain any logic errors? --infinite loops, mathematical errors,... (2) Is the output self-explanatory and well formatted?
 
  
---
> *The materials provided in class and in SLATE are protected by copyright. They are intended for the personal, educational uses of students in this course and should not be shared externally or on websites such as Course Hero or OneClass. Unauthorized distribution may result in copyright infringement and violation of Sheridan policies.*
> 
> **SYST10199 Web Programming @ Sheridan College**
