<?php
$a=5; //101
$b=3; //011

// and 
// if 1 1= 1 and 1 0= 0
echo "and =".($a & $b)."<br>";


$c=8; //1000
$d=4; //0100 
// or
// if  1 0= 1 and 1 1=1 , 0 0=0
echo "or =".($c & $d)."<br>";

// not
$e=-9; //if number -ve 1001 +(n-1)
//if num +ve 1000 -(n+1)
echo " -ve not =".(~$e)."<br>";

// not
$e=8; //if number negative(-ve)  +(n-1)
//if num positive(+ve) 1000 -(n+1)
echo " +ve not =".(~$e)."<br>";

// xor
$f=14; //1110 
$g=3; // 0011 //1101=13
// if 1 0 = 1 and 1 1 =0 
echo " xor =".($f^$g)."<br>";

// left shift
$h=-7; //0111 
$i=2; // 0010 //
// in left shift add zeros in right side 
//000000000000000000000111
//000000000000000000011100// 

echo " left shift =".($h<<$i)."<br>";

// right shift
$h=-7; //0110 
$i=2; // 0010 //
// in right shift add zeros in left side 
//100000000000000000000110
//001000000000000000000000// 

echo " right shift =".($h>>$i)."<br>";









?>