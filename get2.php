
<?php
$conn = new mysqli("localhost", "root", "", "kolkata");


$sql = "SELECT * FROM hh";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<table border="10" >
    <tr>
        <th>id</th>
        <th>name</th>
        <th>Address</th>
        <th>Mobile</th>
    </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        
            echo '<tr >';
            echo '<td>' .$row['roll_no'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['address']. '</td>';
            echo '<td>' . $row['mobile']. '</td>';
            echo '</tr>';
        }
    }
        ?>
    </table>
</body>
</html>