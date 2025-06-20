<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <?php
    $st = [
        array("ram", "21", "kolkata", 8953697564),
        array("shyam", 25, "mumbai", 5856985698),
        array("ram", "21", "kolkata", 8953697564), 
        array("shyam", 25, "mumbai", 5856985698),
        array("ram", "21", "kolkata", 8953697564),
        array("shyam", 25, "mumbai", 5856985698),
        array("ram", "21", "kolkata", 8953697564),
        array("shyam", 25, "mumbai", 5856985698),
        array("ram", "21", "kolkata", 8953697564),
        array("shyam", 25, "mumbai", 5856985698),
        array("ram", "21", "kolkata", 8953697564), 
        array("shyam", 25, "mumbai", 5856985698),
        array("ram", "21", "kolkata", 8953697564),
        array("shyam", 25, "mumbai", 5856985698),
        array("ram", "21", "kolkata", 8953697564),
        array("shyam", 25, "mumbai", 5856985698),       
        array("ram", "21", "kolkata", 8953697564),
        array("shyam", 25, "mumbai", 5856985698),
        array("ram", "21", "kolkata", 8953697564), 
        array("shyam", 25, "mumbai", 5856985698),
        array("ram", "21", "kolkata", 8953697564),
        array("shyam", 25, "mumbai", 5856985698),
        array("ram", "21", "kolkata", 8953697564),
        array("shyam", 25, "mumbai", 5856985698)
    ];
    ?>

<table border="10" >
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Mobile</th>
    </tr>
        <?php
        // Loop through each row in the array
        foreach ($st as $s) {
            echo '<tr >';
            echo '<td>' . $s[0] . '</td>';
            echo '<td>' . $s[1] . '</td>';
            echo '<td>' . $s[2] . '</td>';
            echo '<td>' . $s[3] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</center>
</body>
</html>