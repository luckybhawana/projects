<html>
<head>
<title> Owner Information Inserted </title> 

<t2> <b>Inserted Owner Information</b> </t2>
<br>
<br>
<br>

</head>
<body bgcolor = "#FFD2F4">

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

$ownerNumber = $_POST['ownerNumber'];

$query = "SELECT * FROM OWNER WHERE OWNER_NUM = '$ownerNumber'";
mysql_query($query);

if($result = mysql_query($query))
{
	while($row = mysql_fetch_array($result))
	{
		echo "<t3><b>Owner number is </b></t3><p>{$row['OWNER_NUM']}</p>\n";
		echo "<t3><b>Owner First Name is </b></t3><p>{$row['FIRST_NUM']}</p>\n";
		echo "<t3><b>Owner Last Name is </b></t3><p>{$row['LAST_NAME']}</p>\n";
		echo "<t3><b>Owner address is </b></t3><p>{$row['ADDRESS']}</p>\n";
		echo "<t3><b>Owner City is </b></t3><p>{$row['CITY']}</p>\n";
		echo "<t3><b>Owner State is </b></t3><p>{$row['STATE']}</p>\n";
		echo "<t3><b>Owner Zip Code is </b></t3><p>{$row['ZIP']}</p>\n";
	}
}

?>

	<form align = "center" action = "OwnerPageEdit2.php" method = "POST">
		
		<p align = "center"><b>If you would want to change, Please enter the new Information</b></p>
		
		Please enter Owner Number: <input type = "text" name = "ownerNumber">
		<br><br>
		Please enter new OWNER LAST NAME: <input type = "text" name = "ownerLastName">
		<br><br>
		Please enter new OWNER FIRST NAME: <input type = "text" name = "ownerFirstName">
		<br><br>
		Please enter new OWNER ADDRESS: <input type = "text" name = "ownerAddress">
		<br><br>
		Please enter new OWNER CITY: <input type = "text" name = "ownerCity">
		<br><br>
		Please enter new Owner STATE: <input type = "text" name = "ownerState">
		<br><br>
		Please enter new OWNER ZIP CODE: <input type = "text" name = "ownerZip">
		<br><br><br>
		<input type = "submit" value = "Submit Updated Information">
		
		</form>
		
		
<br>
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