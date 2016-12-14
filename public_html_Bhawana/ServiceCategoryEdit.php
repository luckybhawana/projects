<html>
<head>
<title> Service Category Information </title> 

<t2> <b>Editting Service Category Information</b> </t2>
<br>
<br>
<br>

</head>
<body bgcolor = "#FFCCE0">

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

$categoryNumber = $_POST['categoryNumber'];

$query = "SELECT * FROM SERVICE_CATEGORY WHERE CATEGORY_NUM = '$categoryNumber'";
mysql_query($query);

if($result = mysql_query($query))
{
	while($row = mysql_fetch_array($result))
	{
		echo "<t3><b>Category Number is </b></t3><p>{$row['CATEGORY_NUM']}</p>\n";
		echo "<t3><b>Category Description is </b></t3><p>{$row['CATEGORY_DESCRIPTION']}</p>\n";
	}
}

?>

	<form align = "center" action = "ServiceCategoryEdit2.php" method = "POST">
		
		<p align = "center"><b>If you would want to change, Please enter the new Information</b></p>
		
		Please enter CATEGORY NUMBER: <input type = "text" name = "categoryNumber">
		<br><br>
		Please enter new CATEGORY DESCRIPTION: <input type = "text" name = "categoryDescription">
		<br><br><br>

		<input type = "submit" value = "Submit Updated Information">
		
		</form>
		
<br>
<br>
<br>

<p align = "center"><a href = "http://acadweb1.salisbury.edu/~BG0935/ServiceCategory.html" > <b>GO BACK </b></a></p>

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