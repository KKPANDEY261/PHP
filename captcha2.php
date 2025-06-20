<?php
session_start();

// Generate random captcha (mix of numbers and letters)
$captcha_code = rand(0, 9) . chr(rand(65, 90)); // Example: "7D"

// Store in session for verification
$_SESSION['captcha'] = $captcha_code;

if(isset($_POST['submit'])){
    $user_input = $_POST['captcha_input'];
    
    if($user_input == $_SESSION['captcha']){
        echo '<p style="color:green;">Correct! Welcome.</p>';
    } else {
        echo '<p style="color:red;">Wrong captcha. Try again.</p>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Captcha</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 50px; }
        .captcha-box { 
            font-size: 24px; 
            letter-spacing: 5px;
            padding: 10px;
            background: #f0f0f0;
            display: inline-block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Simple Captcha Verification</h2>
    
    <form method="post">
        <div class="captcha-box">
            <?php echo $_SESSION['captcha']; ?>
        </div><br>
        
        <input type="text" name="captcha_input" required 
               placeholder="Enter the code" style="padding: 8px;"><br><br>
        
        <input type="submit" name="submit" value="Verify">
    </form>
</body>
</html>