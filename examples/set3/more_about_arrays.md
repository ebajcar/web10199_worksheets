## Arrays

The JavaScript Array class is a global object that is used in the construction of arrays; which are high-level, list-like objects.

Arrays are list-like objects whose prototype has methods to perform **traversal and mutation operations**. Neither the length of a JavaScript array nor the types of its **elements** are fixed. Since **an array's length** can change at any time, and data can be stored at **non-contiguous locations** in the array, JavaScript arrays are not guaranteed to be **dense**; this depends on how the programmer chooses to use them. In general, these are convenient characteristics; but if these features are not desirable for your particular use, you might consider using *typed arrays* [1] .

Arrays cannot use strings as element **indexes** (as in an *associative array* [2] ) but must use integers. Setting or accessing via non-integers using *bracket notation*[^3] (or *dot notation*[^4]) will not set or retrieve an element from the array list itself, but will set or access a variable associated with that array's *object property collection* [^5] . The array's **object properties** and list of array elements are separate, and the *array's traversal and mutation operations* [^6] cannot be applied to these named properties.
Read more at [https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array)


### Common operations
|||
|---|---|
| Create an Array |  `var fruits = ['Apple', 'Banana'];` |
| Access (index into) an Array item | `var first = fruits[0];` |
| Loop over an Array | `fruits.forEach(function(item, index, array) {});` |
| Add to the end of an Array |  `var newItem = fruits.push('Orange'); ` |
| Remove from the end of an Array |  `var last = fruits.pop(); ` |
|  Remove from the front of an Array |  `var first = fruits.shift(); ` |
|  Add to the front of an Array |  `var newItem = fruits.unshift('Strawberry') ` |
|  Find the index of an item in the Array |  `var pos = fruits.indexOf('Banana'); ` |
|  Remove an item by index position |  `var removedItem = fruits.splice(pos, 1); ` |
|  Remove items from an index position |  `var removedItems = vegetables.splice(pos, n); ` |
|  Copy an Array |  `var shallowCopy = fruits.slice(); ` |

> SYST10199 Web Development @ Sheridan College


[-1] : [https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/TypedArray](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/TypedArray)

[-2] : [https://en.wikipedia.org/wiki/Associative_array](https://en.wikipedia.org/wiki/Associative_array)

[^3]: objects and properties [https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Working_with_Objects#Objects_and_properties](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Working_with_Objects#Objects_and_properties)

[^4]: property accessors [https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Property_Accessors](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Property_Accessors)

[^5]: properties [https://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures#Properties](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures#Properties)

[^6]: array methods [https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Indexed_collections#Array_methods](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Indexed_collections#Array_methods)

<!--stackedit_data:
eyJoaXN0b3J5IjpbMTIxMzQ4Nzc1Ml19
-->
