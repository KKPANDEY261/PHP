<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.tooltip{
position: relative;
display: inline-block;
border-bottom:1px dotted black;
cursor: help;
}
.tooltip .text{
    display: none;
    width: 120px;
    background-color: #555;
    color:#fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px;
    position: absolute;
    z-index:1;
    top: 50%;
    left:100%;
    margin-left: -60px;
    opacity:0;
    transition: opacity 0.3s;
}
.tooltip:hover .text{
    display: block;
    opacity: 1;
}
    </style>
</head>
<body>
    <?php
$content="msg is here";
?>
<div class="tooltip">
tooltip button
<span class="text">
<?php echo $content;?>
</span>
</div>
</body>
</html>