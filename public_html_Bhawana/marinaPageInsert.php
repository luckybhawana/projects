<html>
<head>
<title> Updating Marina Infromation</title> 

<t2> <b>Inserting Marina Information </b></t2>
<br>
<br>
<br>
</head>
<body align = "center" bgcolor = "#E6E6FA">
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

$marinaNumber = $_POST['marinaNumber'];
$marinaName = $_POST['marinaName'];
$marinaAddress = $_POST['marinaAddress'];
$marinaCity = $_POST['marinaCity'];
$marinaState = $_POST['marinaState'];
$marinaZip = $_POST['marinaZip'];

//printing the information of the owner for the boat
echo 'Marina Number you have entered is  '.$marinaNumber.'<br/>'.'<br/>';
echo 'Marina Name you have entered is  '.$marinaName.'<br/>'.'<br/>';
echo 'Marina Address you have entered is  '.$marinaAddress.'<br/>'.'<br/>';
echo 'Marina City you have entered is  '.$marinaCity.'<br/>'.'<br/>';
echo 'Marina State you have entered is  '.$marinaState.'<br/>'.'<br/>';
echo 'Marina Zip Code you have entered is  '.$marinaZip.'<br/>'.'<br/>';

if (@mysql_select_db("BG0935_PROJECT1", $connection)){
//print '<p>The BG0935_PROJECT1 database has been selected.</p>';
echo '';
}
else {
die('<p>Could not select the BG0935_PROJECT1 database because: <b>' .mysql_error().'</b></p>');
}

$query = "INSERT INTO MARINA(MARINA_NUM,NAME,ADDRESS,CITY,STATE,ZIP)
VALUES ('$marinaNumber','$marinaName','$marinaAddress','$marinaCity','$marinaState','$marinaZip')";

mysql_query($query);

echo 'Information you have entered has successfully inserted into the database'.'<br/>';

?>

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