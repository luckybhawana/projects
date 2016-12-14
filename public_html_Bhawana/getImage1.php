<?php

// Address error handling

ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
//Attempt to Connect

if ($connection = @mysql_connect ('localhost', 'BG0935', 'change')){
	//print '<p>Successfully connected to MySQL.</p>';
	 
}
else {
	die('<p>Could not connect to MySQL because: <b>' .mysql_error() .
	'</b></p>');
}
if (@mysql_select_db("BG0935_PROJECT1", $connection)){
	//print '<p>The Your database database has been selected.</p>';
}
else {
	die('<p>Cound not select the Your database database because: <b>' .mysql_error().'</b></p>');
}


$id = $_REQUEST['id'];


$image = mysql_query("SELECT * FROM IMAGES WHERE ID = $id");
$imageArray=mysql_fetch_assoc($image);
$image=$imageArray['IMAGE'];



$filename=$imageArray['NAME'];
$ext=end(explode('.',$filename));
header("content-type:$ext");
echo $image;
echo $id;

?>
