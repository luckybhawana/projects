<html>
<head>
<title> Updating Owner Infromation</title> 

<t2> <b>Inserting Owner Information</b> </t2>

<br>
<br>
<br>
</head>
<body align = "center" bgcolor = "#CCEBFF">
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

$ownerNumber = $_POST['ownerNumber'];
$ownerLastName = $_POST['ownerLastName'];
$ownerFirstName = $_POST['ownerFirstName'];
$ownerAddress = $_POST['ownerAddress'];
$ownerCity = $_POST['ownerCity'];
$ownerState = $_POST['ownerState'];
$ownerZip = $_POST['ownerZip'];

//printing the information of the owner for the boat
echo 'Owner Number you have entered is  '.' '.$ownerNumber.'<br/>';
echo 'Owner Last Name you have entered is  '.' '.$ownerLastName.'<br/>';
echo 'Owner First Name you have entered is  '.' '.$ownerFirstName.'<br/>';
echo 'Owner Address you have entered is  '.' '.$ownerAddress.'<br/>';
echo 'Owner City you have entered is  '.' '.$ownerCity.'<br/>';
echo 'Owner State you have entered is  '.' '.$ownerState.'<br/>';
echo 'Owner Zip Code you have entered is  '.' '.$ownerZip.'<br/>';


if (@mysql_select_db("BG0935_PROJECT1", $connection)){
//print '<p>The BG0935_PROJECT1 database has been selected.</p>';
echo '';
}
else {
die('<p>Could not select the BG0935_PROJECT1 database because: <b>' .mysql_error().'</b></p>');
}

$query = "INSERT INTO OWNER(OWNER_NUM, LAST_NAME, FIRST_NUM,ADDRESS,CITY,STATE,ZIP)
VALUES ('$ownerNumber','$ownerLastName','$ownerFirstName','$ownerAddress','$ownerCity','$ownerState','$ownerZip')";

mysql_query($query);

echo 'Information is successfully inserted into the database';

?>

<br>
<br>
<br>

<p align = "center"><a href = "http://acadweb1.salisbury.edu/~BG0935/Owner.html" > <b>GO BACK </b></a></p>

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