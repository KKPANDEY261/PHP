<?PHP
$con = mysqli_connect('localhost', 'root', '', 'hello');
if(mysqli_connect_errno()){
    echo  mysqli_connect_error();
}
?>