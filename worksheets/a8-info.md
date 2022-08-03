# Additional information and code for Assignment 8

## General Process

1. Design and construct user interface - HTML form.
2. Design, build and maintain a database.
3. Connect to data file.
4. Send an SQL query.
5. Process retrieved data.
6. Close connection to data file.


> Use print_r() or var_dump() to trace values of data structures as you develop the code &mdash; same concept as using console.log() in Javascript.

  
## Registration and Login forms

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
  PRIMARY KEY (`id`)
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

> Note the use of `error_log()`. You can customize your error message. See [PHP manual](https://www.php.net/manual/en/function.error-log) for more details.


---
> *The materials provided in class and in SLATE are protected by copyright. They are intended for the personal, educational uses of students in this course and should not be shared externally or on websites such as Course Hero or OneClass. Unauthorized distribution may result in copyright infringement and violation of Sheridan policies.*
> 
> **SYST10199 Web Programming @ Sheridan College**
