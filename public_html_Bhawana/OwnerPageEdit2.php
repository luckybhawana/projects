<html>
<head>
<title> Owner Information Inserted </title> 

<t2> <b>Inserted Owner New Information </b></t2>
<br>
<br>
<br>

</head>
<body bgcolor = "#D6E0F5">
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

$ownerNumber = $_POST['ownerNumber'];
$ownerLastName = $_POST['ownerLastName'];
$ownerFirstName = $_POST['ownerFirstName'];
$ownerAddress = $_POST['ownerAddress'];
$ownerCity = $_POST['ownerCity'];
$ownerState = $_POST['ownerState'];
$ownerZip = $_POST['ownerZip'];


$query =  "UPDATE OWNER SET  LAST_NAME = '$ownerLastName',FIRST_NUM = '$ownerFirstName', ADDRESS = '$ownerAddress', CITY = '$ownerCity', STATE = '$ownerState', ZIP = '$ownerZip' WHERE OWNER_NUM = '$ownerNumber'"; 
mysql_query($query);


echo '<b>Owner Information after UPDATE</b>'.'<br />'.'<br />';
echo '<b>Owner Number is </b>'.' '.$ownerNumber.'<br />';
echo '<b>Owner Last Name is </b>'.' '.$ownerLastName.'<br />';
echo '<b>Owner First Name is </b>'.' '.$ownerFirstName.'<br />';
echo '<b>Owner Address is </b>'.' '.$ownerAddress.'<br />';
echo '<b>Owner City is </b>'.' '.$ownerCity.'<br />';
echo '<b>Owner Stat is </b>'.' '.$ownerState.'<br />';
echo '<b>Owner Zip Code is </b>'.' '.$ownerZip.'<br />';

echo 'Information has been successfully editted into the database';

?>

<br>
<br>
<br>

<p align = "center"><a href = "http://acadweb1.salisbury.edu/~BG0935/OwnerPageEdit.php"> <b>GO BACK </b></a></p>

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