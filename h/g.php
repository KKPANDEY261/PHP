<?php 

$con=mysqli_connect('localhost','root','','hello');
if(mysqli_connect_errno()){
    echo 'connection is denied'.mysqli_connect_error();
}
?>