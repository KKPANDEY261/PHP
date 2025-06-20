<?php
// and
// 1 1=1
$a=5; //101
$b=4; //100
      //100   
echo "and : ". ($a&$b)."<br>";


//or 
// 0 0 = 0
$c=6; //110
$d=4; //100
      //110   
echo "or : ". ($c|$d)."<br>";

//xor 
// on 1 0 = 1
//off  1 1=0   0 0=0
$e=6; //110
$f=4; //100
      //010   
echo "xor : ". ($e^$f)."<br>";

//not 
// invert bits
$g=15; //110
// 100000000000000000000000110 n+1 6+1 
echo "not : ". (~$g)."<br>";

//Left shift
// add zero on right side
$h=5; //101
$i=2;
// 00000000000000000000000000000101 
// 00000000000000000000000000010100 //20
echo "left shift : ". ($h<<$i)."<br>";

//Left shift
// add zero on right side and delete zero from left side
$h=7; //101
$i=4;
// 00000000000000000000000000000111
// 00000000000000000000000001110000 //20
echo "left shift : ". ($h<<$i)."<br>";

//signed right shift
// add zero on left side and delete value from left side
// remembers the weather the number was positive or negative
$j=7; //101
$k=2;
// 00000000000000000000000000000111
// 00000000000000000000000000000001 // 1
echo "right shift : ". ($j>>$k)."<br>";

//signed right shift
// add zero on left side and delete value from left side
// remembers the weather the number was positive or negative
$j=15; //1111
$k=2;
// 00000000000000000000000000001111
// 00000000000000000000000000000011 // 3
echo "right shift : ". ($j>>$k)."<br>";

//signed right shift
// add zero on left side and delete value from left side
// remembers the weather the number was positive or negative
$j= -12; // 1011
$k=2;
// 10000000000000000000000000001011
// 10000000000000000000000000000010 // -3
echo "negative value right shift : ". ($j>>$k)."<br>";

//signed right shift
// add zero on left side and delete value from left side
// remembers the weather the number was positive or negative
$j= -17; // 1000000010000
$k=2;
// 10000000000000000000000000010000
// 10000000000000000000000000000100 // -5
echo "negative value right shift : ". ($j>>$k)."<br>";


?>