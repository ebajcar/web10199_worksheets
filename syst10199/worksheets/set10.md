[previous](set09.md) 
: **Worksheet Set 10**
: [next]()


## Key terms and concepts to understand
> &bull; Javascript  &bull; imperative programming  &bull; variable  &bull; value  &bull; literal  &bull; IPO  &bull; operator &bull; expression  &bull; keyword  &bull; identifier  &bull;  data type &bull; objects  &bull; classes  &bull;  algorithm  &bull; object-oriented programming  &bull; computer application interface (API)  &bull;  text editor  &bull; client/server  &bull;  type conversion  &bull; function &bull method &bull; PHP &bull; MySQL  &bull; SQL statement &bull; myphpadmin  &bull; SQL clauses  &bull; RDBMS  &bull; DBMS  &bull; 
> 
---


## Read and analyze (analytical reading)
Observe and describe. Make notes. Explore the links provided in the material. Document what you have learned. When you come to an example, make your own version and explore it deeply. “Curiosity Is the engine of achievement.” —Sir Ken Robinson

1. Read about and practice protecting your databases [SQL Injection on w3schools](https://www.w3schools.com/sql/sql_injection.asp)
2. Read about and practice protecting your databases [SQL Injection on wikipedia](https://en.wikipedia.org/wiki/SQL_injection)
3. Research and summarize in your own words: Use PDO, not SQLi.  Why?

## Practice exercises

### General Process

1. Design, build and maintain a database.
2. Connect to data file.
3. Send an SQL query.
4. Process retrieved data.
5. Close connection to data file.

### Exercise 1

STEP 1: Create an html document containing a form

```html
<form name="form1" method="post" action="scoredb.php">
    <label> Player: <input name="player" type="text" id="player"></label>
    <label>Score:
        <select name="score" id="score">
            <option>Score</option>
            <option value="100">100 points</option>
            <option>200</option>
            <option>300</option>
            <option>400</option>
            <option>600</option>
        </select>
    </label>
    <div>
        <input type="submit" name="Submit" value="send">
        <input name="game" type="hidden" value="darts">
    </div>
</form>
```

STEP 2: Use phpMyAdmin web tool, to set up table

1. To create the database table for this example, log in to phpMyAdmin, select your database, and click on the Import tab.
2. The file to import is available here [scores.sql](https://pastebin.com/raw/HwHSZRtD); OR create a table called scores with the following structure:

```sql
CREATE TABLE scores (
  id int(11) NOT NULL AUTO_INCREMENT,
  player varchar(50) NOT NULL,
  score int(11) NOT NULL,
  date date NOT NULL,
  PRIMARY KEY (`id`)
)
```

STEP 3: To process the form with PHP, you need to connect and work with databases

Create scoredb.php file.
1. Collect variables from HTML from post or get (line 35-)

```php
//COLLECT VARIABLES FROM HTML
if (isset($_POST['player'])) {
    $player = $_POST['player'];
} else {
    echo $error;  return;
}
if (isset($_POST['score'])) {
    $score = $_POST['score'];
} else {
    echo $error;  return;
}
//echo "$player score = $score";
$date = date("Y-m-d");
```

2. Open database connection (lines 50-61)
```php
//OPEN DATABASE
//select table, use your username and password
// "localhost" assuming the php and database are on the same server
// http://localhost/phpmyadmin/index.php for xampp
try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $USRID, $PASSWD);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "<br>Could not connect " . $e->getMessage();
}
```


Prepare the SQL string (line 65)
Use the PDO method "prepare" (line 67)
Use the PDO method "execute" (line 28)
Close database connection (line 97 

  
---
> *The materials provided in class and in SLATE are protected by copyright. They are intended for the personal, educational uses of students in this course and should not be shared externally or on websites such as Course Hero or OneClass. Unauthorized distribution may result in copyright infringement and violation of Sheridan policies.*
> 
> **SYST10199 Web Programming @ Sheridan College**
