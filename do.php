<?php

$conn = mysqli_connect("localhost", "root", "", "files1");

if(isset($_GET['id'])) {
    $id =$_GET['id']; 
    $result = mysqli_query($conn, "SELECT name, path FROM files WHERE id=$id");
    
    if(mysqli_num_rows($result) > 0) {
        $file = mysqli_fetch_assoc($result);

       //header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=".$file['name']);
        echo $file['path'];
        
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Download</title>
</head>
<body>
    <h2>Download Files by ID</h2>
    <form method="get">
        <input type="number" name="id" placeholder="Enter File ID" required>
        <input type="submit" value="Download">
    </form>

   

</body>
</html>