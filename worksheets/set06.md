[previous](set05.md) 
: **Worksheet Set 6**
: [next](set07.md)


## Key terms and concepts to understand
> &bull; Javascript  &bull; imperative programming  &bull; variable  &bull; value  &bull; literal  &bull; IPO operator &bull; expression  &bull; keyword  &bull; identifier  &bull;  data type &bull; strict mode  &bull; console  &bull;  algorithm  &bull; object-oriented programming  &bull; computer application  &bull;  text editor  &bull; client/server  &bull;  type conversion  &bull; function &bull method &bull;
> 
---

# Course material

### Read and analyze (analytical reading)
Observe and describe. Make notes. Explore the links provided in the material. Document what you have learned. When you come to an example, make your own version and explore it deeply. “Curiosity Is the engine of achievement.” —Sir Ken Robinson
1. [PHP Introduction (class material)](https://ebajcar.github.io/web10199/content/learnphp/index.html)
2. [PHP Grammar](https://ebajcar.github.io/web10199/content/learnphp/grammar.html)
3. [PHP Operators](https://ebajcar.github.io/web10199/content/learnphp/operators.html)
4. [PHP Variables](https://ebajcar.github.io/web10199/content/learnphp/variables.html)
5. [PHP Data types](https://ebajcar.github.io/web10199/content/learnphp/data_types.html)
6. [PHP Programs and flow control](https://ebajcar.github.io/web10199/content/learnphp/control_flow.html)
7. [A simple tutorial (PHP Manual)](https://www.php.net/manual/en/tutorial.php)
8. [PHP Introduction (w3schools)](https://www.w3schools.com/php/php_intro.asp)
9. [PHP Syntax (w3schools)](https://www.w3schools.com/php/php_syntax.asp)
10. [PHP Variables (w3schools)](https://www.w3schools.com/php/php_variables.asp)
11. [PHP echo and print (w3schools)](https://www.w3schools.com/php/php_echo_print.asp)


### Class examples
<a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_intro" target="_blank">PHP tryit editor (w3schools)</a> Copy the php code and press run to examine the output.
1. [hello world example](../examples/set6/hello_world.php) copy to PHP tryit editor (inside &lt;body> element)
2. [variables examples](../examples/set6/variables.php)
3. [print, printf, echo examples](../examples/set6/print_printf.html) copy to PHP tryit editor
4. [Say hello example using GET method](../examples/set6/say_hello.php) Examine the code.
    - You can try this [implementation on dev.fast](https://bajcar.dev.fast.sheridanc.on.ca/10199/set06/say_hello.php?name=Sheridan%20College&password=abc) Try changing the value.
    - Use the **Working remotely on the server using Notepad++** to create your own version of the file

#### Working remotely on the server using Notepad++
To add the NppFTP plugin in Notepad++
- click on the Plugins menu
- click on the Plugins Admin...
- in Available panel search for NppFTP
- select it
- click on Install button

Once it is installed it will appear as a menu item in the Plugins menu. When you click on it, it will give you several options to select
- click on Show NppFTP Window

A new panel will open with a set of icons at the top:
- click on the cog (second last icon) and select Profile settings
- click the Add new button (at the bottom of Profiles:)
- enter the name of your choice when prompted and click OK
- note that the newly-created profile is selected (if not, make sure you select it by clicking on it)
- enter Hostname: dev.fast.sheridanc.on.ca
- select Connection type: SFTP
- default port should be 22 (change if it is not - but make sure you have chosen SFTP, the other choices default to other ports)
- enter Username: same as cPanel and FileZilla
- enter Password: same as cPanel and FileZilla 
- leave rest as is.

Once you have profile(s) set up, the link icon (first one) drops down with a menu item for each profile that you have set up.
- click on the menu item and wait for the connection
- when the connection is successful, the panel will fill with the directory tree on the server, just like in FileZilla
- when the connection is unsuccessful, the issues are the same as in FileZilla (check all information in your profile, if it works in FileZilla, you can make it work here)

Using Notepad++ 
- navigate to public_html and to the location where you want to create a file, or where you already have a file
- to create a new file, right-click on the directory (folder) where you want to store the file and select the option **Create new file**, name it when prompted (remember PHP files must have an extension *php*) 
- to name a file use the same conventions as before, for example `file.php`, `myFile.php`, `any_name.php`
- once the file is created, find it in the listing and double-click on it (note the Download... message in the bottom panel and the file opens in the Notepad++ panel)
- try adding some code and then save the file (like before, using the File menu or the Save icon) - note the Upload... message in the bottom panel
- to test your page, open a browser window and enter your Web URL with the path and file name (http://username.dev.fast.sheridanc.on.ca/path/file.php)






### Formulate answers to the following questions
1. How would you rewrite the Casino craps game in PHP. [modified JS version](https://syst10199-examples.w3spaces.com/week8/modified-cc.html)
2. Rewrite the Rock Paper game in PHP. [modified JS version](https://syst10199-examples.w3spaces.com/week8/modified-rps.html)
3. Rewrite the Rock Paper Lizard Spock game in PHP. [modified JS version](https://syst10199-examples.w3spaces.com/week8/modified-rpsls.html)
4. Rewrite the Tic Tac Toe game in PHP.  [modified JS version](https://syst10199-examples.w3spaces.com/week8/modified-ttt.html)


  
---
> *The materials provided in class and in SLATE are protected by copyright. They are intended for the personal, educational uses of students in this course and should not be shared externally or on websites such as Course Hero or OneClass. Unauthorized distribution may result in copyright infringement and violation of Sheridan policies.*
> 
> **SYST10199 Web Programming @ Sheridan College**
