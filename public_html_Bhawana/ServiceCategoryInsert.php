<html>
<head>
<title> Inserting Service Category Information</title> 
</b>
<t2> <b>Inserting Service Category Information</b> </t2>
<br>
<br>
<br>
</head>

<body bgcolor = "#E5F2FF">
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

$categoryNumber = $_POST['categoryNumber'];
$categoryDescription = $_POST['categoryDescription'];


//printing the information of the owner for the boat
echo 'Category Number you have entered is  '.$categoryNumber.'<br/>';
echo 'Category Description you have entered is  '.$categoryDescription.'<br/>';



$query = "INSERT INTO SERVICE_CATEGORY(CATEGORY_NUM,CATEGORY_DESCRIPTION)
VALUES ('$categoryNumber','$categoryDescription')";

mysql_query($query);

echo 'Information have been successfully inserted into the database';

?>

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