<?php
$a="karan";
$b=password_hash($a ,PASSWORD_DEFAULT);
$c="karan";
$d=password_hash($c ,PASSWORD_DEFAULT);

echo $b;
echo $d;
if($b==$d   ){
    echo "login";
}
else{
    echo "not login";

}
?>