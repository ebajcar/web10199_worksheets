### Note the similarities!

## Converting internal CSS to external

#### 1. cut and paste CSS rules

  * **cut** all CSS rules between the `<style>` tags and 
  * **paste** into a new empty file


#### 2. name and save CSS file

  * **name** the new file appropriately, with the `.css` extension
  * **save** in the `css/` folder of the project
  * **update** relevant comments in the CSS file


#### 3. link CSS file to HTML file

  * **replace** the `<style>` tags with a `<link>` element
  * use relative path to point to the new CSS file using the `href="path/file.css"` attribute
  * **add** the `rel="stylesheet"` attribute
  * **update** relevant comments in the HTML file


## Converting internal Javascript to external


#### 1. cut and paste JS code

  * **cut** all JS code between the `<script>` tags and 
  * **paste** into a new empty file


#### 2. name and save JS file

  * **name** the new file appropriately, with the `.js` extension
  * **save** in the `js/` folder of the project
  * **update** relevant comments in the JS file


#### 3. link JS file to HTML file

  * **add** the `src="path/file.js"` attribute in the remaining `<script>`  element
  * use relative path to point to the new JS file
  * **ensure** there is nothing between the `<script>` tags.
  * **update** relevant comments in the HTML file
 
 
 ---
 > Web Programming @ Sheridan College
 
