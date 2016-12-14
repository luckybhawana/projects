<html>
<head>
<title>Connecting to the MySQL Server Using PHP and the Database</title> 
</b>
<t2>Listing all the data form the databse for MARINA TABLE</t2>
<br>
<br>
<br>

</head>
<body>
<?php

// Address error handling
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);


//Attempt to Connect
if ($connection = @mysql_connect ('localhost', 'BG0935', 'change')){
print '<p>Successfully connected to MySQL.</p>';
}
else {
die('<p>Could not connect to MySQL because: <b>' .mysql_error() .
'</b></p>');
}

if (@mysql_select_db("BG0935_PROJECT1", $connection)){
print '<p>The BG0935_PROJECT1 database has been selected.</p>';
}
else {
die('<p>Could not select the BG0935_PROJECT1 database because: <b>' .mysql_error().'</b></p>');
}

$query = "SELECT * FROM MARINA";

print "<p> You have Selected MARINA Table, The data from MARINA table as follows: </p>\n";
// output the resulting query table
if ($r = mysql_query($query))
{
	while ($row = mysql_fetch_array($r)){
		
		print "<p>Information about Marina:</p>\n";
		print "<p>Marina Number: </p>"."<p>{$row['MARINA_NUM']}</p>\n";
		print "<p>Marina Name: </p>"."<p>{$row['NAME']}</p>\n";
		print "<p>Marina Street Address:</p>"."<p>{$row['ADDRESS']}</p>\n";
		print "<p>Marina City:</p>"."<p>{$row['CITY']}</p>\n";
		print "<p>Marina State:</p>"."<p>{$row['STATE']}</p>\n";		
		print "<p>Marina ZipCode:</p>"."<p>{$row['ZIP']}</p>\n";
}
}

?>
</body>
</html>