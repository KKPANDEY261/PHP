<?php
$a=rand(9, 30);
$b=rand(9,30);
$c=$a+$b;
$cap=$a."+".$b."=";
if(isset($_POST['b1'])){
    if($_POST['b2']==$_POST['b3']){
        echo '<center>'.'<font color="green" size="5">'."welcome".'</font>'.'</center>';
    }
    else{
        echo '<center>'.'<font color="red" size="5">'."wrong captcha".'</font>'.'</center>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, input{
            font-size: 50px;
        }
        </style>
</head>
<body>
    <center>
        <form method="post">
         <?php
         echo $cap;
         ?>
         <input type="hidden" name="b3" value="<?php echo $c;?>">
         <input type="text" name="b2" autofocus><br>
         <input type="submit" name="b1" value="match">
    </form>
</center>   
</body>
</html>