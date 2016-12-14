<html>
<head>
<title> Marina Slip Information Inserted </title> 
</b>
<t2> <b>Inserted Marina Slip New Information</b> </t2>
<br>
<br>
<br>
</head>
<body bgcolor = "#E3C6FF">
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


$query =  "UPDATE MARINA_SLIP SET MARINA_NUM = '$marinaNumber',SLIP_NUM = '$slipNumber', 
LENGTH = '$boatlength', RENTAL_FEE = '$boatRentalFee', BOAT_NAME = '$boatName' BOAT_TYPE = '$boatType', OWNER_NUM = '$ownerNumber' 
WHERE SLIP_ID = '$slipID'"; 

mysql_query($query);

		echo '<b>Marina Slip information after Update</b>'.'<br/>'.'<br/>';
		
		echo '<b>Slip ID is </b>'.$slipID.'<br/>';
		echo '<b>Marina Number is </b>'.$marinaNumber.'<br/>';
		echo '<b>Slip Number is </b>'.$slipNumber.'<br/>';
		echo '<b>Boat Lengths is </b>'.$boatlength.'<br/>';
		echo '<b>Boat Rental Fee is </b>'.$boatRentalFee.'<br/>';
		echo '<b>Boat Name is </b>'.$boatName.'<br/>';
		echo '<b>Boat Type is </b>'.$boatType.'<br/>';
		echo '<b>Boat Owner Number is </b>'.$ownerNumber.'<br/>'.'<br/>';

		echo '<b> Marina Slip Information is successfully editted</b>'.'<br/>';
		
		echo 'Information has been successfully editted into the database';
		
?>


<br>
<br>
<br>

<p align = "center"><a href = "http://acadweb1.salisbury.edu/~BG0935/marinaSlipEdit.php" > <b>GO BACK </b></a></p>

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