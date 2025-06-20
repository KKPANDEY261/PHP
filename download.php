<?php
// Database connection (same as your upload script)
$conn = mysqli_connect("localhost", "root", "", "files1");

    
    
    $result = mysqli_query($conn, "SELECT id, name FROM files");
    while($row = mysqli_fetch_assoc($result)) {
        echo '<p>';
        echo $row['name'].' - ';
        echo '<a href="?id='.$row['id'].'">Download</a>';
        echo '</p>';
    }
    ?>
</body>
</html>