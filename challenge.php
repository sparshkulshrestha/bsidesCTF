<!DOCTYPE HTML>
<?php
require("flag.php");
if (isset($_GET['Und3rd@wgs']))
{
    $md5=$_GET['Und3rd@wgs'];
    if ($md5==md5($md5))
        echo "Hey, How are you? Flag : ".$flag; //.require __DIR__."/flag.php";
    else
        echo "How high are you... ";
}

?>

<html>
  <head>
    <title>CirCus : 404</title>
  </head>
  <body>
    <h1>Look at source code</h1>
  </body>
</html>
