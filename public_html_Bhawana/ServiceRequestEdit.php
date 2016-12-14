<html>
<head>
<title> Service Request Information Inserted </title> 

<t2> <b>Inserted Service Request Information</b> </t2>
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
echo '<p>Successfully connected to MySQL.</p>';
}
else {
die('<p>Could not connect to MySQL because: <b>' .mysql_error() .
'</b></p>');
}

if (@mysql_select_db("BG0935_PROJECT1", $connection)){
print '<p>The BG0935_PROJECT1 database has been selected.</p>';
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

	<form align = "center" action = "ServiceRequestEdit2.php" method = "POST">
		
		<p align = "center"><b>If you would want to change, Please enter the new Information</b></p>
		
		Please enter Service Id: <input type = "text" name = "serviceID">
		<br><br>
		Please enter Slip ID: <input type = "text" name = "slipID">
		<br><br>
		Please enter new Category Number : <input type = "text" name = "categoryNumber">
		<br><br>
		Please enter new Description: <input type = "text" name = "Description">
		<br><br>
		Please enter new Status: <input type = "text" name = "Status">
		<br><br>
		Please enter new Estimated Hours: <input type = "text" name = "estimatedHours">
		<br><br>
		Please enter new Spent Hours: <input type = "text" name = "spentHours">
		<br><br>
		Please enter new Service Date: <input type = "text" name = "nextServiceDate">
		<br><br><br>
		<input type = "submit" value = "Submit Updated Information">
		
		</form>
		
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