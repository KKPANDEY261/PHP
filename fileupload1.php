<?php

$conn = mysqli_connect("localhost", "root", "", "files1");


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_path = "uploads/" . $file_name;
    
    move_uploaded_file($file_tmp, $file_path);
    mysqli_query($conn, "INSERT INTO files (name, path) VALUES ('$file_name', '$file_path')");
    echo "File uploaded!";
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" value="Upload">
</form>