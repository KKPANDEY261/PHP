<?php
$hostname="192.168.128.6";
$conn=new mysqli($hostname);
//print_r($conn);
//$a="create database nsti";
//$conn->query("create database nsti");
$conn->query("use nsti");
$conn->query("create table hh (id int,name varchar(20))");
?>