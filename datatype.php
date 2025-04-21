<?php
$a = "day";
$b = 26;
$c = 98.99;
$d = true;
$e = false;
$f = array("red", "pink", "blue", "yellow");
$g = ["red", "pink", "blue", "yellow"];
$h = ["name" => "Reema", "address" => "hawrah", "trade" => "CSA", "mobile" => 8225078769];
$i = [
    ["anju", "anjali", "reema", "asha"],
    ["pink", "blue", "skyblue", "red"],
    [
        ["apple", "grapes", "orange", "mango"],

        [1, 2, 3, 4],
        ["dance", "music", "drowing", "art and craft"],
        ["A", "B", "C", "D"]
    ],
];
$j = "sorry";
$k = 123; 
$l = define("A","Apple");

$number = "50";
$number = (int) $number;

echo "String = " . "good" . $a . "<br>";
echo "Integer = " . "Age" . $b . "<br>";
echo "Float = " . "price" . $c . "<br>";
echo "Boolean = " . "True" . $d . "<br>";
echo "Boolean = " . "False" . $e . "<br>";
echo "Indexed Array = " . $f[1] . "<br>";
echo "Indexed Array = " . $g[0] . "<pre>";
print_r($i) . "<br>";
echo "<br>" . "Associate Array = " . $h["name"] . "<br>";
echo "Multidimension Array = " . $i[0][2] . "<br>";
echo "Multidimension Array = " . $i[1][1] . "<br>";
echo "Multidimension Array = " . $i[2][2][1] . "<br>";
echo "variable = ".$j."<br>".$k . "<br>";
echo "variable constants = ".A. "<br>";
var_dump($number);


?>
