<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <center>
    <?php
    $st=array(
        array("ram","21","kolkata",8953697564),
        array("shyam",25,"mumbai",5856985698),
        array("ram","21","kolkata",8953697564), 
        array("shyam",25,"mumbai",5856985698),
        array("ram","21","kolkata",8953697564),
        array("shyam",25,"mumbai",5856985698),
        array("ram","21","kolkata",8953697564),
        array("shyam",25,"mumbai",5856985698),
        array("ram","21","kolkata",8953697564),
        array("shyam",25,"mumbai",5856985698),
        array("ram","21","kolkata",8953697564), 
        array("shyam",25,"mumbai",5856985698),
        array("ram","21","kolkata",8953697564),
        array("shyam",25,"mumbai",5856985698),
        array("ram","21","kolkata",8953697564),
        array("shyam",25,"mumbai",5856985698),       
        array("ram","21","kolkata",8953697564),
        array("shyam",25,"mumbai",5856985698),
        array("ram","21","kolkata",8953697564), 
        array("shyam",25,"mumbai",5856985698),
        array("ram","21","kolkata",8953697564),
        array("shyam",25,"mumbai",5856985698),
        array("ram","21","kolkata",8953697564),
        array("shyam",25,"mumbai",5856985698)
    );
    $records=isset($_GET['records'])?$_GET['records']:1;
    $ppage=5;
    $tp=ceil(count($st)/$ppage); 
    $s=($records-1)*$ppage;
 $std=array_slice($st,$s,$ppage);
    ?>
    <table border="20">
        <tr >
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>mobile</th>
        </tr>
    <?php
    foreach ($std as $s):
    ?>
    <tr align="middle" >
    <td><?php echo $s[0] ?></td>
    <td><?php echo $s[1] ?></td>
    <td><?php echo $s[2] ?></td>
    <td><?php echo $s[3] ?></td>
</tr>
<?php endforeach; ?>
</table>
    </center>
    <div>
    <?php 
// Loop through all the pages (from 1 to total pages)
for ($i = 1; $i <= $tp; $i++):
    // If the current page is selected, show it as bold
    if ($i == $records):
        echo "<strong>" . $i . "</strong>";  // Bold the current page number
    else:
        // Otherwise, show it as a clickable link
        echo "<a href='?records=" . $i . "'>" . $i . "</a>"; 
    endif;
endfor;
?>
             </div>          
</body>
</html>