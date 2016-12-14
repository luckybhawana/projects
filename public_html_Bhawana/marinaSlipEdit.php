<html>
<head>
<title> Mrina SLip Information Inserted </title> 

<t2> <b>Edditing Marina Slip Information</b> </t2>
<br>
<br>
<br>

</head>
<body bgcolor = "#F2E5FF">

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

//<t3><b>Owner old information is as follows: </b></t3>

$slipID = $_POST['slipID'];

$query =  "SELECT * FROM MARINA_SLIP WHERE SLIP_ID = '$slipID'"; 
mysql_query($query);
// output the resulting query table
if ($r = mysql_query($query))
{
	while ($row = mysql_fetch_array($r)){
		print "<h3>Slip ID: </h3><p>{$row['SLIP_ID']}</p>\n";
		print "<h3>Marina Number: </h3><p>{$row['MARINA_NUM']}</p>\n";
		print "<h3>Slip Number: </h3><p>{$row['SLIP_NUM']}</p>\n";
		print "<h3>Length: </h3><p>{$row['LENGTH']}&nbsp;</p>\n";
		print "<h3>Rental Fee: </h3><p>{$row['RENTAL_FEE']}&nbsp;</p>\n";
		print "<h3>Boat Name: </h3><p>{$row['BOAT_NAME']}&nbsp;</p>\n";
		print "<h3>Boat Type: </h3><p>{$row['BOAT_TYPE']}&nbsp;</p>\n";
		print "<h3>Owner Number: </h3><p>{$row['OWNER_NUM']}&nbsp;</p>\n";
}

}

?>

	<form align = "center" action = "marinaSlipEdit2.php" method = "POST">
		
		<p align = "center"><b>If you would want to change, Please enter the new Information</b></p>
		
		
		Please enter Slip ID: <input type = "text" name = "slipID">
		<br><br>
		Please enter new Marina Number: <input type = "text" name = "marinaNumber">
		<br><br>
		Please enter new Slip Number: <input type = "text" name = "slipNumber">
		<br><br>
		Please enter new Boat Length: <input type = "text" name = "boatLength">
		<br><br>
		Please enter new Rental Fee: <input type = "text" name = "boatRentalFee">
		<br><br>
		Please enter new Boat Name: <input type = "text" name = "boatName">
		<br><br>
		Please enter new Boat Type: <input type = "text" name = "boatType">
		<br><br>
		Please enter new Owner Number: <input type = "text" name = "ownerNumber">
		<br><br>
		
		<input type = "submit" value = "Submit Updated Information">
		
		</form>
		
		
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