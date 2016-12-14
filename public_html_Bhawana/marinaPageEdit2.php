<html>
<head>
<title> Marina Information Inserted </title> 

<t2> <b>Inserted Marina New Information</b> </t2>
<br>
<br>
</head>
<body bgcolor = "D2D2FF">
<?php

// Address error handling
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);


//Attempt to Connect
if ($connection = @mysql_connect ('localhost', 'BG0935', 'change')){
//echo '<p>Successfully connected to MySQL.</p>';
echo '';
}
else {
die('<p>Could not connect to MySQL because: <b>' .mysql_error() .
'</b></p>');
}

if (@mysql_select_db("BG0935_PROJECT1", $connection)){
//print '<p>The BG0935_PROJECT1 database has been selected.</p>';
echo '';
}
else {
die('<p>Could not select the BG0935_PROJECT1 database because: <b>' .mysql_error().'</b></p>');
}

$marinaNumber = $_POST['marinaNumber'];
$marinaName = $_POST['marinaName'];
$marinaAddress = $_POST['marinaAddress'];
$marinaCity = $_POST['marinaCity'];
$marinaState = $_POST['marinaState'];
$marinaZip = $_POST['marinaZip'];


$query =  "UPDATE MARINA SET  NAME = '$marinaName', ADDRESS = '$marinaAddress', CITY = '$marinaCity', STATE = '$marinaState', ZIP = '$marinaZip' WHERE MARINA_NUM = '$marinaNumber'"; 
mysql_query($query);


echo '<b>Marina Information after UPDATE</b>'.'<br />'.'<br />';
echo '<b>Marina Number is </b>'.$marinaNumber.'<br />';
echo '<b>Marina Name is </b>'.$marinaName.'<br />';
echo '<b>Marina Address is </b>'.$marinaAddress.'<br />';
echo '<b>Marina City is </b>'.$marinaCity.'<br />';
echo '<b>Marina Stat is </b>'.$marinaState.'<br />';
echo '<b>Marina Zip Code is </b>'.$marinaZip.'<br />';

echo 'Information is successfully editted into the database';

?>

<br>
<br>
<br>

<p align = "center"><a href = "http://acadweb1.salisbury.edu/~BG0935/marinaPageEdit.php" > <b>GO BACK </b></a></p>

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