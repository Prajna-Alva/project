<?php
include 'db_connection.php';
 
$conn = OpenCon();
 
echo "Connection has been established Successfully";
 
CloseCon($conn);
 
?>