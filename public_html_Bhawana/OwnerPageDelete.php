<html>
<head>
<title> Deleting Owner Information</title> 

<t2> <b>Owner Information You want to Delete</b> </t2>
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

	<form align = "center" action = "OwnerPageDelete2.php" method = "POST">
	<b>Are you sure you want delete this Information?</b>
	<br>
	<br>
	<b>Please re-enter the OWNER NUMBER you would want to delete: </b><input type = "text" name = "ownerNumber">
	<br><br>
	If YES <input type = "submit" value = "CLICK HERE TO DELETE">
	<br>
	<br>
	If NOT than Go Back by using this link --> <a href = "http://acadweb1.salisbury.edu/~BG0935/Owner.html" > GO BACK </a>
	</form>

</body>
</html>