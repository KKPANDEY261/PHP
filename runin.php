<?php
echo "enter your age";
$input=trim(string: fgets(stream: STDIN));
if ($age >= 18) {
        $message = "You are an adult.";
    } elseif ($age >= 13) {
        $message = "You are a teenager.";
    } else {
        $message = "You are a child.";
    }

?>