<html>
<head>
<title>Connecting to the MySQL Server Using PHP and the Database</title>
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
die('<p>Could not select the QW555_PROJECT1 database because: <b>' .mysql_error().'</b></p>');
}
$query = "SELECT * FROM OWNER";

print "<p> You have Selected Owner Table, The data from Owner table as follows: </p>\n";
// output the resulting query table
if ($r = mysql_query($query))
{
while ($row = mysql_fetch_array($r)){
print "<p>{$row['OWNER_NUM']}&nbsp;{$row['LAST_NAME']}&nbsp;{$row['FIRST_NUM']}&nbsp;{$row['ADDRESS']}&nbsp;{$row['CITY']}&nbsp;{$row['STATE']}&nbsp;
{$row['ZIP']}</P>\n";
}
}

?>
</body>
</html>
