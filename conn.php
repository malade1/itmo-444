<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


DEFINE ('dbhost', 'malad-itmo544.cxssd0od9ehf.us-west-2.rds.amazonaws.com');
DEFINE ('dbuser', 'controlleritmo');
DEFINE ('dbpaswd', 'myawsitmo544');
DEFINE ('dbname', 'customers');
DEFINE('dbport', '3306')
$link = mysqli_connect(dbhost, dbuser, dbpaswd, dbname, dbport);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
?>