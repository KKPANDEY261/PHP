
<?php
$a="  karan";
$b=password_hash("$a",PASSWORD_ARGON2ID);
echo $b;
//echo $a;

?>