<?php
$con = mysql_connect("localhost","root","root");
if($con ==FALSE){
throw new Exception("Could not connect to Database, Reason: " . mysql_error());}

mysql_select_db("blackbox_prod", $con);

$result = mysql_query("SELECT * FROM auto_allot_history");

while($row = mysql_fetch_array($result)) {
  echo $row['id'] . "\t" . $row['crn']. "\n";
}
// error_log(print_r($result),0);
mysql_close($con);
?> 