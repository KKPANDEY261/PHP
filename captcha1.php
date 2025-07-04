<?php
session_start();
if (isset($_SESSION['admin'])) {
    header('location:home.php');
}
?>
<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body style="background-image: url('../images/bg.jpg'); background-size: cover;" class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b style="color:#fff;">Library System in NSTI HOWRAH</b>
        </div>

        <div class="login-box-body" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 10px; padding: 20px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);">
            <p class="login-box-msg">Sign in to start your session</p>

            <form method="post" action="your_php_file.php">
                <table style="margin: auto;">
                    <tr>
                        <td width="215">Validation code</td>
                        <td width="162" style="font-size: 25px; background-color: lightgray; text-decoration:line-through; text-align:center;">
                            <?php
                            $arr = array_merge(range(0, 9), range("A", "Z"));
                            $captcha = "";
                            for ($i = 1; $i <= 7; $i++) {
                                $ch = $arr[array_rand($arr)];
                                $captcha .= $ch;
                            }
                            echo $captcha;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Validation status:</td>
                        <td style="text-align: left;">
                            <?php
                            if (isset($_POST['match'])) {
                                if ($_POST['img'] == $_POST['hid']) {
                                    echo "Captcha is matched";
                                } else {
                                    echo "Invalid captcha";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Enter the above code here:</td>
                        <td><input type="text" name="img"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" name="match" value="Submit Security Code">
                        </td>
                    </tr>
                </table>
                <input type="hidden" value="<?php echo $captcha; ?>" name="hid"/>
            </form>
        </div>
        <?php
        if (isset($_SESSION['error'])) {
            echo "
        <div class='callout callout-danger text-center mt20'>
            <p>" . $_SESSION['error'] . "</p> 
          </div>
      ";
            unset($_SESSION['error']);
        }
        ?>
    </div>

    <?php include 'includes/scripts.php' ?>
</body>

</html>
