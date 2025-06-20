<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "kolkata";
$conn=new mysqli($servername, $username, $password, $dbname);
$sql="select * from hh";
$r=$conn->query($sql);
print_r($r);
$s=$r->fetch_assoc();
print_r($s);
?>