[previous](set04.md) : **Worksheet Set 5** : [next](set06.md)


## Key terms and concepts to understand
> &bull; Javascript  &bull; imperative programming  &bull; variable  &bull; value  &bull; literal  &bull; IPO operator &bull; expression  &bull; keyword  &bull; identifier  &bull;  data type &bull; strict mode  &bull; console  &bull;  algorithm  &bull; object-oriented programming  &bull; computer application  &bull;  text editor  &bull; client/server  &bull;  type conversion  &bull; function &bull method &bull;
> 
---

# Course material

### Read and analyze (analytical reading)
Observe and describe. Make notes. Explore the links provided in the material. Document what you have learned. When you come to an example, make your own version and explore it deeply. “Curiosity Is the engine of achievement.” —Sir Ken Robinson

1. [Javascript forms](https://ebajcar.github.io/web10199/material/material_js.html)
    - How forms are processed
    - HTML5 and CSS3 form components
    - Data validation
5. [Regular expressions (regex)](https://ebajcar.github.io/web10199/material/material_regex.html)
6. [W3C - HTML 5.3 - Section 4.10. Forms](http://w3c.github.io/html/sec-forms.html)  &mdash; A form is a component of a Web page that has form controls, such as text fields, buttons, checkboxes, range controls, or color pickers. A user can interact with such a form, providing data that can then be sent to the server for further processing (e.g., returning the results of a search or calculation). No client-side scripting is needed in many cases, though an API is available so that scripts can augment the user experience or use forms for purposes other than submitting data to a server.&hellip;
7. <a target="_blank" href="https://www.w3schools.com/js/js_validation.asp">JS Forms</a>  &mdash; Learn about JavaScript Form Validation; JavaScript Can Validate Numeric Input; Automatic HTML Form Validation; Data Validation; HTML Constraint Validation; Constraint Validation HTML Input Attributes; Constraint Validation CSS Pseudo Selectors; &hellip;on w3schools.com
8. <a target="_blank" href="https://www.w3schools.com/js/js_validation_api.asp">JS Forms API</a> &mdash; Learn about Constraint Validation DOM Methods, Constraint Validation DOM Properties; Validity Properties. 
9. <a target="_blank" href="https://www.w3schools.com/js/js_input_examples.asp">JS HTML Input</a>  &mdash; Lots and lots of examples! Explore them all.  
10. <a target="_blank" href="https://www.w3schools.com/js/js_events_examples.asp">JS HTML Events </a>  &mdash; Lots and lots of examples! Explore them all.
11. <a target="_blank" href="https://www.w3schools.com/js/js_regexp.asp">JS RegExp</a>  &mdash; JS RegExp on w3schools.com
12. <a href="http://regexone.com/" target="_blank">Regular Expressions</a>  &mdash; interactive tutorial on regexone.com</dd>
13. [Form data validation (MDN)](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Forms/Data_form_validation) &mdash; Form validation helps us to ensure that users fill out forms in the correct format, making sure that submitted data will work successfully with our applications. This article leads you through basic concepts and examples about form validation.
14. <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions" target="_blank">Javascript Guide: Regular Expressions</a> &mdash; Regular expressions are patterns used to match character combinations in strings. In JavaScript, regular expressions are also objects. These patterns are used with the exec and test methods of RegExp, and with the match, replace, search, and split methods of String&hellip;


### Watch Suggested videos

- ...

### Class examples

Explore, implement, and comment well.

- [Convert internal JS and CSS to external](syst10199/noteworthy/convert_int_to_ext.md)
- [Forms - clean data](syst10199/set5/clean_data.html)


### Formulate answers to the following questions
1. What is ...?

---

# Exercises

## Regular Expressions

### [Character classes](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions/Character_Classes)
`\`, `.`, `\cX`, `\d`, `\D`, `\f`, `\n`, `\r`, `\s`, `\S`, `\t`, `\v`, `\w`, `\W`, `\0`, `\xhh`, `\uhhhh`, `\uhhhhh`, `[\b]`
```js
const chessStory = 'He played the King in a8 and she moved her Queen in c2.';
const regexpCoordinates = /\w\d/g;
console.log(chessStory.match(regexpCoordinates));
// expected output: Array [ 'a8', 'c2']

const moods = 'happy 🙂, confused 😕, sad 😢';
const regexpEmoticons = /[\u{1F600}-\u{1F64F}]/gu;
console.log(moods.match(regexpEmoticons));
// expected output: Array ['🙂', '😕', '😢']
```
#### More Examples
- Looking for a series of digits
- Looking for a word (from the Latin alphabet) starting with A
- Looking for a word (from Unicode characters)

#### Specifications
- [https://tc39.es/ecma262/#sec-characterclass](https://tc39.es/ecma262/#sec-characterclass)

---

### [Groups and ranges](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions/Groups_and_Ranges)
`(x)`, `(?:x)`, `x|y`, `[xyz]`, `[^xyz]`, `\`_Number_
```js
const aliceExcerpt = 'The Caterpillar and Alice looked at each other';
const regexpWithoutE = /\b[a-df-z]+\b/ig;
console.log(aliceExcerpt.match(regexpWithoutE));
// expected output: Array ["and", "at"]

const imageDescription = 'This image has a resolution of 1440×900 pixels.';
const regexpSize = /([0-9]+)×([0-9]+)/;
const match = imageDescription.match(regexpSize);
console.log(`Width: ${match[1]} / Height: ${match[2]}.`);
// expected output: "Width: 1440 / Height: 900."
```
#### More Examples
- Counting vowels
- Using groups
- Using named groups

#### Specifications
[https://tc39.es/ecma262/#sec-classranges](https://tc39.es/ecma262/#sec-classranges)

---
### [Quantifiers](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions/Quantifiers)


```js
const ghostSpeak = 'booh boooooooh';
const regexpSpooky = /bo{3,}h/;
console.log(ghostSpeak.match(regexpSpooky));
// expected output: Array ["boooooooh"]

const modifiedQuote = '[He] ha[s] to go read this novel [Alice in Wonderland].';
const regexpModifications = /\[.*?\]/g;
console.log(modifiedQuote.match(regexpModifications));
// expected output: Array ["[He]", "[s]", "[Alice in Wonderland]"]

const regexpTooGreedy = /\[.*\]/g;
console.log(modifiedQuote.match(regexpTooGreedy));
// expected output: Array ["[He] ha[s] to go read this novel [Alice in Wonderland]"]
```

#### More Examples
- Repeated pattern
- Counting characters
- Optional character
- Greedy versus non-greedy


#### Specifications

[https://tc39.es/ecma262/#sec-quantifier](https://tc39.es/ecma262/#sec-quantifier)

  
---
> *The materials provided in class and in SLATE are protected by copyright. They are intended for the personal, educational uses of students in this course and should not be shared externally or on websites such as Course Hero or OneClass. Unauthorized distribution may result in copyright infringement and violation of Sheridan policies.*
> 
> **SYST10199 Web Programming @ Sheridan College**
