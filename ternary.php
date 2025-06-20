
<?php
// in ternary operator we use if (?) and else (:).
$age=18;
$licence=0;

echo ($age>=18 && $licence=1) ? "you can drive" : "you can't";

echo "<br>";

$year=2100;
// for leap year
if($year % 4 == 0 && $year %100 !=0){
    echo "it is leap year";
}
else{
    echo "it is not a leap year";
}

?>