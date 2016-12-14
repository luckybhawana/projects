<html>
<head>
<title>List of Service Request for Alexamara Marina </title>
</head>

<body bgcolor = "#74D1FF">
<?php

// Address error handling

ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

//Attempt to Connect

if ($connection = @mysql_connect ('localhost', 'BG0935', 'change')){
echo '';//'<p>Successfully connected to MySQL.</p>';
}
else {
die('<p>Could not connect to MySQL because: <b>' .mysql_error() .
'</b></p>');
}
if (@mysql_select_db("BG0935_PROJECT1", $connection)){
echo '';//'<p>The BG0935_PROJECT1 database has been selected.</p>';
}
else {
die('<p>Could not select the QW555_PROJECT1 database because: <b>' .mysql_error().'</b></p>');
}
$query = "SELECT * FROM SERVICE_REQUEST";

echo "<p> List of Alexamara Marina Owner are as follows: </p>\n";
// output the resulting query table
if ($r = mysql_query($query))
{
while ($row = mysql_fetch_array($r)){
echo "<p>{$row['SERVICE_ID']}&nbsp;{$row['SLIP_ID']}&nbsp;{$row['CATEGORY_NUM']}&nbsp;{$row['DESCRIPTION']}&nbsp;{$row['STATUS']}&nbsp;{$row['EST_HOURS']}&nbsp;{$row['SPENT_HOURS']}&nbsp;{$row['NEXT_SERVICEDATE']}</p>\n";
}
}

?>

<br>
<br>
<br>

<p align = "center"><a href = "http://acadweb1.salisbury.edu/~BG0935/ServiceRequest.html" > <b>GO BACK </b></a></p>

<br>
<br>
<br>
<br>

<footer align = "center">
<p> Created by: Bhawana Gautam </P>
<p> Contact Information : <a href = "mailto: bgautam1@gulls.salisbury.edu"> bgautam1@gulls.salisbury.edu</a> </p>
</footer>

</body>
</html>