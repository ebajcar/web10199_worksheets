<?php 
/*
Using here document
same as bash shell input redirection

Create valid HTML code
*/

print <<<TAG1
<!DOCTYPE html>
<html lang="en">
<head>
  <title>here doc and input redirection</title>
  <meta charset="utf-8">
</head>
<body>
  <header><h1>Page header</h1></header>
  <nav>
    <a href="#">Link1</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="#">Link2</a>
  </nav>
  <main>
    <h3>Content heading</h3>
    <p>Content &hellip;</p>
  </main>
  <footer>
    <address>Web Programming &copy; Sheridan College</address>
  </footer>
</body>
</html>
TAG1;


?>
