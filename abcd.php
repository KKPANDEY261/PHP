<?php
$kk = new mysqli("localhost","root","","kolkata");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST["roll"];
    $name=$_POST["name"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];

    
    //$sql= "insert into hh (roll_no,name) values('$id','$name')";
   $sql="update hh set name='$name',address='$address',mobile='$phone' where roll_no='$id'";
    if(mysqli_query($kk,$sql)){
        //echo "<p>successfully updated</p>";  
      
        //header('location:abcd.php');
        echo "<script>alert('successfully updated');</script>";
    }
    else{
        echo "error".mysqli_error($kk);
}
mysqli_close($kk);
}
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <form method="POST">
        <input name="roll"><br>
        <input name="name"><br>
        <input name="address"><br>
        <input name="phone"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>