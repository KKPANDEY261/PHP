<?php
//$con =new mysqli("localhost","root");
//
//$con->query('create database if not exists library');
//$con->query('use library');
//$con->query('create table if not exists books (id int primary key AUTO_INCREMENT,book_name varchar(50))');
//
//

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $id=$_POST("id");
    $bookname=$_POST("book_name");

$frima=new mysqli("localhost","root","","library");
$frima->query("insert into books values('$id', '$bookname')");
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
        <input name="id">
        <input name="book_name">
        <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>