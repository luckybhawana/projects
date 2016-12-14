<html>
<head>
<title> Marina Information Inserted </title> 

<t2> <b>Inserted Marina Information </b></t2>
<br>
<br>
<br>

</head>

<body bgcolor = #FFE5F9>
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

	<form align = "center" action = "marinaPageEdit2.php" method = "POST">
		
		<p align = "center"><b>If you would want to change, Please enter the new Information</b></p>
		
		Please enter Marina Number: <input type = "text" name = "marinaNumber">
		<br><br>
		Please enter new MARINA NAME: <input type = "text" name = "marinaName">
		<br><br>
		Please enter new MARINA ADDRESS: <input type = "text" name = "marinaAddress">
		<br><br>
		Please enter new MARINA CITY: <input type = "text" name = "marinaCity">
		<br><br>
		Please enter new MARINA STATE: <input type = "text" name = "marinaState">
		<br><br>
		Please enter new MARINA ZIP CODE: <input type = "text" name = "marinaZip">
		<br><br><br>
		<input type = "submit" value = "Submit Updated Information">
		
		</form>
		
<br>
<br>
<br>

<p align = "center"><a href = "http://acadweb1.salisbury.edu/~BG0935/Marina.html" > <b>GO BACK </b></a></p>

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