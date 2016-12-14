<html>
<head>
<title> Deleting Service Category Information</title> 

<t2> <b>Service Category Information You want to Delete</b> </t2>
<br>
<br>
<br>
</head>
<body bgcolor = "#D2E8FF">

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

$categoryNumber = $_POST['categoryNumber'];

$query = "SELECT * FROM SERVICE_CATEGORY WHERE CATEGORY_NUM = '$categoryNumber'";
mysql_query($query);

if($result = mysql_query($query))
{
	while($row = mysql_fetch_array($result))
	{
		echo "<t3><b>Category ID is </b></t3><p>{$row['CATEGORY_NUM']}</p>\n";
		echo "<t3><b>Category Description is </b></t3><p>{$row['CATEGORY_DESCRIPTION']}</p>\n";
	}
}


?>

	<form align = "center" action = "ServiceCategoryDelete2.php" method = "POST">
	<b>Are you sure you want delete this Information?</b>
	<br>
	<br>
	<b>Please re-enter the CATEGORY ID you would want to delete: </b><input type = "text" name = "categoryNumber">
	<br><br>
	If YES <input type = "submit" value = "CLICK HERE TO DELETE">
	<br>
	<br>
	If NOT than Go Back by using this link --> <a href = "http://acadweb1.salisbury.edu/~BG0935/ServiceCategory.html" > GO BACK </a>
	</form>

</body>
</html>