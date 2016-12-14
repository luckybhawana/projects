<html>
<head>
<title> New Service Request Information</title> 
</b>
<t2> <b>Inserted New Service Request Information</b> </t2>
<br>
<br>
<br>
</head>

<body bgcolor = "#F5D6EB">
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


$query =  "UPDATE SERVICE_REQUEST SET  SERVICE_ID = '$serviceID',SLIP_ID = '$slipID', CATEGORY_NUM = '$categoryNumber', DESCRIPTION = '$Description', STATUS = '$Status', EST_HOURS = '$estimatedHours',SPENT_HOURS = '$spentHours', NEXT_SERVICEDATE = '$nextServiceDate'  WHERE SERVICE_ID = '$serviceID'"; 
mysql_query($query);


echo '<b>Service Request Information after UPDATE</b>'.'<br />'.'<br />';
echo 'Service Id you have entered is  '.$serviceID.'<br/>';
echo 'Slip Id you have entered is  '.$slipID.'<br/>';
echo 'Category Number you have entered is  '.$categoryNumber.'<br/>';
echo 'Description you have entered is  '.$Description.'<br/>';
echo 'Status of the request you have entered is  '.$Status.'<br/>';
echo 'Estimated hours you have entered is  '.$estimatedHours.'<br/>';
echo 'Hours spent you have entered is  '.$spentHours.'<br/>';
echo 'Next available service data you have entered is  '.$nextServiceDate.'<br/>';

echo 'Data has successfully editted';

?>

<br>
<br>
<br>

<p align = "center"><a href = "http://acadweb1.salisbury.edu/~BG0935/ServiceRequestEdit.php" > <b>GO BACK </b></a></p>

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