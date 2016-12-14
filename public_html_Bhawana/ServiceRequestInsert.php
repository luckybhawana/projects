<html>
<head>
<title> Inserting Service Request Infromation</title> 
</b>
<t2><b>Service Request Information</b></t2>
<br>
<br>
<br>

</head>

<body bgcolor = "#D7F2FF">
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

$serviceID = $_POST['serviceID'];
$slipID = $_POST['slipID'];
$categoryNumber = $_POST['categoryNumber'];
$Description = $_POST['Description'];
$Status = $_POST['Status'];
$estimatedHours = $_POST['estimatedHours'];
$spentHours = $_POST['spentHours'];
$nextServiceDate = $_POST['nextServiceDate'];

//printing the information of the owner for the boat
echo 'Service Id you have entered is  '.$serviceID.'<br/>';
echo 'Slip Id you have entered is  '.$slipID.'<br/>';
echo 'Category Number you have entered is  '.$categoryNumber.'<br/>';
echo 'Description you have entered is  '.$Description.'<br/>';
echo 'Status of the request you have entered is  '.$Status.'<br/>';
echo 'Estimated hours you have entered is  '.$estimatedHours.'<br/>';
echo 'Hours spent you have entered is  '.$spentHours.'<br/>';
echo 'Next available service data you have entered is  '.$nextServiceDate.'<br/>';


$query = "INSERT INTO SERVICE_REQUEST(SERVICE_ID, SLIP_ID, CATEGORY_NUM,DESCRIPTION,STATUS,EST_HOURS,SPENT_HOURS,NEXT_SERVICEDATE)
VALUES ('$serviceID','$slipID','$categoryNumber','$Description','$Status','$estimatedHours','$spentHours','$nextServiceDate')";

mysql_query($query);

echo 'Data you have entered is successfully inserted into the database'.'<br/>'.'<br/>';

?>

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