<?php
// 1. Database Connection
$conn = mysqli_connect("localhost", "root", "", "files1");

// 2. Only run on form submission (POST request)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    
    // Read the file content (no escaping)
    $file_content = file_get_contents($file_tmp);
    
    // Direct query (vulnerable to SQL injection)
    mysqli_query($conn, "INSERT INTO files (name, path) VALUES ('$file_name', '$file_content')");
    
    echo "File uploaded and stored in database!";
}
?>

<!-- Simple HTML Form -->
<form method="post" >
    <input type="file" name="file" required>
    <input type="submit" value="Upload">
</form>