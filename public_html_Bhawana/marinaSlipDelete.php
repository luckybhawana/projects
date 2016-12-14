<html>
<head>
<title> Deleting marina slip Information</title> 

<t2> <b>Marina Slip Information You want to Delete</b> </t2>
<br>
<br>

</head>

<body bgcolor = "#E5F9FF">

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
die('<p>Could not select the BG0935_PROJECT1 database because: <b>' .mysql_error().'</b></p>');
}

//<t3><b>Owner old information is as follows: </b></t3>

$slipID = $_POST['slipID'];

$query = "SELECT * FROM MARINA_SLIP WHERE SLIP_ID = '$slipID'";
mysql_query($query);

if($result = mysql_query($query))
{
	while($row = mysql_fetch_array($result))
	{
		echo "<h3>Slip ID: </h3><p>{$row['SLIP_ID']}</p>\n";
		echo "<h3>Marina Number: </h3><p>{$row['MARINA_NUM']}</p>\n";
		echo "<h3>Slip Number: </h3><p>{$row['SLIP_NUM']}</p>\n";
		echo "<h3>Length: </h3><p>{$row['LENGTH']}&nbsp;</p>\n";
		echo "<h3>Rental Fee: </h3><p>{$row['RENTAL_FEE']}&nbsp;</p>\n";
		echo "<h3>Boat Name: </h3><p>{$row['BOAT_NAME']}&nbsp;</p>\n";
		echo "<h3>Boat Type: </h3><p>{$row['BOAT_TYPE']}&nbsp;</p>\n";
		echo "<h3>Owner Number: </h3><p>{$row['OWNER_NUM']}&nbsp;</p>\n";
	}
}

?>

	<form align = "center" action = "marinaSlipDelete2.php" method = "POST">
	<b>Are you sure you want delete this Information?</b>
	<br>
	<br>
	<b>Please re-enter the SLIP ID you would want to delete: </b><input type = "text" name = "slipID">
	<br><br>
	If YES <input type = "submit" value = "CLICK HERE TO DELETE">
	<br>
	<br>
	If NOT than Go Back by using this link --> <a href = "http://acadweb1.salisbury.edu/~BG0935/MarinaSlip.html" > GO BACK </a>
	</form>

</body>
</html>