[previous](set09.md) 
: **Worksheet Set 10**
: [next]()


## Key terms and concepts to understand
> &bull; Javascript  &bull; imperative programming  &bull; variable  &bull; value  &bull; literal  &bull; IPO  &bull; operator &bull; expression  &bull; keyword  &bull; identifier  &bull;  data type &bull; objects  &bull; classes  &bull;  algorithm  &bull; object-oriented programming  &bull; computer application interface (API)  &bull;  text editor  &bull; client/server  &bull;  type conversion  &bull; function &bull method &bull; PHP &bull; MySQL  &bull; SQL statement &bull; myphpadmin  &bull; SQL clauses  &bull; RDBMS  &bull; DBMS  &bull; 
> 
---


## Read and analyze (analytical reading)
Observe and describe. Make notes. Explore the links provided in the material. Document what you have learned. When you come to an example, make your own version and explore it deeply. “Curiosity Is the engine of achievement.” —Sir Ken Robinson

1. Dig deeper on [PHP form validation]()
2. Read about and practice protecting your databases [SQL Injection on w3schools](https://www.w3schools.com/sql/sql_injection.asp)
4. Read about and practice protecting your databases [SQL Injection on wikipedia](https://en.wikipedia.org/wiki/SQL_injection)
5. [PHP Manual - PHP Data Objects](https://www.php.net/manual/en/book.pdo.php)
6. [w3schools tutorials](https://www.w3schools.com/php/php_mysql_connect.asp)
7. Research and summarize in your own words: Use PDO, not SQLi.  Why?
8. [`PDO::prepare` — Prepares a statement for execution and returns a statement object](https://www.php.net/manual/en/pdo.prepare.php)
10. [`PDOStatement` — Represents a prepared statement and, after the statement is executed, an associated result set.](https://www.php.net/manual/en/class.pdostatement.php)
11. [`PDOStatement::execute` — Executes a prepared statement](https://www.php.net/manual/en/pdostatement.execute.php)
12. [`PDOStatement::fetch` — Fetches the next row from a result set](https://www.php.net/manual/en/pdostatement.fetch.php)
13. [`PDOStatement::fetchAll`  — Returns an array containing all of the result set rows](https://www.php.net/manual/en/pdostatement.fetchall.php)
14. Explore [PHP Exception Handling (w3schools)](https://www.w3schools.com/php/php_exception.asp) 
15. [`PDOException` — Represents an error raised by PDO. You should not throw a PDOException from your own code. ](https://www.php.net/manual/en/class.pdoexception.php)

# Practice exercises

> Some prep work first!

## Create a separate file containing your credentials, which you do not share and do not sent to anyone, including assignment submissions.
```php
// file includes/db.php
$SERVERNAME = "localhost";  // "localhost" assumes the php and database are on the same server
$DBNAME = "";   // userid_named where "named" is the name you chose to call your database
$USRID = "";    // userid with cPanel
$PASSWD = "";   // used with cPanel
```
Include the file prior to attempting to connect to the database.
```php
// add appropriate path as needed
require('includes/db.php');
```


## General Process

1. Design and construct user interface - HTML form.
2. Design, build and maintain a database.
3. Connect to data file.
4. Send an SQL query.
5. Process retrieved data.
6. Close connection to data file.




# Exercise 1: Using PDO and PHP Iterators

## Implement

[Using PHP Iterators to create and PDO to populate a table](https://bajcar.dev.fast.sheridanc.on.ca/php10199/pdo/t.php)

Start with https://tryphp.w3schools.com/showphpfile.php?filename=demo_db_select_pdo

Note the flow of events:

```php
try {
    // connect to database
    $conn = new PDO("mysql:host=$SERVERNAME;dbname=$DATABASENAME", $USERNAME, $PASSWORD);

    // prepare statement
    $stmt = $conn->prepare("SELECT id, firstname, lastname,favcolor, date FROM MyGuests"); 
    
    // execute statement
    $stmt->execute();

    // retrieve data from result set
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// close connection
$conn = null;
```

# Exercise 2: Keeping track of scores

## STEP 1: Create an html document containing a form

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

## STEP 2: Use phpMyAdmin web tool, to set up table

1. To create the database table for this example, log in to phpMyAdmin, select your database, and click on the Import tab.
2. The file to import is available here [scores.sql](https://pastebin.com/raw/HwHSZRtD) OR create a table called scores with the following structure:

```sql
CREATE TABLE scores (
  id int(11) NOT NULL AUTO_INCREMENT,
  player varchar(50) NOT NULL,
  score int(11) NOT NULL,
  date date NOT NULL,
  PRIMARY KEY (`id`)
)
```

## STEP 3-6: To process the form with PHP, you need to connect and work with databases

1. Create scoredb.php file.
2. Collect variables from HTML from post or get superglobal

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
$date = date("Y-m-d");
```

2. Open database connection 
```php
//OPEN DATABASE
//use your credentials set up in separate file
try {
    $dbh = new PDO("mysql:host=$SERVERNAME;dbname=$DBNAME", $USRID, $PASSWD);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "<br>Could not connect " . $e->getMessage();
}
```

3. Prepare the SQL string (line 65)

```php
//INSTRUCTION TO MYSQL
$command = "INSERT INTO scores ( player, score, date ) VALUES ( '$player','$score','$date')";
```

4. Use the PDO method "prepare"

```php
// prepare the statement for execution
$stmt = $dbh -> prepare($command);
```

Use the PDO method "execute" 

```php
if ( ! $stmt->execute() ) {
$error = "Sorry could not record score";  echo $error;  return;
}
```

5. Close database connection (do this only once at the end - use the connection for other statements)

```php
 $dbh = null;
```
  
  
# Exercise 3: Registration and Login forms

## STEP 1: Create an html document containing a form (from Assignment 6)

**NOTE:** Code includes only the fields needed for BOTH the login and registration form; it is up to you to include and complete the remaining fields from the registration form.


## STEP 2: Use phpMyAdmin web tool, to set up table

---
###Either manually (as demonstrated in class) or using SQL tab in phpMyadmin, create a table to correspond to (**you make up your own values**):

```sql
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startdate` date NOT NULL,
  `player` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
);
INSERT INTO `members` (`id`, `startdate`, `player`, `password`) VALUES
(1, '2016-07-14', 'ellen', 'elephant'),
(2, '2016-07-06', 'charlie', 'cherries');
```

## STEP 3-6: To process the form with PHP, you need to connect and work with databases

### Add a subdirectory "includes" to you project.
### Create a new file and name it "Member.class", store in subdirectory "includes" in your project

```php
<?php
/* Class name: 	Member
 * Description: A class that creates a User for members-only web app.
 * Citation:	PHP, MySQL, Javascript & HTML5 for Dummies, S.Suehring, J.Valade
 * Member is a data-aware class; data source that connects to a database
 * 
 * |----------------------------------------
 * | $id
 * | $firstName
 * | $password
...

 * | $isLoggedIn
 * |----------------------------------------
 * | __construct
 * | registerMember($safeUser, $newPass)
 * | authenticate($user, $pass)
 * | _initUser()
 * | _setSession()
 * |----------------------------------------
 */
 class Member {
	private $id;
	private $firstName;
	private $password;
	
	// TODO: add others fields from the registration form (don't forget to add them in methods appropriately
 
 
	/* Constructor: 
	 * starts session and calls_initUser() method to initialize user info
	 */
	function __construct() {
		if (session_id() == "") {
			session_start();
		}
		$this->_initUser();
	}    
  
	// TODO: add other methods
    

	/* 
	 *  private function _initUser() called by the constructor
	 */
	private function _initUser() {
		if (session_id() == '') {
			session_start();
		}		
		$this->id = $_SESSION['id'];
		$this->firstName = $_SESSION['firstName'];
		$this->password = $_SESSION['password'];
		$this->isLoggedIn = $_SESSION['isLoggedIn'];
	}
	
	/* 
	 *  public function _setSession() called from authenticate() function
	 */
	private function _setSession() {
		$_SESSION['id'] = $this->id;
		$_SESSION['firstName'] = $this->firstName;
		$_SESSION['password'] = $this->password;
		$_SESSION['isLoggedIn'] = $this->isLoggedIn;
	}	

 } // end class Member
 ?>
 ```
 
 ---
 ### Login form processing
 
 > **Note:** remember to include session_start() at the top of the page AND use the .php extension for every file that contains PHP code (even if you do not see it here).
 
 On your login page, add the following
 
 ```php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$_SESSION['formAttemp'] = true;
	$_SESSION['id'] = session_id();
	$_SESSION['isLoggedIn'] = false;

	if (isset($_POST['password']))
		if (!empty($_POST['password'])) 
			$_SESSION['password'] = $_POST['password'];
	if (isset($_POST['username']))
		if (!empty($_POST['username'])) {
			$safeuser = $_POST['username'];
			$_SESSION['firstName'] = $_POST['username'];
		} else {
		  // handle the bad name!
		}	
	require_once("includes/Member.class");
	$visitor = new Member;
	if ($visitor->authenticate($_POST['username'], $_POST['password'])) {	
		// proceed to member site 
		// TODO: start with a simple message that it worked
	} else {
		session_destroy();	
		// TODO: authentication unsuccessful, return to login
	}
}
```

---
### Add the authenticate method to your Memeber.class

```php
/* 
 *  public function authenticate($user, $pass)
 */
public function authenticate($user, $pass) {
	// connect to database
	require('includes/db.php');
	try {
      		$dbh = new PDO("mysql:host=localhost;dbname=$DATABASENAME", $USERNAME, $PASSWORD);
	} catch (Exception $e) {
		error_log("Cannot connect to MySQL: $e\n", 3, "myErrors.log");
		return false;
	}
	
	// retrieve user's record
	$safeUser = $user;
	$inPassword = $pass;
	$query = "SELECT * FROM members WHERE player='$safeUser'";
	if (!$result = $dbh->prepare($query)) {
		error_log("Cannot retrieve account for: $safeUser\n", 3, "myErrors.log");
		return false;
	}
	
	// compare userid and password
	if ( $result->execute() ) {
		$row = $result->fetch();		
		$dbPassword = $row['secret'];			
		if ($inPassword != $dbPassword) {
			error_log("Passwords do not match. $safeUser\n", 3, "myErrors.log");
			return false;				
		}
	}
	
	$this->firstName = $row['player'];
	$this->password = $row['secret'];
	$this->isLoggedIn = true;		
	//update current session info
	$this->_setSession();
	// close connection
	$dbh = NULL;
	return true;
}	
```

---
### Registration form processing
 
On your submission of the registration form page, add the following

```php
<?php
// Function to clean up a data string (from w3schools.com)
function clean($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function initProcess() {
	$_SESSION['formAttemp'] = true;  // can be implemented to restrict number of attempts
	$_SESSION['id'] = session_id();
	$_SESSION['isLoggedIn'] = false;
	$_SESSION['password'] = $_POST['password'];	
}

function testUsername() {	
	global $errMsg, $safeuser;
	if (isset($_POST['username']))
		if (!empty($_POST['username'])) {
			$safeuser = clean($_POST["username"]);
			$_SESSION['firstName'] = $_POST['username'];
		} else {
			$errMsg = "username field is empty. You must choose a username.";
			return false;
		}
	return true;
}

function testPassword() {	
	global $password, $errMsg, $safeuser;
	if (isset($_POST["password"])) {
		$password = clean($_POST["password"]);
		// when database field length is set to 40; what would be the minimum?
		if (strlen($password) < 4 || strlen($password) > 40) {
			error_log("Password must be between 4 and 40 characters: $password\n", 3, "myErrors.log");
			$errMsg = "Password parameter must be between 4 and 40 characters" . 
				  " long. The length of $password is " . strlen($password);
			return false;
		}
	} else {
		$errMsg = "Second parameter missing."; 
		error_log("$errMsg -missing.", 3, "myErrors.log");
		return false;
	}
	return true;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errMsg = '';
	global $safeuser, $password;
	initProcess();

	require_once("includes/Member.class");
	$visitor = new Member;	
	if (testUsername() && testPassword()) {
		if ($visitor->registerMember($safeuser, $password)) {
			// TODO: proceed to member site
		} else {
			session_destroy();
			// TODO: return to registration
		}			
	}else {
		echo "returned false line 102.";
	}
/*	
TODO: if successful, need to decide where to send the user
	choice 1. log them in authomatically, similar to sucessful authentication
	choice 2. return them to the login for proper first-time login
	choice 3. send an email for verification and take them to index.thml
*/	
}
?>
```

---
### Add the registerMember method to your Member.class

```php
/* 
 *  public function registerMember($safeUser)
 */
public function registerMember($safeUser, $newPass) {
	//connect to database
	require('info.php');
	try {
		$dbh = new PDO("mysql:host=localhost;dbname=$DATABASENAME", $USERNAME, $PASSWORD);
	} catch (Exception $e) {
		error_log("Cannot connect to MySQL: $e\n", 3, "myErrors.log");
		return false;
	}
	// if not using UNIQUE in database, ensure that the user does not exists already		
	// otherwise, insert new record
	$secret = $newPass; 
	$command = "INSERT INTO members ( player, secret ) 
				 VALUES ( '$safeUser','$secret')";							
	if (!$result = $dbh->prepare($command)) {
		error_log("Query does not appear to be correct: $safeUser\n", 3, "myErrors.log");
		return false;
	}	
	if (!$result->execute() ) {
		error_log("User already exists. $safeUser\n", 3, "myErrors.log");
		return false;	
	}	
	$this->_setSession();
	$dbh = NULL;
	return true;		
}
```



---
> *The materials provided in class and in SLATE are protected by copyright. They are intended for the personal, educational uses of students in this course and should not be shared externally or on websites such as Course Hero or OneClass. Unauthorized distribution may result in copyright infringement and violation of Sheridan policies.*
> 
> **SYST10199 Web Programming @ Sheridan College**
