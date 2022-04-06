<html>
<head>
<title> Access the Record Store database MySQL </title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php

// Connect to MySQL

$servername = "cs100.seattleu.edu";
$username = "user7";
$password = "1234abcdF!";

$conn = mysql_connect($servername, $username, $password);

if (!$conn) {
     print "Error - Could not connect to MySQL ".$conn;
     exit;
}

$dbname = "bw_db7";

$db = mysql_select_db($dbname, $conn);
if (!$db) {
    print "Error - Could not select the record label database ".$dbname;
    exit;
}

$aID = $_POST['aID'];

// Clean up the given query (delete leading and trailing whitespace)
trim($aID);

// remove the extra slashes
$aID = stripslashes($aName);

$query = 'DELETE FROM Artist WHERE aID = '.$aID = $_POST['aID'].' ;';

// Execute the query
$result = mysql_query($query);
if($result){
    print "Record deleted Successfully";
}

if (!$result) {
    print "Error - the query could not be executed";
    $error = mysql_error();
    print "<p>" . $error . "</p>";
    exit;
}

mysql_close($conn);
?>

<br /><br />
<a href="http://css1.seattleu.edu/~lelinh/PDA6/dbtest/db.html"> Go to Main Page </a>

</body>
</html>