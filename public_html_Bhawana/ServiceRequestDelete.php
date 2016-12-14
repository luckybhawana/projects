<html>
<head>
<title> Deleting Service Request Information</title> 

<t2> <b>Service Request Information You want to Delete</b> </t2>
<br>
<br>
<br>
</head>

<body bgcolor = "#F9ECF9">

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

$serviceID = $_POST['serviceID'];

$query = "SELECT * FROM SERVICE_REQUEST WHERE SERVICE_ID = '$serviceID'";
mysql_query($query);

if($result = mysql_query($query))
{
	while($row = mysql_fetch_array($result))
	{
		echo "<t3><b>Service Id is </b></t3><p>{$row['SERVICE_ID']}</p>\n";
		echo "<t3><b>Slip ID is </b></t3><p>{$row['SLIP_ID']}</p>\n";
		echo "<t3><b>Category Number is </b></t3><p>{$row['CATEGORY_NUM']}</p>\n";
		echo "<t3><b>Description is </b></t3><p>{$row['DESCRIPTION']}</p>\n";
		echo "<t3><b>Status is </b></t3><p>{$row['STATUS']}</p>\n";
		echo "<t3><b>Estimated Hours is </b></t3><p>{$row['EST_HOURS']}</p>\n";
		echo "<t3><b>Spent Hours is </b></t3><p>{$row['SPENT_HOURS']}</p>\n";
		echo "<t3><b>Next Service Date is </b></t3><p>{$row['NEXT_SERVICEDATE']}</p>\n";
	}
}


?>

	<form align = "center" action = "ServiceRequestDelete2.php" method = "POST">
	<b>Are you sure you want delete this Information?</b>
	<br>
	<br>
	<b>Please re-enter the SERVICE ID you would want to delete: </b><input type = "text" name = "serviceID">
	<br><br>
	If YES <input type = "submit" value = "CLICK HERE TO DELETE">
	<br>
	<br>
	If NOT than Go Back by using this link --> <a href = "http://acadweb1.salisbury.edu/~BG0935/ServiceRequest.html" > GO BACK </a>
	</form>

</body>
</html>