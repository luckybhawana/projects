<html>
<head>
<title>List of Alexamara Marina, Marina Slip </title>
</head>

<body align = "center" bgcolor = "#E3C6FF">
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
$query = "SELECT * FROM MARINA_SLIP";

echo "<p> List of Alexamara Marina Owner are as follows: </p>\n";
// output the resulting query table
if ($r = mysql_query($query))
{
while ($row = mysql_fetch_array($r)){
echo "<p>{$row['SLIP_ID']}&nbsp;{$row['MARINA_NUM']}&nbsp;{$row['SLIP_NUM']}&nbsp;{$row['LENGTH']}&nbsp;{$row['RENTAL_FEE']}&nbsp;{$row['BOAT_NAME']}&nbsp;{$row['BOAT_TYPE']}&nbsp;{$row['OWNER_NUM']}</p>\n";

}
}

?>

<br>
<br>
<br>

<p align = "center"><a href = "http://acadweb1.salisbury.edu/~BG0935/MarinaSlip.html" > <b>GO BACK </b></a></p>

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