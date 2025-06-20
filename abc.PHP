<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST["roll"];
    $name=$_POST["name"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];


    $kk=new mysqli("localhost","root","","kolkata");
$sql= "insert into hh (roll_no,name) values('$id','$name')";
$ef=$kk->query($sql);
//$kk->query("insert into hh (roll_no,name) values('$id','$name')");
if(mysqli_query($kk,$sql)){
    echo "<p>submited successfully</p>";
}




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
        <input  name="roll"><br>
       <input  name="name"><br>
       <input  name="address"><br>
       <input  name="phone"><br>
        <input type="submit" value="Submit">
    </form>
    
    
</body>
</html>