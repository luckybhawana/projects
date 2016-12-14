<html>
<head>
<title> Deleting Marina Information</title> 

<br>
<br>
</head>
<body bgcolor = "#88E1FF">

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

$query =  "DELETE FROM MARINA WHERE MARINA_NUM = '$marinaNumber'"; 

mysql_query($query);

echo '<p>The information is successfully deleted from the table<p>';

?>

</body>
</html>
