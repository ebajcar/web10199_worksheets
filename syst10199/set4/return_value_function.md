# Example

For more information see 
[example @ MDN](https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Building_blocks/Return_values#Active_learning_our_own_return_value_function)

```js
function squared(num) {
  return num * num;
}

function cubed(num) {
  return num * num * num;
}

function factorial(num) {
  var x = num;
  while (x > 1) {
    num *= x-1;
    x--;
  }
  return num;
}
```
```js
input.onchange = function() {
  var num = input.value;
  if (isNaN(num)) {
    para.textContent = 'You need to enter a number!';
  } else {
    para.textContent = num + ' squared is ' + squared(num) + '. ' +
                       num + ' cubed is ' + cubed(num) + '. ' +
                       num + ' factorial is ' + factorial(num) + '.';
  }
}
```

This exercise has brought up a couple of important points besides being a study on how to use the  `return`  statement. In addition, we have:

-   Looked at another example of writing error handling into our functions. It is generally a good idea to check that any necessary parameters have been provided, and in the right datatype, and if they are optional, that some kind of default value is provided to allow for that. This way, your program will be less likely to throw errors.
-   Thought about the idea of creating a function library. As you go further into your programming career, you'll start to do the same kinds of things over and over again. It is a good idea to start keeping your own library of utility functions that you use very often — you can then copy them over to your new code, or even just apply it to any HTML pages where you need it.


---
> SYST10199 Web Programming  @ Sheridan College- 
