<?php
$conn=mysqli_connect("localhost","root","","files1");

if($_SERVER['REQUEST_METHOD'] == 'POST' ){

    $file_name = $_FILES ['file'] ['name'];
    $file_tmp = $_FILES ['file']['tmp_name'];
    $file_path= "uploads/" . $file_name;


    move_uploaded_file($file_tmp,$file_path);
    mysqli_query ($conn,"INSERT INTO file1 (name,path)values('$file_name','$file_path')");
    echo"file uploaded";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="file" name="file" required>
        <input type="submit" value="uploade">

    </form>
    
</body>
</html>
