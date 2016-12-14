<html>
<head>
<title> Deleting Marina Information</title> 

<t2> <b> Marina Information You want to Delete </b></t2>
<br>
<br>
</head>

<body bgcolor = "#C6F1FF">
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

$marinaNumber = $_POST['marinaNumber'];

$query = "SELECT * FROM MARINA WHERE MARINA_NUM = '$marinaNumber'";
mysql_query($query);

if($result = mysql_query($query))
{
	while($row = mysql_fetch_array($result))
	{
		echo "<t3><b>Marina number is </b></t3><p>{$row['MARINA_NUM']}</p>\n";
		echo "<t3><b>Marina Name is </b></t3><p>{$row['NAME']}</p>\n";
		echo "<t3><b>Marina address is </b></t3><p>{$row['ADDRESS']}</p>\n";
		echo "<t3><b>Marina City is </b></t3><p>{$row['CITY']}</p>\n";
		echo "<t3><b>Marina State is </b></t3><p>{$row['STATE']}</p>\n";
		echo "<t3><b>Marina Zip Code is </b></t3><p>{$row['ZIP']}</p>\n";
	}
}


?>

	<form align = "center" action = "marinaPageDelete2.php" method = "POST">
	<b>Are you sure you want delete this Information?</b>
	<br>
	<br>
	<b>Please re-enter the MARINA NUMBER you would want to delete: </b><input type = "text" name = "marinaNumber">
	<br><br>
	If YES <input type = "submit" value = "CLICK HERE TO DELETE">
	<br>
	<br>
	If NOT than Go Back by using this link --> <a href = "http://acadweb1.salisbury.edu/~BG0935/Marina.html" > GO BACK </a>
	</form>

</body>
</html>