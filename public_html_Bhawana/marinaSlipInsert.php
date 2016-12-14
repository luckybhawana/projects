<html>
<head>
<title> Inserting Marina Slip</title> 
<t2> <b>Inserting Marina Slip</b> </t2>
<br>
<br>
<br>
</head>

<body align = "center" bgcolor = "#D6D6F5">
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

$slipID = $_POST['slipID'];
$marinaNumber = $_POST['marinaNumber'];
$slipNumber = $_POST['slipNumber'];
$boatlength = $_POST['boatLength'];
$boatRentalFee= $_POST['boatRentalFee'];
$boatName = $_POST['boatName'];
$boatType = $_POST['boatType'];
$ownerNumber = $_POST['ownerNumber'];

//printing the information of the owner for the boat
echo 'Slip ID you have entered is  '.$slipID.'<br/>';
echo 'Marina Number you have entered is  '.$marinaNumber.'<br/>';
echo 'Slip Number you have entered is  '.$slipNumber.'<br/>';
echo 'Boat Lengths you have entered is  '.$boatLength.'<br/>';
echo 'Boat Rental Fee you have entered is  '.$boatRentalFee.'<br/>';
echo 'Boat Name you have entered is  '.$boatName.'<br/>';
echo 'Boat Type you have entered is  '.$boatType.'<br/>';
echo 'Boat Owner Number you have entered is '.$ownerNumber.'<br/>';

$query = "INSERT INTO MARINA_SLIP(SLIP_ID, MARINA_NUM, SLIP_NUM,LENGTH,RENTAL_FEE,BOAT_NAME,BOAT_TYPE,OWNER_NUM)
VALUES ('$slipID','$marinaNumber','$slipNumber','$boatlength','$boatRentalFee','$boatName','$boatType','$ownerNumber')";


echo '<br/>';
echo '<br/>
';
mysql_query($query);

echo 'Marina Slip information have successfully inserted into the table';

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